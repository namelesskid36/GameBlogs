<?php

// Don't display server errors 
ini_set("display_errors", "off");

// Initialize a database connection

$host="localhost";
$port="3306";
$username="root";
$password="";
$database="gamehub";
$conn= mysqli_connect($host.":".$port,$username,$password,$database);
if (!$conn){
    echo "Not Connected";
    die();
}

// Destroy if not possible to create a connection
if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}

// Get data to display on index page
$sql = "SELECT * FROM blog";
$query = mysqli_query($conn, $sql);

// Create a new post
if(isset($_REQUEST['new_post'])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $sql = "INSERT INTO blog(title, content, author_id) VALUES('$title', '$content', '{$_SESSION['user_id']}')";
    mysqli_query($conn, $sql);

    echo $sql;

    header("Location: index.php?info=added");
    exit();
}

// Get post data based on id
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM blog WHERE id = $id";
    $query = mysqli_query($conn, $sql);
}

// Delete a post
if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];

    // Retrieve the post from the database
    $sql = "SELECT * FROM blog WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $post = mysqli_fetch_assoc($query);

    // Check if the user is the author of the post
    if ($post['author_id'] === $_SESSION['user_id']) {
        $sql = "DELETE FROM blog WHERE id = $id";
        mysqli_query($conn, $sql);
    } else {
        // User is not authorized to delete the post, handle accordingly (e.g., display an error message)
    }

    header("Location: index.php");
    exit();
}

// Update a post
if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    // Retrieve the post from the database
    $sql = "SELECT * FROM blog WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $post = mysqli_fetch_assoc($query);

    // Check if the user is the author of the post
    if ($post['author_id'] === $_SESSION['user_id']) {
        $sql = "UPDATE blog SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);
    } else {
        // User is not authorized to update the post, handle accordingly (e.g., display an error message)
    }

    header("Location: index.php");
    exit();
}
