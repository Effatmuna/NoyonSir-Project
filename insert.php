<!DOCTYPE html>
<html lang="en">
  <head >
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practice 1</title>
    <link rel="stylesheet" href="./css/style.css" />

 
 
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"
      integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA=="
      crossorigin="anonymous"
    />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" />
    <style>


        *{
          margin: 0;
          
          box-sizing: border-box;
        }
        header{
          margin:0 5px;
        }
        ul{
          list-style-type: none;
          background-color: cadetblue;
          width:100%;
          height:50px;
          margin-top: 0px;
          
        }
        li{
          float: left;
          margin-left: 50px;
          margin-top: 15px;
        }
        li a{
          text-decoration: none;
          color: aliceblue;
          font-size: 18px;
          display: flex;
          flex-direction: row;
        }
       input[type=file]{
         font-size: 20px;
       }
        .border{
            border: 2px solid gray;
            width:500px;
            position: relative;
            top:50px;
            left:430px;
        }
        textarea{
            width:400px;
            margin-left: 50px;
            margin-top: 20px;
             font-size: 15px;
          
        }
        .image{
            margin-top: 10px;
        margin-left: 150px;
        }
        .submit{
            margin-left: 210px;
            margin-bottom: 10px;
            padding:10px;
            font-size: 20px;
            background: cadetblue;
            border: none;
            color: white;
        }
        .submit:hover{
            background: greenyellow;
           transition-duration: 1s;
        }
        @media(max-width:500px){
            .border{
            border: 2px solid gray;
            width:300px;
            position: relative;
            top:50px;
            left:60px;
        }
        textarea{
            width:200px;
            margin-left: 50px;
            margin-top: 20px;

          
        }
        .submit{
           margin-left: 110px;
        }
        .image{
            margin-top: 10px;
            margin-left: 70px;
        }
        li{
        
          margin-left: 20px;
        
        }
        li a{
          text-decoration: none;
          color: black;
          font-size: 18px;
           width:200px;
        
          
        }
        .navbar .nav-item{
        
            margin-top: 50px;
        }
        .navbar .home{
            margin-left: -65px !important;
            z-index:5;
            overflow: hidden;
        }
       .navbar .all{
           height:100px;
           background-color: plum;
       }
    }
        </style>
        
    

    </head>
 
      
            
              <body >
            
            <header>
             <?php include 'index.php' ?> 
                      
              </header>
    
        <div class="border">
            <form class="insert.php" method="post" enctype="multipart/form-data">
             <textarea name="news" rows="20" cols="20" placeholder="Enter news" required></textarea><br>
             <input type="file" name="image" value="" class="image" required><br></br>
             <input type="submit" name="submit" value="Submit" class="submit">


            </form>
            <?php
            include 'db.php';
      
            if (isset($_POST['submit'])) {
              $news=$_POST['news'];
              $image=$_FILES['image']['name'];
              $image_type=$_FILES['image']['type'];
              $image_size=$_FILES['image']['size'];
              $image_tem_loc=$_FILES['image']['tmp_name'];
              $image_store="image/".$image;
      
              move_uploaded_file($image_tem_loc,$image_store);
      
              $sql="INSERT INTO news(News,Image) values('$news','$image')";
              $query=mysqli_query($conn,$sql);
      
            }
      
      
             ?>
        </div>
   




    </body>



    </html>