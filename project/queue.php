<?php
  $link = mysqli_connect("localhost", "root", "", "rickshaw");
    if($link === false)
      {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }

        $sql = "SELECT *
        FROM data";
        if($result = mysqli_query($link, $sql))
        {
            if(mysqli_num_rows($result) > 0)
              {
                while($row = mysqli_fetch_array($result))
                  {
                    $front1= $row['q1front']  ;
                    $end1= $row['q1end']  ;

                    $front2= $row['q2front']  ;
                    $end2= $row['q2end']  ;
                  }
                mysqli_free_result($result);
              }
        }

// Close connection
  mysqli_close($link);

//////////////////here connection ends front and end of both queues obtaied

  session_start();
  $cp=$_SESSION['from'];//from dij
  $cp2=$_SESSION['to'];// from dij
  $link = mysqli_connect("localhost", "root", "", "rickshaw");
    if($link === false)
      {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }

///////////////////////////queue front dequeue

        if($cp==1 || $cp==16 || $cp==7)
        {
          $sql21 = "SELECT s_no, r_no
          FROM q1
          where s_no='$front1'";

            if($result = mysqli_query($link, $sql21))
              {

                if(mysqli_num_rows($result) > 0)
                  {
                    while($row = mysqli_fetch_array($result))
                      {
                        $s_no= $row['s_no'];
                        $r_no= $row['r_no'];

                      }
                  }
                }
                $front1=$front1+1;
            }
        //////////////////////////else wala case
        else
         {
            $sql27 = "SELECT s_no, r_no
            FROM q2
            where s_no='$front2'";

          if($result = mysqli_query($link, $sql27))
            {
              if(mysqli_num_rows($result) > 0)
                {
                  while($row = mysqli_fetch_array($result))
                    {
                      $s_no= $row['s_no'];
                      $r_no= $row['r_no'];

                    }
                  }
              }
              $front2=$front2+1;
            }
        /////////////////////////dequue done and now fetching contact no of it

        $sql33 = "SELECT *
        FROM rickshaw r
        where r.no= '$r_no'";
        if($result = mysqli_query($link, $sql33))
          {
            if(mysqli_num_rows($result) > 0)
              {
                while($row = mysqli_fetch_array($result))
                  {
                    $rik_number=$row['contact_no'];
                    $r_no=$row['no'];
                  }
              }
            }
      /////////////////////////////////////// no. obtained and send to message

      $_SESSION['rcno'] = $rik_number;
      $_SESSION['final'] = $r_no;
      /////////////////////////////////////number sent to message data fetch ,dequeue
  if($cp2==1 || $cp2==16 || $cp2==7)
  {
    $end1=$end1+1;
    $sql17 = "INSERT INTO q1 (s_no,r_no)
    VALUES ('$end1','$r_no')";

     mysqli_query($link, $sql17) ;
  }
//////////////////////////else wala case
else
 {
   $end2=$end2+1;
   $sql29 = "INSERT INTO q2 (s_no,r_no)
   VALUES ('$end2','$r_no')";

    mysqli_query($link, $sql29) ;
 }
/////////////////////////

$sql44="UPDATE data
        set q1front= '$front1',
            q2front= '$front2',
            q1end  =   '$end1',
            q2end  =   '$end2'
            where number=0";

        mysqli_query($link, $sql44) ;

  // Close connection
  mysqli_close($link);

  if(isset($rik_number))
  {
    header("Location:http://localhost/project/mess.php ");
  }



 ?>
