<?php
 include_once('connect.php');
 if(isset($_POST['Submit']))
 {
     extract($_POST);
     if(!empty($fname) && !empty($fmail) && !empty($Phone))
     {
         $query = "INSERT INTO `table_login` (`fname`, `fmail`, `Phone`) VALUES ('$fname', '$fmail', '$Phone');";
         $qry = mysqli_query($connect , $query) or die(mysqli_error());
         if($qry)
         {
             echo "Data Entered Successfully";
         }
         else
         {
            echo "<center> FAILED </center>";

         }
     }

 
 else
 {
     echo "<center>All Field Required<center>";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <center>
    <form method="POST" action="sample.php">
        <label> Name </label>
        <input type="text" name="fname"><br>
        <label> mail id </label>
        <input type="text" name="fmail"><br>
        <label> Phone number </label>
        <input type="text" name="Phone"><br>
        <input type="submit" name="Submit">
    </form>
    </center>
</body>
</html>

