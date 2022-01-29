<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link crossorigin="anonymous" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./style.css">
  <?php echo $css; ?>
  <title>Futura by Slanted</title>
</head>
<body>
  <nav class="nav">
    <ul class="nav__list">
      <li class="nav__list--logo nav__list--item"><a href="#"><img src="./assets/slanted.png"></a></li>
      <div class="nav__list--div">
    <li class="nav__list--item"><a href="#renner">Paul Renner<a></li>
      <li class="nav__list--item"><a href="#nazi">The nazis</a></li>
      <li class="nav__list--item"><a href="#culture">Type & Culture</a></li>
      <div>
    </ul>
  </nav>
  <!-- <div class="container"> -->
      <?php echo $content;?>
  <!-- </div> -->
  <?php echo $js; ?>
</body>
</html>
