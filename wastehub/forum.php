<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPost = $_POST['text'];
    file_put_contents('forum.txt', $newPost . PHP_EOL, FILE_APPEND);
}
$posts = file('forum.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./forum.css">
    <title>Forum</title>
</head>
<body>
    <a href="./landingpage.php"><img class="x" src="./assets/x-mark.png" alt="back"></a>
    <div class="container">
        <div class="post">
            <div class="post_container">
                <h1>Share your thought's</h1>
                <form method="post" action="">
                    <textarea name="text" id="text" placeholder="Type here..." cols="50" rows="15"></textarea>
                    <button>Post</button>
                </form>
            </div>
        </div>
        <div class="view">
            <div class="view_container">
                <h1>Forum</h1>
                <ul>
                    <?php foreach ($posts as $post): ?>
                        <li><span><?= htmlspecialchars($post) ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>   
        </div>
    </div>
</body>
</html>