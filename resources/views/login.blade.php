<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{ route('authenticate') }}">
        @csrf
        <div>
            <label for="">
                Email
                <input type="email" name="email" id="email">
            </label>
        </div>
        
        <br><br>

        <div>
            <label for="">
                Password
                <input type="password" name="password" id="password">
            </label>
        </div>

        <br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>