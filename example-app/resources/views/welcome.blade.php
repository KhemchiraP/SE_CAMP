<!DOCTYPE html>
<html>
    <head>
        <title>My Multiplication</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <style>
            body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-size: 100% 100%; }
        h1 {
            text-align: center;
            margin-bottom: 20px;}
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;}
        </style>
    </head>
        <body>
        <h1>Multiplication Table</h1>
        <form id="multiplicationForm">
            <div>
                <input type="text" id="my_number" placeholder="Enter a number">
                <button onclick="myFunction()">submit</button>
                <table id="my_table"></table>
            </div>
        </form>
        <script>
            function myFunction(){
            var inputNumber = $('#my_number').val();
            var table = $('#my_table');
            let my_code_tr = ``
            table.empty();
                for(var i = 1; i <= 12;i++){
                var result = inputNumber * i;
                var row = $('<tr>');
                row.append($('<td>').text(inputNumber + ' x ' + i + ' = '));
                row.append($('<td>').text(result));
                table.append(row);
            }

            console.log(inputNumber);
            console.log('Click submit number');
        }
        $('#multiplicationForm').submit(function(event) {
            event.preventDefault();
        });
        </script>
    </body>

</html>
