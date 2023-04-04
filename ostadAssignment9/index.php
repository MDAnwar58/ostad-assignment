<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Home</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- ======================header start====================== -->
    <?php include_once 'partials/header.php' ?>
    <!-- ======================header end====================== -->


    <!-- ======================blogs start====================== -->

    <h2 class="text-center text-2xl font-bold mt-10 mb-5">Recent Posts</h2>

    <?php

    $blogSql = "SELECT * FROM `blogs` LIMIT 3";
    $query = $conn->query($blogSql);
    if ($query->num_rows > 0) {
        while ($blog = $query->fetch_assoc()) {
    ?>
            <div class="flex justify-center">
                <div class="w-full lg:px-[20%] md:px-[10%] sm:px-[3%] px-[1%]">
                    <div class="bg-slate-50 rounded mb-3">
                        <div class="columns-2">
                            <img src="https://images.pexels.com/photos/1591056/pexels-photo-1591056.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-96 h-[100%] rounded-tl-lg rounded-bl-lg" alt="">
                            <div class="sm:pt-16 pt-[5%]">
                                <h3 class="capitalize sm:text-lg text-sm font-bold"><?php echo $blog['title']; ?></h3>
                                <p class="text-xs sm:text-base text-slate-500"><?php echo limit_words($blog["excerpt"], 10) ?></p>
                                <div class="text-right pe-5">
                                    <a href="../blog/show.php?id=<?php echo $blog['id']; ?>" class="text-xs sm:text-sm">Read More <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
        <div class="text-center pb-10 pt-5">
            <a href="/blog" class="bg-neutral-800 text-slate-200 rounded px-3 py-1">More Blog</a>
        </div>
    <?php
    } else {
    ?>
        <div class="flex justify-center">
            <div class="w-full lg:px-[20%] md:px-[10%] sm:px-[3%] px-[1%]">
                <div class="bg-slate-50 rounded mb-3">
                    <div class="columns-1">
                        <div class="sm:pt-16 pt-[5%]">
                            <h3 class="capitalize sm:text-lg text-sm font-bold">Blog Not Found</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
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