<?php  require_once('vendor/autoload.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>img2pdf - Grant</title>
</head>
<body>
<h2>Welcome</h2>

<form method="post" action="/display.php" enctype="multipart/form-data">
    <div>
        <label for="image_file">Image File:</label>
        <br/>
        <input type="file" name="image_file" />
    </div>
    <div>
        <label for="css">Css:</label>
        <br/>
        <textarea name="css" cols="50" rows="20">

            &lt;style type="text/css" media="print"&gt;

            body{
                background:red;
            }

            &lt;/style&gt;

        </textarea>
    </div>
    <div>
        <button>Submit.</button>
    </div>
</form>
</body>
</html>
