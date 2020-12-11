<html>
<body>
<form method="POST">
<input type="text" name="question_id" placeholder="Enter Questi  Idfor delete">
<input type="submit" value="Delete" name="delete">

</form>
<?php
if(isset($_POST['delete'])){
    $con=mysqli_connect("localhost","root","","mtlbrains");
    $question_id=$_POST["question_id"];
    $sql="DELETE from question_item where Question_id='$question_id'";
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