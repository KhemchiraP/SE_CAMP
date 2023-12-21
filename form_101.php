<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php?>
    <form action = "" method = "post" >
        <input type="text" name="my_val" />
        <button type = "submit">บันทึก</button>
    </form>
    <h1>
        <?php 
        
        print_r($_POST);
        if (isset($_POST['my_val'])){
            echo $_POST['my_val'];
        }
        ?>
    </h1>
</body>
</html>