<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $newPost = $_POST['post_content'];
  file_put_contents('posts.txt', $newPost . PHP_EOL, FILE_APPEND);
}
$posts = file('posts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="landingpage.css">
  <title>WasteHub</title>
</head>
<body>

  <div class="container">

    <div class="top">
      <h1><span class="t1">Waste</span><span class="t2">Hub</span></h1>
    </div>

    <div class="mid">
      <h1>
        <span class="b1">Management</span><br>
        <span class="b2">System &verbar;</span><span class="b3">&nbsp;&nbsp;Kumintang Ilaya,</span>
        <span class="b4">Batangas City</span>
      </h1>
    </div>

    <div class="menu">
      
      <div class="menu-content">
        <button class="image-button"></button>
        <div class="menu-items">
          <button class="acc"><a href="sched.html">Schedule</a></button>
          <button class="acc"><a href="account.html">Forum</a></button>
        </div>
      </div>

      <div class="anns">
        <span>Announcements</span>
        <br>
        <ul>
          
          <?php foreach ($posts as $post): ?>
              <li><?= htmlspecialchars($post) ?></li>
          <?php endforeach; ?>
      </ul>
      </div>
      
    </div>

    <div class="wave">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>

  </div>

  <footer>
    <div class="footer-socials">

      <div class="socials">
        <a href="https://www.facebook.com/anakngkumintangilaya?_rdc=1&_rdr" target="_blank">
          <button class="fb"></button>
        </a>
        <a href="https://mail.google.com/mail/?view=cm&to=mekelcruzz@gmail.com" target="_blank">
          <button class="email"></button>
        </a>
        <hr class="a1">
        <hr class="a2">
      </div>

      <div class="newsletter">
        <h1>NEWSLETTER</h1>
        <div class="inputbox">
          <form id="subscribeForm" action="subscribe.php" method="post">
            <div class="inputbox">
              <input type="email" name="email" id="emailInput" required="required">
                <span>Email Address</span>
                <button class="btn1" type="submit">Subscribe</button>
            </div>
        </form>
        </div>
      </div>
    </div>

  </footer>

  <script src="landingpage.js"></script>
</body>

</html>
