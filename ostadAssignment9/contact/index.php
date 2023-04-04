<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Title</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Title</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- ======================header start====================== -->
    <?php include_once '../partials/header.php' ?>
    <!-- ======================header end====================== -->
    <?php

    include_once '../controller/ContactController.php';
    ContactRequest($conn);

    ?>
    <!-- =================contact start================= -->
    <div class="container mx-auto p-6">
        <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-xl font-bold mb-2">Contact Us</h2>
            <form method="post" action="">
                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700 mb-2">Name</label>
                    <input type="text" id="name" name="name" class="border-gray-400 border-2 p-2 rounded-md w-full" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" class="border-gray-400 border-2 p-2 rounded-md w-full" required>
                </div>
                <div class="mb-4">
                    <label for="subject" class="block font-medium text-gray-700 mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" class="border-gray-400 border-2 p-2 rounded-md w-full" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block font-medium text-gray-700 mb-2">Message</label>
                    <textarea id="message" name="message" class="border-gray-400 border-2 p-2 rounded-md w-full" required></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" name="contactSend" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- =================contact end================= -->
</body>

</html>