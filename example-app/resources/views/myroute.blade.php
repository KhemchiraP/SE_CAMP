<html>
    <head>
        <meta charset="utf-8">
        <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('https://i.pinimg.com/originals/ae/1c/02/ae1c02d34d9ce9e8a86380e246d8e355.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        h1 {
            text-align: center;
            margin-bottom: 10px;
        }
        </style>
    </head>
    <body>
        <h1>My Route Page</h1>
        <?php
        for ($i=1; $i<=24; $i++) {
            echo "<p>";
            echo "<td>" . $myinput . " x {$i} = " . ($myinput * $i) . "</td>";
            echo "</p>";
        }
        ?>
    </body>
</html>

