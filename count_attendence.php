
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<head>


<div class="panel panel-default">
<div class= "panel panel-heading">
 <div class= "panel panel-body">
 <form>
<table class="table table-striped">
    <tr>
    	<th>Student Name</th><th>Roll Number</th><th>Total Attend</th>

    </tr> 
   
         <?php 
include('db.php')
 ?>
         <?php $result = mysqli_query($con,"select * from student_attendence"); ?>
               
              <?php while($row=mysqli_fetch_array($result)){
              // echo  $row['Student_name']; 
              	$v = $row['Student_name'];
              //	echo $v;
         // $servername = "localhost";
         // $username ="root";
          //$password="";
          //$dbname = "student_attendence";
         // $c = mysqli_connect($servername, $username,$password, $dbname);
          //$v = "select roll_number from student_attendence "

          $sql = "select count(roll_number) as total from attendence_records where student_name='$v' and attendence_status='Present' ";
          $re = mysqli_query($con,$sql);
          $values = mysqli_fetch_assoc($re);
          $r = $values['total'];
          echo $r;
         
      }

      ?>

      </table>
      </form> 
  </div>
</div>
</div>
          






