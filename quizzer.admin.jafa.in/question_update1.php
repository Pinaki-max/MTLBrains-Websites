<?php
$connection=mysqli_connect("localhost","root","","mtlbrains");
$question_id=$_POST["question_id"];
$_SESSION['question_id']=$question_id;
if(isset($_POST['question_id'])){

$sql="select * from question_item where Question_id='$question_id'";
$result = mysqli_query($connection,$sql);
while($row= mysqli_fetch_array($result))
{
    if($result);
    {
        $question_id=$row['Question_id'];
        $cat_id=$row['Cat_id'];
        $q_eng=$row['Question_english'];
        $Eng_op_one=$row['Eng_op_one'];
        $Eng_op_two=$row['Eng_op_two'];
        $Eng_op_three=$row['Eng_op_three'];
        $Eng_op_four=$row['Eng_op_four'];

        $q_hindi=$row['Question_hindi'];
        $Hindi_op_one=$row['Hindi_op_one'];
        $Hindi_op_two=$row['Hindi_op_two'];
        $Hindi_op_three=$row['Hindi_op_three'];
        $Hindi_op_four=$row['Hindi_op_four'];

        $q_bng=$row['Question_bengali'];
        $Bng_op_one=$row['Bng_op_one'];
        $Bng_op_two=$row['Bng_op_two'];
        $Bng_op_three=$row['Bng_op_three'];
        $Bng_op_four=$row['Bng_op_four'];
        $Answer=$row['Answer'];
    }
}
}
?>
<form method="POST">
<input type="text" name="question_id" value="<?php echo $question_id ?>">
<input type="text" name="cat_id" value="<?php echo  $cat_id ?>">
<input type="text" name="q_eng" value="<?php echo $q_eng ?>">
<input type="text" name="Eng_op_one" value="<?php echo $Eng_op_one ?>">
<input type="text" name="Eng_op_two" value="<?php echo  $Eng_op_two ?>">
<input type="text" name="Eng_op_three" value="<?php echo $Eng_op_three?>">
<input type="text" name="Eng_op_four" value="<?php echo $Eng_op_four ?>">


<input type="text" name="q_hindi" value="<?php echo $q_hindi ?>">
<input type="text" name="Hindi_op_one" value="<?php echo $Hindi_op_one ?>">
<input type="text" name="Hindi_op_two" value="<?php echo $Hindi_op_two ?>">
<input type="text" name="Hindi_op_three" value="<?php echo  $Hindi_op_three?>">
<input type="text" name="Hindi_op_four" value="<?php echo $Hindi_op_four ?>">

<input type="text" name="q_bng" value="<?php echo $q_bng ?>">
<input type="text" name="Bng_op_one" value="<?php echo $Bng_op_one ?>">
<input type="text" name="Bng_op_two" value="<?php echo $Bng_op_two ?>">
<input type="text" name="Bng_op_three" value="<?php echo  $Bng_op_three ?>">
<input type="text" name="Bng_op_four" value="<?php echo $Bng_op_four ?>">

<input type="text" name="Answer" value="<?php echo $Answer?>">

<input type="submit" value="Update" name="insert">
</form>
<?php
if(isset($_POST['insert'])){
$con=mysqli_connect("localhost","root","","mtlbrains");

$question_id =$_POST["question_id"];
$cat_id =$_POST["cat_id"];
$q_eng =$_POST["q_eng"];
$Eng_op_one =$_POST["Eng_op_one"];
$Eng_op_two =$_POST["Eng_op_two"];
$Eng_op_three=$_POST["Eng_op_three"];
$Eng_op_four =$_POST["Eng_op_four"];

$q_hindi =$_POST["q_hindi"];
$Hindi_op_one =$_POST["Hindi_op_one"];
$Hindi_op_two =$_POST["Hindi_op_two"];
$Hindi_op_three =$_POST["Hindi_op_three"];
$Hindi_op_four =$_POST["Hindi_op_four"];

$q_bng =$_POST["q_bng"];
$Bng_op_one =$_POST["Bng_op_one"];
$Bng_op_two =$_POST["Bng_op_two"];
$Bng_op_three =$_POST["Bng_op_three"];
$Bng_op_four =$_POST["Bng_op_four"];
$Answer =$_POST["Answer"];

$sql="UPDATE question_item SET Question_id='$question_id',
Cat_id='$cat_id',Question_english='$q_eng',Eng_op_one='$Eng_op_one',
Eng_op_two='$Eng_op_two',Eng_op_three='$Eng_op_three',Eng_op_four='$Eng_op_one',
Question_hindi='$q_hindi',Hindi_op_one='$Hindi_op_one',Hindi_op_two='$Hindi_op_two',
Hindi_op_three='$Hindi_op_three',Hindi_op_four='$Hindi_op_four',
Question_bengali='$q_bng',Bng_op_one='$Bng_op_one',Bng_op_two='$Bng_op_two',
Bng_op_three='$Bng_op_three',Bng_op_four='$Bng_op_four',Answer='$Answer' where Question_id='$question_id'";
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