<?php
    /**
     * generate.php
     *
     * Generates a random sentence or paragraph using a supplied grammar
     * Designed to answer AJAX requests.
     */
    require("../includes/config.php");
    
    //get name of grammar file to load from ajax data
    $grammar_name = $_POST['source1'];
    
    //load grammar
    $grammar = query("SELECT * FROM grammars WHERE name = '$grammar_name'");
    if(!$grammar)
    {
        apologize("for some reason the grammar you want doesnt exist on the server :(");
    }
    
    //increment view count
    $id = $grammar[0]["id"];
	query("UPDATE grammars SET views = views + 1 WHERE id = $id");
	
    $grammar = fopen("../grammars/" . $grammar[0]["file_name"], "r");
    if (!$grammar)
    {
        apologize("php failed to load the grammar file because its stupid.");
    }
    
    //load the definitions into an associative array:
    while(! feof($grammar))
    {
        $line = fgets($grammar);
        
		//if line begins with a { we begin a definition
		if ($line[0] == '{')
		{
			//get the name of the definition
			$def_name = fgets($grammar);

			//next we read until we get to a } signaling the end of the definition
			$line3 = fgets($grammar);
			while (! feof($grammar) && $line3[0] != '}')
			{
				$d[] = trim($line3, ";\r\n\t ");
				$line3 = fgets($grammar);
			}
			
			//make sure we actually got some productions
			if (isset($d))
			{
			    //add to definitions
			    $definitions[trim($def_name)] = $d;
			    
			    //'erase' $d so we can start fresh next loop
			    unset($d);
			}
		}
    }
    
	//choose random production from <start> definition
	$output = $definitions["<start>"][rand(0, count($definitions["<start>"]) - 1)];

	//expand non terminals until done
	$def = containsNonTerminal($output);
	while ($def)
	{
		//look up definition and choose a random production
		$prod = $definitions[$def][rand(0, count($definitions[$def]) - 1)];
		print($def);

		$output = insert_production($output, $prod);
		
		//look for more non terminals
	    $def = containsNonTerminal($output);
	}
	
	//send result back to web page
	print(format_punctuation(format_punctuation($output)));
	
	//replace the non terminal with that production
	function insert_production($o, $p)
	{
		$len = strlen($o);
		for ($i = 0; $i < $len; $i++)
		{
			//find location of first non terminal (its a <)
			if ($o[$i] == '<')
			{
				//find length of that non terminal (num chars til you hit a >) j
				for ($j = $i; $j < $len; $j++)
				{
					if ($o[$j] == '>')
					{
					    //erase from string i to j
						$o = substr($o, 0, $i) . substr($o, $j+1);
						
						//insert prod into string at position i
					    $o = substr_replace($o, $p, $i, 0);
					    return $o;
					}
				}
			}
		}
		return $o;
	}
	
	//checks whether a string contains a non-terminal ie: <bleh>
    //returns non terminal (as string) if found, else false
    function containsNonTerminal($s)
    {
        $len = strlen($s);
    	for ($i = 0; $i < $len; $i++)
    	{
    		if ($s[$i] == '<')
    		{
    			$t = "<";
    			for ($j = $i+1; $j < $len && $s[$j] != '>'; $j++)
    			{
    				$t .= $s[$j];
    			}
    			$t .= ">";
    			return $t;
    		}
    	}
    	return false;
    }
    
    function format_punctuation($s)
    {
    	$formatted = "";
    	for($i = 0; $i < strlen($s); $i++)
    	{
    		if (!($s[$i] == ' ' && ctype_punct($s[$i+1])))
    		{
    			$formatted .= $s[$i];
    		}
    	}
    	return $formatted;
    }
    
    
    
?>