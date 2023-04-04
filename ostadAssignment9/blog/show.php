<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Details</title>


    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- ======================header start====================== -->
    <?php include_once '../partials/header.php' ?>
    <!-- ======================header end====================== -->


    <!-- ======================blogs start====================== -->
    <?php
    $id = $_GET['id'];
    $blogShowSql = "SELECT * FROM blogs WHERE id = $id";
    $query = $conn->query($blogShowSql);

    if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();
    ?>

        <div class="grid grid-cols-4 pt-10 pb-10">
            <div class="blog-bg col-span-3">
                <div class="container px-[3rem]">
                    <img src="../images/<?php echo $row['image'] ?>" class="w-[100%] h-[80vh]" alt="">
                    <h2 class="capitalize text-xl font-bold pt-2 pb-1"><?php echo $row['title'] ?></h2>
                    <p class="text-base text-slate-500 pt-1">
                        <?php echo $row['excerpt'] ?>
                    </p>
                    <div class="flex items-center justify-end mt-8">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.yourblog.com/post-title" target="_blank" rel="noopener" class="bg-blue-600 text-white px-3 py-1 rounded-md mr-2">
                            <i class="fab fa-facebook-f mr-2"></i> Share on Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=https://www.yourblog.com/post-title&amp;text=Check%20out%20this%20awesome%20blog%20post%20on%20YourBlog%20by%20@yourusername" target="_blank" rel="noopener" class="bg-blue-400 text-white  px-3 py-1 rounded-md">
                            <i class="fab fa-twitter mr-2"></i> Share on Twitter
                        </a>
                    </div>
                </div>
            </div>
        <?php
    }
        ?>

        <?php include_once '../partials/sidebar.php' ?>
        </div>
        <!-- ======================blogs end====================== -->

</body>

</html>