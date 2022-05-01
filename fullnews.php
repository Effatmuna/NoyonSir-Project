<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Full News</title>
    <style media="screen">
      img{
        width: 750px;
        height: 300px;
      }
      .div1{
        margin-left: 320px;
        margin-top: 50px;
      }
      .div2{
        width: 750px;
        margin-top: 20px;
        font-size: 20px;
        padding:20px;
        
      }
      p{
        font-size: 20px;
        font-weight: bold;
        margin-left: 290px;
      }
    </style>
  </head>
  <body>
    <?php
    include 'index.php';
    include 'db.php';

    $id=$_POST['id'];
    
    $sql="SELECT * from news where ID ='$id'";
    $query=mysqli_query($conn,$sql);

    while ($info=mysqli_fetch_array($query)) {
      ?>
        <div class="div1">
          <p><?php echo $info['Date']; ?></p>
          <img src="image/<?php echo $info['Image']; ?>" alt="">
          <div class="div2">
            <?php echo $info['News']; ?>

          </div>
        </div>
      <?php
    }


    ?>

  </body>
</html>
