<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    require("../includes/config.php");
    $target_dir = "../grammars/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $extension = pathinfo($target_file,PATHINFO_EXTENSION);
    
    // Check if file already exists
    //TODO: allow same file name (just rename uploaded file)
    if (file_exists($target_file)) {
        apologize("Sorry, file already exists.");
        $uploadOk = 0;
    }
    // Check file size (max 500kb)
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        apologize("Sorry, your file is too large.");
        $uploadOk = 0;
    }
    // Allow certain file formats (.txt and .g)
    if($extension != "g" && $extension != "txt") {
        apologize("Sorry, only .txt and .g files are allowed.");
        $uploadOk = 0;
    }
    // Ensure file name length is < 30 
    if (strlen($_FILES["fileToUpload"]["name"]) > 30)
    {
        apologize("Sorry, file name must be less that 30 characters.");
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        apologize("Sorry, your file was not uploaded.");
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Validate grammar syntax
            if (!validate_file($target_file))
            {
                apologize("Your grammar file doesn't look right.");
            }
            // add file to database
            query("INSERT INTO grammars(file_name, name, views) VALUES('" . $_FILES["fileToUpload"]["name"] ."', '". file_name_trim($_FILES["fileToUpload"]["name"]) ."', ". 0 . ")");
            redirect("index.php");
        } else {
            apologize("Sorry, there was an error uploading your file.");
        }
    }
}

function validate_file($file)
{
    return true;
}
?>