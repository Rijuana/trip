<?php
include 'connection.php';
//quer for ahe between 1-10
$query="SELECT COUNT(*) AS count FROM  `trip` WHERE `age` BETWEEN 1 AND 10";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output1=$row['count'];
}
echo "Number of records for age between 1-10is:     ";
echo $output1;
echo "<br>";
//quer for ahe between 11-20
$query="SELECT COUNT(*) AS count FROM  `trip` WHERE `age` BETWEEN 11 AND 20";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output2=$row['count'];
}
echo "Number of records for age between 11-20 is:     ";
echo $output2;
echo "<br>";
//quer for ahe between 21-30
$query="SELECT COUNT(*) AS count FROM  `trip` WHERE `age` BETWEEN 21 AND 30";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output3=$row['count'];
}
echo "Number of records for age between 21-30 is:     ";
echo $output3;
echo "<br>";
//quer for ahe between 31-50
$query="SELECT COUNT(*) AS count FROM  `trip` WHERE `age` BETWEEN 31 AND 50";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output4=$row['count'];
}
echo "Number of records for age between 31-50 is :     ";
echo $output4;
echo "<br>";
//quer for ahe between 51-100
$query="SELECT COUNT(*) AS count FROM  `trip` WHERE `age` BETWEEN 51 AND 100";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output5=$row['count'];
}
echo "Number of records for age between 51-100 is:     ";
echo $output5;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//query for genders
$query="SELECT COUNT(*) AS count FROM `trip` WHERE `gender` = 'male'";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output6=$row['count'];
}
echo "Number of records for MALE:     ";
echo $output6;
echo "<br>";
$query="SELECT COUNT(*) AS count FROM `trip` WHERE `gender` = 'female'";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output6=$row['count'];
}
echo "Number of records for FEMALE:     ";
echo $output6;
echo "<br>";
echo "<br>";

//phone number null
echo "<br>";
$query="SELECT COUNT(*) AS count FROM `trip` WHERE `phone` IS  NULL";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output7=$row['count'];
}
echo "Number of records for NO PHONE:     ";
echo $output7;
echo "<br>";
//phone number null
echo "<br>";
$query="SELECT COUNT(*) AS count FROM `trip` WHERE `EMAIL` IS  NULL";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output8=$row['count'];
}
echo "Number of records for NO EMAIL:     ";
echo $output8;
echo "<br>";
echo "<br>";
echo "<br>";
//NAME START WITH ALPHABETs


$query="SELECT COUNT(*) AS count FROM `trip`
where name LIKE 'A%'";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output9=$row['count'];
}
echo "Number of records for NAME STARTING WITH A:     ";
echo $output9;
echo "<br>";
$query="SELECT COUNT(*) AS count FROM `trip`
where name LIKE 'B%'";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output10=$row['count'];
}
echo "Number of records for NAME STARTING WITH B:     ";
echo $output10;
echo "<br>";
$query="SELECT COUNT(*) AS count FROM `trip`
where name LIKE 'C%'";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output11=$row['count'];
}
echo "Number of records for NAME STARTING WITH C:     ";
echo $output11;
echo "<br>";
$query="SELECT COUNT(*) AS count FROM `trip`
where name LIKE 'D%'";
$query_result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query_result)){

    $output12=$row['count'];
}
echo "Number of records for NAME STARTING WITH D:     ";
echo $output12;
echo "<br>";

$array=array($output1,$output2,$output3,$output4,$output5,$output6,$output7,$output8,$output9,$output10,$output11,$output12);
 json_encode($array);


?>
    