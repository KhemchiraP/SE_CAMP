<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('https://i.pinimg.com/originals/e5/01/d8/e501d8cc387ad6fdf7d32f711627f299.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>My Folder and My Page</h1>
    <form method="POST" action="/my-route">
        @csrf
        <div>
            <input type="number" name="myinput" list="defaultNumbers">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
