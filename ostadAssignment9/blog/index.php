<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Title</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- ======================header start====================== -->
    <?php include_once '../partials/header.php' ?>
    <!-- ======================header end====================== -->


    <!-- ======================blogs start====================== -->
    <div class="grid grid-cols-4 pt-10">
        <div class="blog-bg col-span-3">
            <div class="container ps-[5rem]">
                <div class="columns-1">
                    <div class="bg-slate-50 rounded mb-3">
                        <div class="columns-2">
                            <img src="https://images.pexels.com/photos/1591056/pexels-photo-1591056.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-96 h-[12rem] rounded-tl-lg rounded-bl-lg" alt="">
                            <div class="pt-8">
                                <h3 class="capitalize text-lg font-bold">This is first blog</h3>
                                <span class="me-2 text-sm">Admin</span><span>|</span><span class="ms-2 text-sm">21 May, 2023</span>
                                <p class="text-base text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, tempore? Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                <div class="text-right pe-5">
                                    <a href="../blog/show.php" class="text-sm">Read More <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-50 rounded">09</div>
                </div>
            </div>
        </div>

        <?php include_once '../partials/sidebar.php' ?>
    </div>
    <!-- ======================blogs end====================== -->

</body>

</html>