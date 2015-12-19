<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $x = 5 + /* 15 + */ + 10;
        $y = 5;
        $z = 9;
        $g = 0;
        function test(){
            global $g;
            echo $g;
            $g = $g + 2;
        }
        
        function test2(){
            global $g;
            echo "trong ham test 2 : ".$g;
        }
        
        
        
        test();
        test();
        test();
        test2();
        ?>
    </body>
</html>
