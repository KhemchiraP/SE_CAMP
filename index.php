<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $multi_x = 12; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <style>
    .scroll-box {
            color: #63320e;
            width: 200px;
            height: 400px;
            overflow: auto;
            border: 2px solid #C8EAD1;
            padding: 10px;
            background-color: #C8EAD1;
    }
    </style>
    <body>
    <div class="scroll-box">
        <?php
        for ($i=1; $i<=24; $i++) {
            echo "<p>";
            echo "<td>" . $multi_x . " x {$i} = " . ($multi_x * $i) . "</td>";
            echo "</p>";
        }
        ?>
    </div>
</body>

</html>