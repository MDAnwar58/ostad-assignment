<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    .main-content {
        display: flex;
        justify-content: center;
        margin-top: 20%;
        transform: translateY(-50%);
    }
</style>

<body>

    <div class="main-content">
        <h1>Welcome, <?php echo $_GET["email"]; ?>!</h1>
    </div>
</body>

</html>