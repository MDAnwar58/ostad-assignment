<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - blog</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- ======================header start====================== -->
    <?php include_once '../partials/header.php' ?>
    <!-- ======================header end====================== -->


    <!-- ======================blogs start====================== -->

    <div class="grid md:grid-cols-4 grid-cols-1 pt-10">
        <div class="sidebar px-3 block md:hidden mb-5">
            <form action="" method="get">
                <h4 class="text-slate-400 pb-2">Search Blogs</h4>
                <input type="text" name="search" class="border-4 border-Slate-400/100 w-[100%] ps-3" placeholder="search....">
                <button type="submit" name="blogSearch" class="bg-neutral-800 text-slate-200 rounded px-3 py-1 mt-1">Search</button>
            </form>
        </div>
        <div class="blog-bg md:col-span-3">
            <div class="container md:ps-[5rem] mx-auto px-3">
                <?php

                $blogSql = "SELECT * FROM `blogs`";
                $query = $conn->query($blogSql);
                if ($query->num_rows > 0) {
                    while ($blog = $query->fetch_assoc()) {
                ?>
                        <div class="columns-1">
                            <div class="bg-slate-50 rounded mb-3">
                                <div class="columns-2">
                                    <img src="https://images.pexels.com/photos/1591056/pexels-photo-1591056.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-96 h-[12rem] rounded-tl-lg rounded-bl-lg" alt="">
                                    <div class="pt-8">
                                        <h3 class="capitalize text-lg font-bold"><?php echo $blog['title'] ?></h3>
                                        <p class="text-base text-slate-500"><?php echo limit_words($blog["excerpt"], 10) ?></p>
                                        <div class="text-right pe-5">
                                            <a href="../blog/show.php?id=<?php echo $blog['id']; ?>" class="text-sm">Read More <span aria-hidden="true">&rarr;</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <div class="columns-1">
                        <div class="bg-slate-50 rounded mb-3">
                            <div class="columns-1">
                                <h3 class="capitalize text-lg font-bold text-center">Blog Not Found</h3>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <?php include_once '../partials/sidebar.php' ?>
    </div>
    <!-- ======================blogs end====================== -->
    <?php
    function limit_words($string, $word_limit)
    {
        // Split the string into an array of words
        $words = str_word_count($string, 1);

        // Limit the number of words in the array
        $limited_words = array_slice($words, 0, $word_limit);

        // Combine the limited words into a string
        $limited_string = implode(" ", $limited_words);

        // Add an ellipsis if the string was truncated
        if (count($words) > $word_limit) {
            $limited_string .= "...";
        }

        // Return the limited string
        return $limited_string;
    }

    ?>
</body>

</html>