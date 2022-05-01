<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>News Sharing Site</title>
    <style media="screen">
      body{
       
        color:white;
      }
      .div1{
        border: 1px solid;
        width: 420px;
        float: left;
        margin-left: 10px;
        padding-bottom: 15px;
        margin-top: 5px;
        margin-bottom:10px;
        background-color: teal;

        box-shadow:2px 3px 1px gray;
      }
    
      .div2{
        width: 150px;
        border: 1px solid white;
        max-height: 120px;
        overflow:hidden;
        float:left;
        margin-top: 10px;
        margin-left: 23px;
        padding: 1px;
       color:white;
        font-size: 20px;
       
      }
      img{
        width: 200px;
        height: 160px;
        float: left;
        margin-left: 20px;
        margin-top: 10px;
      }
      .divmain{
        margin-left: 25px;
        
      
      }
      .div3{
        float: left;
        margin-top: 10px;
        margin-right: 200px;

      }
      #label1{
        font-size: 20px;
        font-weight: bold;
        margin-left: 60px;
      }
      #label2{
        font-size: 20px;
        font-weight: bold;
        margin-left: 14px;
      }
      form{
        margin-top: -60px;
        float: right;
        margin-right: 55px;

      }
      #readfullnews{
        font-size: 15px;
        font-weight: bold;
        padding:10px;
        border:none;
        position:relative;
        left:35px;
        color:teal;
        background-color:azure;
        border-radius:20px;
        cursor:pointer;
      }
      #readfullnews:hover{
        background-color:skyblue;
        color:white;
        
      }
    </style>
  </head>
  <body>
   
    <?php include 'index.php' ?>
    <br><br>
    <h1  style="color:teal; margin-left:600px;margin-top:-20px;">Current News</h1>
    <div class="divmain" >
      <?php
      include 'db.php';

      $sql="SELECT * from news order by ID desc";
      $query=mysqli_query($conn,$sql);

      while ($info=mysqli_fetch_array($query)) {
        ?>

        <div class="div1">
          <img src="image/<?php echo $info['Image']; ?>" alt="">
          <div class="div2">
           <div style="padding-left:5px;"> <?php echo $info['News'];?></div>
          </div>

          <div class="div3">
            <label id="label1"> <?php echo formatDate3($info['Date']); ?> </label><br><br>
            <label id="label2"> <?php echo formatDate1($info['Date']); ?></label>
            <label id="label2"> <?php echo formatDate2($info['Date']); ?> </label>

          </div>
          <form class="" action="fullnews.php" method="post">
            <input type="text" name="id" value="<?php echo $info['ID']; ?>" hidden>
            <input id="readfullnews" type="submit" name="fullnews" value="Read Full News">

          </form>

        </div>

        <?php
      }

      ?>

    </div>

  </body>
</html>