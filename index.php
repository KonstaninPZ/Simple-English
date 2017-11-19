<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple English</title>
 
    </head>
    <body>
        <table border="1" width="100%">
            <tr>
                <td><a href="index.php">Main</a></td>
                <td><a href="edit vocabulary/Redact.php">Redact</a></td>
                <td><a href="#">Test</a></td>
                <td><a href="#">&#74</a></td>
            </tr>
        </table>
        <?php
        $a="&#74";
        for ($i = 65;$i<91;$i++){
            echo "&#".$i;
            echo '<br>';
        }
       // echo "$a";
        #
        // put your code here
        ?>
    </body>
</html>
