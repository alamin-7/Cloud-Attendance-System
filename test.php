

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
       <th>Student Name</th><th>Roll Number</th><th>Total Attend</th><th>Average CT Marks</th>

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
    

                 


            <td>  <?php echo  $row['Student_name']; ?>  
            <input type="hidden" value="<?php echo $row['Student_name']; ?>" name = "student_name[]"> </td>
            <td>  <?php echo  $row['Roll']; ?> 
            <input type="hidden" value="<?php echo $row['Roll']; ?>" name = "roll_number[]"> </td>
            <td> <?php echo  $r ?> </td>
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
