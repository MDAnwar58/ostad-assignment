<?php

include "../partials/db.php";
function blogAdded($conn)
{
    if (isset($_POST['blogSave'])) {
        $title = $_POST['title'];
        $excerpt = $_POST['excerpt'];

        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_type = $_FILES['image']['type'];
        if ($image_type != 'image/jpg' && $image_type != 'image/png' && $image_type != 'image/jpeg') {
            echo "please insert this extention's image 'jpeg,jpg,png'";
        }
        // Upload image file to server
        $image_path = '../images/' . $image_name;
        move_uploaded_file($image_tmp_name, $image_path);

        $blogSql = "INSERT INTO `blogs` (`title`, `image`, `excerpt`) VALUES ('$title', '$image_path', '$excerpt')";
        $query = mysqli_query($conn, $blogSql);
        if ($query) {
            echo "Blog inserted successfully";
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }
}



