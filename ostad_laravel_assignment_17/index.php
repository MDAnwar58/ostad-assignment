<?php

// Question: 1.Explain what Laravel's query builder is and how it provides a simple and elegant way to interact with databases.
// Answer: Laravel's query builder is a feature that provides a fluent, expressive, and database-agnostic way to interact with databases. It allows you to build and execute database queries using a chainable API, making it easier to construct complex queries while maintaining readability. The query builder abstracts the underlying database system and provides a unified syntax to interact with different databases. The query builder provides methods for various operations like selecting, inserting, updating, and deleting records.

// Question: 2.Write the code to retrieve the "excerpt" and "description" columns from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.
// Answer:
$posts = DB::table('posts')->select('excerpt', 'description')->get();
print_r($posts);

// Question: 3.Describe the purpose of the distinct() method in Laravel's query builder. How is it used in conjunction with the select() method?
// Answer:
$posts = DB::table('posts')->select('title')->distinct()->get();

// Question: 4.Write the code to retrieve the first record from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the "description" column of the $posts variable.
// Answer:
$posts = DB::table('posts')->where('id', 2)->first();
if ($posts) {
    echo $posts->description;
}

// Question: 5.Write the code to retrieve the "description" column from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.
// Answer:
$posts = DB::table('posts')->where('id', 2)->pluck('description');
print_r($posts);

// Question: 6.Explain the difference between the first() and find() methods in Laravel's query builder. How are they used to retrieve single records?
// Answer: 
$firstPost = DB::table('posts')->where('is_published', true)->first();
$foundPost = DB::table('posts')->find(2);

// Question: 7.Write the code to retrieve the "title" column from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.
// Answer: 
$posts = DB::table('posts')->pluck('title');
print_r($posts);

// Question: 8.Write the code to insert a new record into the "posts" table using Laravel's query builder. Set the "title" and "slug" columns to 'X', and the "excerpt" and "description" columns to 'excerpt' and 'description', respectively. Set the "is_published" column to true and the "min_to_read" column to 2. Print the result of the insert operation.
// Answer: 
$result = DB::table('posts')->insert([
    'title' => 'X',
    'slug' => 'X',
    'excerpt' => 'excerpt',
    'description' => 'description',
    'is_published' => true,
    'min_to_read' => 2
]);

print_r($result);

// Question: 9.Write the code to update the "excerpt" and "description" columns of the record with the "id" of 2 in the "posts" table using Laravel's query builder. Set the new values to 'Laravel 10'. Print the number of affected rows.
// Answer: 
$affectedRows = DB::table('posts')->where('id', 2)->update([
    'excerpt' => 'Laravel 10',
    'description' => 'Laravel 10'
]);

echo $affectedRows;

// Question: 10.Write the code to delete the record with the "id" of 3 from the "posts" table using Laravel's query builder. Print the number of affected rows.
// Answer: 
$affectedRows = DB::table('posts')->where('id', 3)->delete();
echo $affectedRows;

// Question: 11.Explain the purpose and usage of the aggregate methods count(), sum(), avg(), max(), and min() in Laravel's query builder. Provide an example of each.
// Answer: 
// * count()
$count = DB::table('posts')->count();
// * sum()
$sum = DB::table('orders')->sum('amount');
// * avg()
$average = DB::table('ratings')->avg('score');
// * max()
$max = DB::table('products')->max('price');
// * min()
$min = DB::table('products')->min('price');


// Question: 12.Describe how the whereNot() method is used in Laravel's query builder. Provide an example of its usage.
// Answer: 
$posts = DB::table('posts')->whereNot('is_published', true)->get();

// Question: 13.Explain the difference between the exists() and doesntExist() methods in Laravel's query builder. How are they used to check the existence of records?
// Answer: 
// * exists()
$exists = DB::table('posts')->where('id', 2)->exists();
// * doesntExist()
$doesntExist = DB::table('posts')->where('id', 2)->doesntExist();

// Question: 14.Write the code to retrieve records from the "posts" table where the "min_to_read" column is between 1 and 5 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.
// Answer:
$posts = DB::table('posts')->whereBetween('min_to_read', [1, 5])->get();
print_r($posts);

// Question: 15.Write the code to increment the "min_to_read" column value of the record with the "id" of 3 in the "posts" table by 1 using Laravel's query builder. Print the number of affected rows.
// Answer:
$affectedRows = DB::table('posts')->where('id', 3)->increment('min_to_read');
echo $affectedRows;