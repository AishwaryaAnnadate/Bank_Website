<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css"> 
 
    <title>Basic Banking System</title>
  </head>

  <body class="img">
  <?php
  include 'navbar.php';
  ?>
  
   
               <div class="heading text-center my-5">
                  <h3><b>Welcome to</b></h3>
                  <h1 style="font-size:45px;"><b style="color:#fff; margin-left:750px; ">SPARK BANK</b></h1>
                </div>  
         
            
           
      <!-- Activity section -->
            <div class="row-activity-text-center">
                  <div class="col-md-act">
                   
                    <br>
                    <a href="viewdetails.php"><button class="btn" >View User Details</button></a>
                  </div>
                  <div class="col-md-act">
                    
                    <br>
                    <a href="transfermoney.php"><button class="btn">Make a Transaction</button></a>
                  </div>
                  <div class="col-md-act">
                   
                    <br>
                    <a href="transactionhistory.php"><button class="btn">Transaction History</button></a>
                  </div>
            </div>
      </div>
      
      
        <style>
          .img{
            background-image:url(img/Bank9.jpg);
            min-height: 100vh;
            width: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
          }
          .container-fluid{
            height:700px;
            background-repeat:no-repeat;
            align-items:center;
          }
           .row-activity-text-center{
                    display: inline;
                    padding: 5px;
                    margin-right:500px;
                    height: 500px;
                    width: 50px;

              }
              
           .col-md-act{
             margin-left:900px;
             margin-bottom:5px;
           }
           .btn{
             width:400px;
             height:45px;
             margin:5px;
             
             border-radius: 8px;
             padding:8px;
	           color:#fff;
	           letter-spacing: 1.5px;
	           font-size: 20px;
	           transition: 0.5s;
             border:2px solid #fff;
             background: none ;
           }
           button:hover{
               background-color:lightblue;
               color:black;
           }
      </style>
          <footer class="footer" >
              <p class="para"><br>&copy 2022. Made by <b>Aishwarya Annadate</b><br></p>
          </footer>

          <style>
            .footer{
	               color:#fff;
	               background-color:#021222;
              	 letter-spacing: 0.5px;
                 height:60px;
             }
            .footer p{
	            margin-top: 150px;
              margin-bottom:5px;
            	font-size: 15px;
              margin-left:600px;
            }
            .para{
              justify-content:center;
            }
          </style>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>