
<?php

include("db.php");
//$db = mysqli_connect('localhost', 'root','', 'student_attendence');


    $flag = 0;

    if(isset($_POST['submit']))
    {
     $CT1 =  $_POST['ct1'];
     $CT2 =  $_POST['ct2'];
     $CT3 =  $_POST['ct3'];

      $result =  mysqli_query($con, "insert into ct ( CT1, CT2, CT3) values('$CT1', '$CT2' , '$CT3')");
       mysqli_query($db, $result);

       //$sql = mysqli_query($con,$result);

        if($result)
        {
            $flag = 1;
        }
    }
?>