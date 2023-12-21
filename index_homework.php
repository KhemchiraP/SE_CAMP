<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Hello world<br><br>"; ?></h1>
    <?php echo "<h1>Hellow World<br><br></h1>" ?>
    <?php $var_a = "SE_CAMP" ?>
    <?php echo $var_b = 'Hello $var_a' ?>
    <br>
    <?php echo $var_c = "Hello $var_a" ?>
    <br>
    <?php 
    $var_c = $var_b = 1;
    if($var_b === $var_c){
        //true
        echo '$var_b === $var_c' ;
    }else if($var_b <> $var_c) {
        //true
        echo '$var_b == &var_c';
    }else{
        //false
        echo 'else';
    } ?>
    <br>
    <?php echo $var_C = 2; ?>
    <br>
    <?php 
    echo $var_c;
    echo "<br>";
    switch($var_c){
        case 1 :
            echo 11;
            break;
            default:
            echo "test";
        }
        $arry = array(1,2,3);
        $arry1 = [1,2,3];
        $arry2[] = 1;
        $arry2[] = 2;
        $arry2[] = 3;
        $arry2[] = "Hello";
        $arry2['SE'] = "World";
    ?> <?php  print_r($arry); ?>
    <pre><?php print_r($arry);?></pre>
    <pre><?php print_r($arry1);?></pre>
    <pre><?php print_r($arry2);?></pre>
    <?php foreach($arry2 as $key => $value){?>
        <h3><?php echo $arry2[$key]; ?>
        : <?php echo $key ?> 
        : <?php echo $value; ?> </h3>
        <?php
    }?>
    <?php
    function pre($value){
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }?>
</body>
</html>