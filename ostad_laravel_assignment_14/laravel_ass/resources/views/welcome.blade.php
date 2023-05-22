<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/submit-form') }}" method="POST">
        @csrf
        <div class="form-input">
            <label for="name">Name</label>
            <input type="text" name="name">
            <button type="submit">Request</button>
        </div>
    </form><br>
    <form action="{{ url('/file-upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-input">
            <label for="name">Avatar</label>
            <input type="file" name="avatar"><br><br>
            <button type="submit">Request</button>
        </div>
    </form><br>
    <form action="{{ url('/submit') }}" method="POST">
        @csrf
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" name="email">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
