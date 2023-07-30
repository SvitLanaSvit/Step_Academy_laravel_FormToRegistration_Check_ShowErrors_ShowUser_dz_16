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
        <h2>REGISTRATION</h2>
        <h2 class="alert alert-error">
            <?= session()->get('error') ?>
        </h2>
        <p class="alert alert-warning">
            <?
                $errors = session()->get('errors');
                if($errors && $errors->any()){
                    foreach ($errors->all() as $error) {
                        echo "<p style='color: red;'>$error</p>";
                    }
                }
            ?>
        </p>
        <form method="POST" action="/home/showuser">
            @csrf
            <div class="mb-3 w-25">
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="login" placeholder="Enter login..." name="login"
                    value="{{old('login')}}" required>
            </div>

            <div class="mb-3 w-25">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email..."
                    value="{{old('email')}}" required>
            </div>

            <div class="mb-3 w-25">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Enter age..."
                    value="{{old('age')}}" required>
            </div>

            <div class="mb-3 w-25">
                <label for="passwrd">Password:</label>
                <input type="password" class="form-control" id="passwrd" name="passwrd"
                    placeholder="Enter password..." value="{{old('passwrd')}}" required>
            </div>

            <div class="mb-3 w-25">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPassword" name="passwrd_confirmation"
                    placeholder="Enter password for confirm..." value="{{old('confirmPasswrd')}}" required>
            </div>

            <div class="btn-group">
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
</body>

</html>
