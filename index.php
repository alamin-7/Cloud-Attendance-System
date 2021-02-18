




     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<head>



<?php

//include("index1.php");
include("db.php");

     if(isset($_POST['submit']))
     {

        foreach ($_POST['attendence_status'] as $id => $attendence_status) {
            $student_name=$_POST['student_name'][$id];
            $roll_number=$_POST['roll_number'][$id];
            $date = date("Y-m-d H:i:s");
           // mydate("$date");

            mysqli_query($con,"insert into attendence_records(student_name,roll_number,attendence_status,date) values('$student_name','$roll_number','$attendence_status','$date')");
        }
     }

?>

<div class="panel panel-default">

	<div class= "panel panel-heading">
    <h2>
    <a class="btn btn-success" href="add.php"> Add Student</a>
    <a class="btn btn-success text-center" href="addctmark.php"> Add CT Marks</a>
    <a class="btn btn-info pull-right" href="show1.php"> View Attendence</a>
    <a class="btn btn-info pull-right" href="last_show.php"> View Performance</a>
    </h2>

    <h3><div class="well text-center">Date:<?php echo date("Y-m-d");?> </div></h3>
 
    <div class= "panel panel-body">
    <form action="index.php" method="Post">
    <table class="table table-striped">
    <tr>
    	<th>#Serail Number</th><th>Student Name</th><th>Roll Number</th><th>Attendence Status</th>

    </tr>

        <?php $result = mysqli_query($con,"select * from student_attendence");
        $serialnumber=0;
        $counter = 0;

        while($row=mysqli_fetch_array($result))
        {
             $serialnumber++;

             ?>
        <tr>

            <td>  <?php echo  $serialnumber; ?>  </td>
            <td>  <?php echo  $row['Student_name']; ?>  
            <input type="hidden" value="<?php echo $row['Student_name']; ?>" name = "student_name[]"> </td>
            <td>  <?php echo  $row['Roll']; ?> 
            <input type="hidden" value="<?php echo $row['Roll']; ?>" name = "roll_number[]"> </td>
            <td>
                <input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Present">Present
                <input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Absent">Absent
            </td>
        </tr>

            <?php  
            $counter++;  

        }

        ?> 
    	
     </table> 

     <input type="submit" name="submit" value="submit" class="btn btn-primary">

       <a class="btn btn-info pull-right" href="index1.php">Back</a>
     
     </form>

     </div>	


    </div>

 </div>
</head>
