<html>
<body>
<form method="POST">
<input type="text" name="cat_id" placeholder="Enter Cat_id for delete">
<input type="submit" value="Delete" name="delete">

</form>
<?php
if(isset($_POST['delete'])){
    $con=mysqli_connect("localhost","root","","mtlbrains");
    $cat_id=$_POST["cat_id"];
    $sql="DELETE from category where Cat_id='$cat_id'";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:index.php");
    }
    else{
        echo die(mysqli_error($con));
    }

}


?>
</body>
</html>