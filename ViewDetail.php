<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">  
   <!-- <link rel="stylesheet" type="text/css" href="css/navbar.css">    ---> 
    <link rel="stylesheet" type="text/css" href="css/createuser.css">  
</head>

<body style="background-color : lightblue;">
<?php
  include 'navbar.php';
?>
<?php
  /*  include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')"; 
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created Sucessfully');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }   */
  include 'config.php';
    $sid=$_GET['id'];
    $sql = "SELECT * FROM  users where id=$sid";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error : ".$sql."<br>".mysqli_error($conn);
    }  
    $rows=mysqli_fetch_assoc($result);  
    
?>

        <h2 class="text-center pt-4" style="color : #fff;"><b
        style="font-size:35px; border:2px solid #fff; 
        background-color: brown; clip-path: 
        polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%); 
        display: inline-block;
        padding:.5rem 3rem; margin:15px;">View User's Details</b></h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header" style="background-color : blue;">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis" style="background-color : #fff;"></div>
          <div class="screen-header-ellipsis" style="background-color : #fff;"></div>
          <div class="screen-header-ellipsis" style="background-color : #fff;"></div>
        </div>
      </div>
      <div class="screen-body" style="background-color : #fff;">
        <div class="screen-body-con-left">
          <img class="img-fluid" src="img/user1.jpg">
           <h1 id="name"><?php echo $rows['name']?></h1>
           <hr><hr>
        </div><hr style="color:black;">
        <div class="screen-body-con">
          <form class="app-form" method="post">
            <div class="app-form-gro">
                  <span>ID :</span><h1 class="view"><?php echo $rows['id'] ?></h1>
            </div>
            <div class="app-form-gro">
                  <span> Name :</span><h1 class="view"><?php echo $rows['name']?></h1>
            </div>
            <div class="app-form-gro">
                  <span>Email :</span><h1 class="view"><?php echo $rows['email'] ?></h1>
            </div>
            <div class="app-form-gro">
                  <span>Account No :</span><h1 class="view"><?php echo $rows['Account No'] ?></h1>
            </div>
            <div class="app-form-gro">
                  <span>Balance :</span><h1 class="view"><?php echo $rows['balance'] ?><h1>
            </div>
            <div class="app-form-gro">
                  <span>Mobile No :</span><h1 class="view"><?php echo $rows['Mobile No'] ?><h1>
            </div>
            <br>
            <div class="app-form-group button">
              <style>
                  .screen-body-con-left{
                    display:flex;
                  }
                  #name{
                    margin:30px;
                    margin-left:60px;
                    color:blue;
                    font-weight:bold;
                  }
                  .screen{
                      width:500px;
                      margin-left:85px;
                      background-color : #fff;
                  }
                 .img-fluid{
                  border: none; 
                  border-radius: 50%; 
                  width: 100px; 
                  height:100px;
                  margin-left:30px; */
                 }
                 .app-form-gro{
                   display:flex;
                 }
                 .screen-body{
                     display:inline;
                 }
                .app-form-button{
                     padding: 7px;
                     border: 4px solid lightgreen;
                     background: green;
                     color: #fff;
                     margin:15px;
                     border-radius: 5px;
                     margin-bottom:5px;
                  }
                  .view{
                    font-size:20px;
                    width:300px;
                    margin-right:0px;
                  }
                  span{
                    font-weight:bold;
                    width:200px;
                    margin-left:50px;
                    margin-right:50px;
                  }
              </style>
          <!---    <button class="app-form-button" type="submit" value="CREATE" name="submit">CREATE</button>
              <button class="app-form-button" type="reset" value="RESET" name="reset">RESET</button>  -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

            
<footer class="text-center mt-5 py-2">
            <p>&copy 2022. Made by <b><i>Aishwarya Annadate</i></b></p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>