<div class="toggle-btn-grp">
    <table>
        <?php
            $files = query("SELECT name FROM grammars");
            $count = 0;
            foreach ($files as $file)
            {
                if ($count % 3 == 0)
                {
                    echo "<tr>";
                }
                echo '<td><div><input type="radio" name="group4" onclick="generateText(';
                echo "'";
                print($file["name"]);
                echo "'";
                echo ')"/><label onclick="" class="toggle-btn">';
                print ($file["name"]);
                echo '</label></div></td>';
                if (($count+1) % 3 == 0)
                {
                    echo "</tr>";
                }
                $count++;
            }
        ?>
    </table>
</div>

<h2 id="the-text"></h2>

<script>
    function generateText(grammar)
    {
        $.ajax({
            type: 'post',
            url:'generate.php',
            data: {
                source1: grammar
            },
            complete: function (response)
            {
                if (response)
                {
                    var text = response.responseText;

                    //do stuff
                    if (text == null)
                    {
                        document.getElementById("the-text").innerHTML = "Something Really Broke :(";
                    }
                    else
                    {
                        //display text on webpage
                        document.getElementById("the-text").innerHTML = text;
                    }
                }
            }
        });
    }
</script>