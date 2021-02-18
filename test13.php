



     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<head>

         <?php 
  include('db.php')
 ?>




<?php 
    $result = mysqli_query($con,"select * from attendence_records");
    $counter = 0;  

    while($row=mysqli_fetch_array($result))
    {
        $dateToPirnt =   $row['date'];
       // echo $dateToPirnt;

         $counter++;  
        if($counter == 1)   $dateToPirnt   =   $row['date'] ;
        if($counter == 11)   $dateToPirnt1 =   $row['date'];
        if($counter == 21)   $dateToPirnt2 =   $row['date'] ;

       //  echo $dateToPirnt1;

        }
?> 
    	