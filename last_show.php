

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


<div class="panel panel-default">

	<div class= "panel panel-heading">
 
    <div class= "panel panel-body">
    <form action="index.php" method="Post">
    <table class="table table-striped">
    <tr>
       <th>Student Name</th><th>Roll Number</th><th><?php 
    $result = mysqli_query($con,"select * from attendence_records");
    $counter = 0;  

    while($row=mysqli_fetch_array($result))
    {
        $dateToPirnt =   $row['date'];
        echo $dateToPirnt;
        $counter++;  
        if($counter == 1) break;        
    }
?> </th><th><?php 
    $result = mysqli_query($con,"select * from attendence_records");
    $counter = 0;  

    while($row=mysqli_fetch_array($result))
    {
        $dateToPirnt =   $row['date'];
       // echo $dateToPirnt;

         $counter++;  
        if($counter == 1)   $dateToPirnt   =   $row['date'] ;
        if($counter == 11)   {
            $dateToPirnt1 =   $row['date'];
            echo $dateToPirnt1;
      }
        }
?></th><th> <?php 
    $result = mysqli_query($con,"select * from attendence_records");
    $counter = 0;  

    while($row=mysqli_fetch_array($result))
    {
        $dateToPirnt =   $row['date'];
       // echo $dateToPirnt;

         $counter++;  
        if($counter == 1)   $dateToPirnt   =   $row['date'] ;

         if($counter == 21)   {
            $dateToPirnt2 =   $row['date'] ;
            echo $dateToPirnt2;
        }
       
        }
?></th><th> <?php 
    $result = mysqli_query($con,"select * from attendence_records");
    $counter = 0;  

    while($row=mysqli_fetch_array($result))
    {
        $dateToPirnt =   $row['date'];
       // echo $dateToPirnt;

         $counter++;  
       // if($counter == 1)   $dateToPirnt   =   $row['date'] ;

         if($counter == 31)   {
            $dateToPirnt3 =   $row['date'] ;
            echo $dateToPirnt3;
        }
       
        }
?></th><th>Total Class</th><th>Percentage of Attendence</th><th>Attend Marks</th><th>CT-1</th><th>CT-2</th><th>CT-3</th><th>Average CT Marks</th>


    <?php 
    $result13 = mysqli_query($con,"select * from attendence_records");
    $counter = 0;  

    while($row13=mysqli_fetch_array($result13))
    {
        $dateToPirnt =   $row13['date'];
       // echo $dateToPirnt;

         $counter++;  
        if($counter == 1)    $dateToPirnt  =   $row13['date'] ;
        if($counter == 11)   $dateToPirnt1 =   $row13['date'];
        if($counter == 21)   $dateToPirnt2 =   $row13['date'] ;
        if($counter == 31)   $dateToPirnt3 =   $row13['date'] ;

      //echo $dateToPirnt1;

    }
?>



    </tr>

        <?php $result = mysqli_query($con,"select * from student_attendence");

        while($row=mysqli_fetch_array($result))
        {
             $v = $row['Roll'];

             ?>
        <tr>
           <?php $sql = "select count(roll_number) as total from attendence_records where roll_number='$v' and attendence_status='Present' ";
          $re = mysqli_query($con,$sql);
          $values = mysqli_fetch_assoc($re);
          $r = $values['total'];
          //echo $r;
          ?>

          
        <?php 
        	
        	$sql = "SELECT CT1,CT2,CT3 FROM ct where roll_number='$v' ";
			$result11 = $con->query($sql);
			$row1 = $result11->fetch_assoc();
			$CT =  ($row1['CT1']+$row1['CT2']+$row1['CT3'])/3.0;
         ?>

           <?php 
            $sql2 = mysqli_query($con,"select attendence_status from attendence_records where roll_number = '$v' ");
            $row2 = mysqli_fetch_array($sql2);
           // echo $row2;
         ?>
    

          <?php 
            $sql3 = mysqli_query($con,"select attendence_status from attendence_records where roll_number = '$v' and date = '$dateToPirnt1' ");
            $row3 = mysqli_fetch_array($sql3);
         ?> 

           <?php 
            $sql4 = mysqli_query($con,"select attendence_status from attendence_records where date = '$dateToPirnt2' and roll_number ='$v'");
            $row4 = mysqli_fetch_array($sql4);
           
         ?>

          <?php 
            $sql9 = mysqli_query($con,"select attendence_status from attendence_records where date = '$dateToPirnt2' and roll_number ='$v'");
            $row8 = mysqli_fetch_array($sql9);
           
         ?>


           <?php 
            
            $sql5 = "SELECT CT1 FROM ct where roll_number='$v' ";
            $result12 = $con->query($sql5);
            $row5 = $result12->fetch_assoc();
            $CT1 =  $row5['CT1'];
         ?>

          <?php 
            
            $sql6 = "SELECT CT2 FROM ct where roll_number='$v' ";
            $result13 = $con->query($sql6);
            $row6 = $result13->fetch_assoc();
            $CT2 =  $row6['CT2'];
         ?>

          <?php 
            
            $sql7 = "SELECT CT3 FROM ct where roll_number='$v' ";
            $result14 = $con->query($sql7);
            $row7 = $result14->fetch_assoc();
            $CT3 =  $row7['CT3'];
         ?>


         <?php $sql8 = "select count(distinct date) as total from attendence_records ";
          $re1 = mysqli_query($con,$sql8);
          $values1 = mysqli_fetch_assoc($re1);
          $Total_Class = $values1['total'];
         // echo $r1;

         // $per_sign = "%";
          ?>


          <?php
          $Attend_marks = (($r * 100) / $Total_Class);
         // echo $Attend_marks;
          if($Attend_marks <= 100.00 && $Attend_marks >= 90.00){
            $marks = 10;
          }
          else if($Attend_marks < 90.00 && $Attend_marks >=80.00){
            $marks = 9;
          }
           else if($Attend_marks < 80.00 && $Attend_marks >= 70.00){
            $marks = 8;
          }
           else if($Attend_marks < 70.00 && $Attend_marks >= 60.00){
            $marks = 7;
          }
          else{
            $marks = "Can't Attend the Exam";
          }

          ?>



            <td>  <?php echo  $row['Student_name']; ?>  
            <input type="hidden" value="<?php echo $row['Student_name']; ?>" name = "student_name[]"> </td>
            <td>  <?php echo  $row['Roll']; ?> 
            <input type="hidden" value="<?php echo $row['Roll']; ?>" name = "roll_number[]"> </td>
             <td>  <?php echo  $row2['attendence_status']; ?> 
            <input type="hidden" value="<?php echo $row2['attendence_status']; ?>" name = "attendence_status[]"> </td>
             <td>  <?php echo  $row3['attendence_status']; ?> 
            <input type="hidden" value="<?php echo $row3['attendence_status']; ?>" name = "attendence_status[]"> </td>
              <td>  <?php echo  $row4['attendence_status']; ?> 
            <input type="hidden" value="<?php echo $row4['attendence_status']; ?>" name = "attendence_status[]"> </td>
            <td>  <?php echo  $row8['attendence_status']; ?> 
            <input type="hidden" value="<?php echo $row8['attendence_status']; ?>" name = "attendence_status[]"> </td>
            <td> <?php echo  $Total_Class ?> </td>
            <td> <?php echo round ((($r * 100) / $Total_Class), 2)  ?> </td>
            <td> <?php echo  $marks ?> </td>
            <td> <?php echo $CT1 ?> </td>
            <td> <?php echo $CT2 ?> </td>
            <td> <?php echo $CT3 ?> </td>
            <td> <?php echo round($CT, 2);  ?> </td>

            
        </tr>

            <?php  

        }

        ?> 
    	
     </table> 
    <h2>
    <a class="btn btn-info" href="index.php">Back</a>
    </h2>
     </form>
     </div>
    </div>
 </div>
