<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 12; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <table>
        <tbody>
            <?php
            for( $i=1; $i<=24; $i++ ) {
                echo "<tr>";
                echo "<td>" . $multi_x . " x {$i} = " . ($multi_x * $i) . "</td>";
                echo "</tr>";
                 
            }
        ?>
        </tbody>
    </table>
    <style>
        table{
          width:150px; 
          height:80px;  
          overflow: scroll;
        }
    </style>
</body>

</html>