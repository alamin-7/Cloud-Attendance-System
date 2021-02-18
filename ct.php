
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


<?php

include("db.php");
//$db = mysqli_connect('localhost', 'root','', 'student_attendence');

   // $flag = 0;



if (isset($_POST['submit'])) {

$i = 0;
foreach ($_POST as $value) {
    $roll = $_POST['Roll'][$i];
    $ct1 = $_POST['CT1'][$i];
    $ct2 =  $_POST['CT2'][$i];
    $ct3 =  $_POST['CT3'][$i];

    mysql_query($con,"INSERT INTO ct (roll_number,CT1, CT2, CT3) VALUES ('$roll', '$ct1', '$ct2', '$ct3')");
    $i++;
  } 
}

   
    
  //   $ROLL = $_POST['Roll'];
  //   $ROLL = mysqli_real_escape_string($db, $_POST['roll']);
 //    $CT1 =  $_POST['CT1'];
 //   $CT2 =  $_POST['CT2'];
 //   $CT3 =  $_POST['CT3'];
     
   //  $roll = $_POST['roll_number[]'];

    // $result =  mysqli_query($con, "insert into ct(roll_number,CT1, CT2, CT3) values('$_POST[Roll]', '$_POST[CT1]', '$_POST[CT2]', '$_POST[CT3]')");
      //mysqli_query($db, $result);

       //$sql = mysqli_query($con,$result);
   
    
?>

<div class="panel panel-default">
 
	<div class= "panel panel-heading">
 
    <div class= "panel panel-body">
    <form action="ct.php" method="Post">
    <table class="table table-striped">
    <tr>
    <th>Roll Number</th><th>CT1</th><th>CT2</th><th>CT3</th>

    </tr>

        <?php $result = mysqli_query($con,"select * from student_attendence");
       // $serialnumber = 0;
       // $counter = 0;  

   
        while($row=mysqli_fetch_array($result))
        {
            // $serialnumber++;
             $v = $row['Roll'];
             echo $v;

             ?>
        <tr>
        	  <td>  <?php echo  $row['Roll']; ?> 
            <input type="hidden" value="<?php echo $row['Roll']; ?>" name = "Roll[]"> </td>
            <td>
             <input type="number" name="CT1">
    		</td>
    		<td>
    		 <input type="number" name="CT2">
    		</td>
    		<td>
    		 <input type="number" name="CT3">
    		</td>
    	   
        </tr>

            <?php  
          //  $counter++;  

        }

        ?> 
    	
     </table> 
     	<div class="form-group">
    		<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
       </div> 
     </form>

     </div>	


    </div>

 </div>
