<html>
<head>

<link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
<div class="form-section">
<form  method="post">

<label>
<input type="text" class="input_field" name="question_id" placeholder="Enter Question Id">
</label>
<input type="text" class="input_field" name="cat_id" placeholder="Enter Category Id">
<input type="text" class="input_field" name="q_eng"placeholder="Question English">
<input type="text" class="input_field" name="eng_op_one"placeholder=" English Question One">
<input type="text" class="input_field" name="eng_op_two"placeholder=" English Question Two">
<input type="text" class="input_field" name="eng_op_three"placeholder=" English Question Three">
<input type="text" class="input_field" name="eng_op_four"placeholder=" English Question Four">
<input type="text" class="input_field" name="q_hindi"placeholder="Question Hindi">
<input type="text" class="input_field" name="hindi_op_one"placeholder="Hindi Question One">
<input type="text" class="input_field" name="hindi_op_two"placeholder=" Hindi Question Two">
<input type="text" class="input_field" name="hindi_op_three"placeholder=" Hindi Question Two">
<input type="text" class="input_field" name="hindi_op_four"placeholder=" Hindi Question Three">
<input type="text" class="input_field" name="q_bng"placeholder="Question Bengali">
<input type="text" class="input_field" name="bng_op_one"placeholder="Bengali Question One">
<input type="text" class="input_field" name="bng_op_two"placeholder=" Bengali Question Two">
<input type="text" class="input_field" name="bng_op_three"placeholder="Bengali Question Three">
<input type="text" class="input_field" name="bng_op_four"placeholder="Bengali Question Four">
<input type="text" class="input_field" name="answer"placeholder="Question answer">

<input type="submit"class="btn" value="SUBMIT" name="insert">
</form>
</div>
<?php
if(isset($_POST['insert']))
{
    $con=mysqli_connect("localhost","root","","mtlbrains");
    $q_id=$_POST["question_id"];
    $Cat_id=$_POST["cat_id"];
    $q_eng=$_POST["q_eng"];
    $eng_op_one=$_POST["eng_op_one"];
    $eng_op_two=$_POST["eng_op_two"];
    $eng_op_three=$_POST["eng_op_three"];
    $eng_op_four=$_POST["eng_op_four"];

    $q_hindi=$_POST["q_hindi"];
    $hindi_op_one=$_POST["hindi_op_one"];
    $hindi_op_two=$_POST["hindi_op_two"];
    $hindi_op_three=$_POST["hindi_op_three"];
    $hindi_op_four=$_POST["hindi_op_four"];

    $q_bng=$_POST["q_bng"];
    $bng_op_one=$_POST["bng_op_one"];
    $bng_op_two=$_POST["bng_op_two"];
    $bng_op_three=$_POST["bng_op_three"];
    $bng_op_four=$_POST["bng_op_four"];

    $answer=$_POST["answer"];

  $sql="insert into question_item values ('$q_id','$Cat_id','$q_eng','$eng_op_one','$eng_op_two','$eng_op_three','$eng_op_four','$q_hindi','$hindi_op_one','$hindi_op_two',
  '$hindi_op_three','$hindi_op_four','$q_bng','$bng_op_one','$bng_op_two',
  '$bng_op_three','$bng_op_four','$answer')";
  $result=mysqli_query($con,$sql);
  if($result){
      echo "Data Insert ";
  }
  else{
      echo die(mysqli_error($con));
  }
}
  ?>
  </body>
  </html>