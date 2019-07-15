

  <?php



$_distArr = array();
$_distArr[17][71]=300;
$_distArr[17][16]=150;
$_distArr[71][17]=300;
$_distArr[71][16]=100;
$_distArr[71][61]=400;
$_distArr[61][71]=400;
$_distArr[61][51]=200;
$_distArr[51][61]=200;
$_distArr[51][41]=100;
$_distArr[51][11]=100;
$_distArr[41][51]=100;
$_distArr[41][31]=150;
$_distArr[31][41]=150;
$_distArr[31][21]=50;
$_distArr[21][31]=50;
$_distArr[11][51]=100;
$_distArr[11][10]=100;
$_distArr[11][12]=500;
$_distArr[11][15]=500;
$_distArr[10][11]=100;
$_distArr[10][91]=150;
$_distArr[91][10]=150;
$_distArr[91][81]=50;
$_distArr[81][91]=50;
$_distArr[12][11]=500;
$_distArr[12][13]=700;
$_distArr[13][12]=700;
$_distArr[13][14]=100;
$_distArr[14][13]=100;
$_distArr[14][16]=350;
$_distArr[16][15]=500;
$_distArr[16][14]=350;
$_distArr[16][71]=100;
$_distArr[16][17]=150;
$_distArr[15][11]=500;
$_distArr[15][16]=500;



//the start and the end
$a =$_POST['from'];// from index.php
$b =$_POST['to'];// from index.php

//initialize the array for storing

$S = array();//the nearest path with its parent and weight
$Q = array();//the left nodes without the nearest path
foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
$Q[$a] = 0;

//calculation for min
while(!empty($Q))
{
    $min = array_search(min($Q), $Q);//the most min weight
    if($min == $b) break;
    foreach($_distArr[$min] as $key=>$val)
     if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key])
      {
        $Q[$key] = $Q[$min] + $val;
        $S[$key] = array($min, $Q[$key]);
    }
    unset($Q[$min]);
}

//list the path checked ,works
$path = array();
$pos = $b;
while($pos != $a){
    $path[] = $pos;
    $pos = $S[$pos][0];
}
$path[] = $a;
$path = array_reverse($path);
// it works till here no problem
//print result

//echo "<br />From $a to $b";
//echo "<br />The length is ".$S[$b][1];
//echo "<br />Path is ".implode(' ', $path);
$rishi=implode(' to ', $path);



$rishi=str_replace("17","Main_gate_(1)",$rishi);
$rishi=str_replace("21","Hostel_D",$rishi);
$rishi=str_replace("31","Hostel_C",$rishi);
$rishi=str_replace("41","Hostel_B",$rishi);
$rishi=str_replace("51","Hostel_A",$rishi);
$rishi=str_replace("61","Hostel_PG",$rishi);
$rishi=str_replace("71","Audi",$rishi);
$rishi=str_replace("81","Western_gate",$rishi);
$rishi=str_replace("91","Hostel_M_and_frc",$rishi);
$rishi=str_replace("10","Hostel_j_and_COS",$rishi);
$rishi=str_replace("11","Hostel_H",$rishi);
$rishi=str_replace("12","Hostel_K",$rishi);
$rishi=str_replace("13","Library",$rishi);
$rishi=str_replace("14","Main_gate(2)",$rishi);
$rishi=str_replace("15","Hostel_girls_and_TAN",$rishi);
$rishi=str_replace("16","Academic_Block_and_workshop",$rishi);

 echo $rishi;
session_start();
$_SESSION['varname'] = $rishi;
$_SESSION['from'] =$a;
$_SESSION['to'] =$b;


if(isset($rishi))
{
  header("Location:http://localhost/project/queue.php ");
}
