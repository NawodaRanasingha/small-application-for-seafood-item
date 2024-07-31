<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\aboutUs.css">
    <title>About Us</title>
    <style>
      body{
        background: url("assets/freshFish.jpg")no-repeat;
        background-size:cover;
      }
    </style>
</head>
<body>
<?php $activePage = 'aboutus'; ?>

<div class="wrapper">
        <div class="header">
          <?php   include 'components\nav.php'; ?>               
        </div>
        <div class="main">
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure accusantium officia voluptates.
             Delectus asperiores, quisquam a labore minima incidunt molestias aliquid dolorem fugiat eius.
             Nostrum quis asperiores eligendi repellendus consequatur.</p>
             sedfwef
             <?php include 'components\dep1.php';?>

        </div>
        <div class="footer">
        <?php   include 'components\footer.php'; ?>
        </div>
    </div>
</body>
</html>