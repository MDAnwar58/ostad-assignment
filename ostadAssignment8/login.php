<?php include_once('/xampp/htdocs/laravel-project/php_text/assignment/ostadAssignment8/controlller/LoginFunction.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<style>
    .main-content {
        display: flex;
        justify-content: center;
        margin-top: 20%;
        transform: translateY(-50%);
    }

    .main-content .row {
        background-color: rgb(242, 242, 242);
        width: 25%;
        border-radius: 5px;
    }

    .main-content .row h1 {
        text-align: center;
    }

    .main-content .row .column {
        padding: 1rem;
    }

    .main-content .row .column .form-control {
        width: 100%;
        height: 30px;
    }
</style>

<body>

    <div class="main-content">
        <div class="row">
            <h1>Login Form</h1>
            <hr>
            <div class="column">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label>Email Address:</label>
                    <input type="email" name="email" required class="form-control"><br><br>
                    <label>Password:</label>
                    <input type="password" name="password" required class="form-control"><br><br>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>