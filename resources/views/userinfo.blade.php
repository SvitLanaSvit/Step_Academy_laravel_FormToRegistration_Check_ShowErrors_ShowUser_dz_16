<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <table class="table table-striped w-25">
            <tr>
                <th>Login:</th>
                <td>{{$login}}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{$email}}</td>
            </tr>
            <tr>
                <th>Age:</th>
                <td>{{$age}}</td>
            </tr>
        </table>
        <a href="/" class="btn btn-primary">Home</a>
    </div>
</body>
</html>
