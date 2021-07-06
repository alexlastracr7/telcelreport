<?php

require 'conexion.php';

$db = conectarDB();

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

?>

<?php
        $fh = fopen($_FILES['file']['tmp_name'], 'r+');

        $lines = array();
        while( ($row = fgetcsv($fh, 8192)) !== FALSE) {
            $lines[] = $row;
        } 
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";

        echo "<pre>";
        var_dump($lines);
        echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telcel Report</title>
</head>
<body>
        <form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">

        <fieldset>
            <input type="file" name="file">
            <input type="submit" name="btn_submit" value="Upload File" />

            <?php
            $fh = fopen($_FILES['file']['tmp_name'], 'r+');

            $lines = array();
            while( ($row = fgetcsv($fh, 8192)) !== FALSE) {
                $lines[] = $row;
            }
            echo "<pre>";
            var_dump($_FILES);
            echo "</pre>";

            echo "<pre>";
            var_dump($lines[0]);
            echo "</pre>";
            ?>

            </div>
        </fieldset>
        


 </form>
    
</body>
</html>