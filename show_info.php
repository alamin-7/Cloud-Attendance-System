


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<?php

$con = mysqli_connect("localhost", "root","","Student_Attendence");

?>


<div class="panel panel-default">

	<div class= "panel panel-heading">
 
    <div class= "panel panel-body">
    <form action="show_info.php" method="Post">
    <table class="table table-striped">
    <tr>
    <th>Student Name</th><th>Roll Number</th><th>Date</th><th>Attendence Status</th>

    </tr>

        <?php $result = mysqli_query($con,"select * from student_attendence");
        $serialnumber=0;
        $counter = 0;

        while($row=mysqli_fetch_array($result));
        {
             $serialnumber++;
              $v = $row['Roll'];
              echo $v;

             ?>
        <tr>
            <td>  <?php echo  $row['Student_name']; ?>  
            <input type="hidden" value="<?php echo $row['Student_name']; ?>" name = "student_name[]"> </td>
            <td>  <?php echo  $row['Roll']; ?> 
            <input type="hidden" value="<?php echo $row['Roll']; ?>" name = "roll_number[]"> </td>
          
        </tr>

            <?php  
            $counter++; 
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