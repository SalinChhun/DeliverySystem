<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{url('home')}}">Home |</a>
    <a href="{{url('about')}}">About |</a>
    <a href="{{url('contact')}}">Contact |</a>
    <a href="{{url('register')}}">Register</a>

    <div>
        <h1>Register Form</h1>
        <form action="" method="post">
            <p>
                Name: <input type="text" name="txtName"><br><br>
                Email: <input type="text" name="texEmail">
            </p>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>