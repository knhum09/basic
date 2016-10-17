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
    <center>
        <?php
        $a='abcdefg';
        $b=12;
        $c=TRUE;
        $arr=array("apple","papaya","orange");
        
        echo "Hello word<br>";
        echo "<hr>";
        echo $a."::".$b;
        echo "<hr>";
        echo $c;
        echo "<hr>";
        print_r($arr);
        echo "<hr>";
        echo $arr[0];
        echo "<hr>";
        $num_array=  count($arr);
        for($num_l=0;$num_l<$num_array;$num_l++){
        echo $arr[$num_l]." ";
        }
        echo "<hr>";
        
        // put your code here
        ?>
        <a href='testbasic1.php'>f1</a>
        <a href='while.php'>while</a>
        <a href='for.php'>for</a>
        <a href='array.php'>array</a>
        <a href='array2.php'>array2</a>
        <a href='oop1.php'>oop1</a>
        <br>
      
    </center>
    </body>
</html>
