<?php
$connection=mysqli_connect("localhost","root","","mtlbrains");
$cat_id=$_POST["cat_id"];
$_SESSION['cat_id']=$cat_id;
if(isset($_POST['cat_id'])){

$sql="select * from category where Cat_id='$cat_id'";
$result = mysqli_query($connection,$sql);
while($row= mysqli_fetch_array($result))
{
    if($result);
    {
        $cat_id=$row['Cat_id'];
        $cat_name=$row['Cat_name'];
        $ready=$row['Is_ready'];
    }
}
}
?>
<form method="post">
<input type="text" name="cat_id" value="<?php echo $cat_id ?>">
<input type="text" name="cat_name" value="<?php echo $cat_name ?>">
<input type="text" name="ready" value="<?php echo $ready ?>">
<input type="submit" value="Update" name="insert">
<?php
if(isset($_POST['insert'])){
$con=mysqli_connect("localhost","root","","mtlbrains");
$cat_id=$_POST["cat_id"];
$cat_name=$_POST["cat_name"];
$ready=$_POST["ready"];
$sql="UPDATE category SET  Cat_name='$cat_name', Is_ready='$ready' where Cat_id='$cat_id'";
$result=mysqli_query($con,$sql);
if($result)
{
    header("location:index.php");
}
else{
    echo die(mysqli_error($con));
}
}
?>
</form>