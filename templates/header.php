<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <title>Generate</title>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <script>
        //make upload link function like a button by forwarding click to button
        $(function(){
            $("#upload_link").on('click', function(e){
                e.preventDefault();
                $("#upload:hidden").trigger('click');
            });
        });
        //auto submit file upload when file is chosen
        $(document).ready(function(){
            document.getElementById("upload").onchange = function() {
            document.getElementById("upload_button").click();
            };
        });
        </script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <h1>SELECT A TEMPLATE</h1>
                <h3>OR <u><a href="" id="upload_link">UPLOAD</a></u> YOUR OWN!</h3>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="upload">
                    <input type="submit" value="Upload Image" name="submit" id="upload_button">
                </form>
                <br><br>
            </div>

            <div id="middle">
