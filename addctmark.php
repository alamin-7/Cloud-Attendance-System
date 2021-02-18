<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

 <?php

include("db.php");

   

    if(isset($_POST['submit']))
    {
      $result =  mysqli_query($con, "insert into ct(roll_number,CT1, CT2, CT3) values('$_POST[Roll]', '$_POST[ct1]', '$_POST[ct2]', '$_POST[ct3]')");
    }
?>




  <div class="panel-body">
    	<form action="bal_ct.php" method="post">

    		<div class="form-group">
    		<label for="roll"> Roll Number </label>
    		<input type="text" name="Roll" id="Roll" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label for="ct1"> CT1 </label>
    		<input type="number" name="ct1" id="ct1" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label for="ct2"> CT2 </label>
    		<input type="number" name="ct2" id="ct2" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label for="ct3"> CT3</label>
    		<input type="number" name="ct3" id="ct3" class="form-control" required>
    	</div>


    	<div class="form-group">
    		<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
            <a class="btn btn-info pull-right" href="index.php"> Back </a>
          </div>  

</form>
</div>