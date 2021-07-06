
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    
    <title>Telcel Report</title>
</head>


    <body class="body">

    <nav class="navegador">
        <img src="images/telcel.jpg" alt="" class="telcelimage">
    </nav>
        <form class="caja" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <fieldset>
                
                <input type="file" name="file">
               
                <input type="submit" name="btn_submit" value="Upload File" />

                <?php

                $fh = fopen($_FILES['file']['tmp_name'], 'r+');

                $lines = array();
                while( ($row = fgetcsv($fh, 8192)) !== FALSE) {
                    $lines[] = $row;
                }
                ?>

            </fieldset>
        </form>


            <?php 
            $tabla = $lines[0]; 
            
            echo "<pre>";
            var_dump($_FILES);
            echo "</pre>";
            ?>

            <table>
               
            <thead>
                    <tr>
                        <?php foreach($tabla as $key=>$value): ?>
                            <th><?php print_r($value); ?></th>
                        <?php endforeach; ?>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($tabla as $key1=>$value1): ?>
                        <td><?php print_r($value1); ?></td>
                    <?php endforeach; ?>
                </tr>
                
            </tbody>

        </table>

    </body>
</html>


