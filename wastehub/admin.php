<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPost = $_POST['post_content'];
    file_put_contents('posts.txt', $newPost . PHP_EOL, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Annoncement</title>
</head>
<body>
    <h1>POST AN ANNOUNCEMENT</h1>
    <form method="post" action="">
        <label for="post_content"></label>
        <textarea placeholder="Write an announcement" id="post_content" name="post_content" rows="4" cols="50"></textarea>
        <br>
        <button class="btn" type="button"><a href="landingpage.php">Back</a></button>


        <button type="submit">Post</button>
        
    </form>

    <div class="wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</body>
</html>
