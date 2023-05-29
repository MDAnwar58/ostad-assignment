<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Register</h2>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div class="form-input">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div class="form-input">
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <div class="form-input">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div><br>

        <button type="submit">Registration</button>
    </form><br><br><br><br><br><br><br>

    <h2>Contact</h2>
    <form action="{{ route('contact') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="4" required></textarea>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

</body>
</html>
