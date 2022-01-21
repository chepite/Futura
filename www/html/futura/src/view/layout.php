<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <?php echo $css; ?>
  <title>Futura by Slanted</title>
</head>
<body>
  <nav class="nav">
    <ul class="nav__list">
      <li class="nav__list--logo nav__list--item">Slanted</li>
      <div class="nav__list--div">
      <li class="nav__list--item">Paul Renner</li>
      <li class="nav__list--item">The nazis</li>
      <li class="nav__list--item">Type & Culture</li>
      <div>
    </ul>
  </nav>
  <div class="container">
      <?php echo $content;?>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
  <?php echo $js; ?>
</body>
</html>
