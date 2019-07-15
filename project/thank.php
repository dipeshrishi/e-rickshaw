<!doctype html>
  <html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <style>
    .yo{
      border:solid black 3px;
      position: absolute;
      left:20%;
      top:10%;
      font-size: 40px;
      color:black;
      opacity: 0.8;

    }
    body{
      background-image: url(img/6.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-origin: top -78px;



    }
    </style>
  </head>
  <body>

      <?php
      session_start();
      $no=$_SESSION['final']
      ?>

      <p class="yo">Thanks for using OUR SERVICES<br/>
        RIKSHAW Number "<?php echo $no  ?> " is arriving to you.</p>


  </body>
  </html>
