<?php
$con=mysqli_connect("localhost","root","","mtlbrains");
$sql="select * from question_item";
$result=mysqli_query($con,$sql);
?>
<table border="1" style="font-size:12px; width:200px"class="gridtable">

<tr>
    <td>Question Id</td>
    <td>Category Id</td>
    <td>Question English</td>
    <td>Eng_Op_One</td>
    <td>Eng_Op_Two</td>
    <td>Eng_Op_Three</td>
    <td>Eng_Op_Four</td>
    <td>Question Hindi</td>
     <td>Hindi_Op_One</td>
    <td>Hindi_Op_Two</td>
    <td>Hindi_Op_Three</td>
    <td>Hindi_Op_Four</td>
    <td>Question Bengali</td>
    <td>Bng_Op_One</td>
    <td>Bng_Op_Two</td>
    <td>Bng_Op_Three</td>
    <td>Bng_Op_Four</td>
    <td>Aswer</td>
</tr>
<?php
while($row=mysqli_fetch_array($result)){
    echo "<tr>
    
    <td>$row[Question_id]</td>
    <td>$row[Cat_id]</td>
    <td>$row[Question_english]</td>
    <td>$row[Eng_op_one]</td>
    <td>$row[Eng_op_two]</td>
    <td>$row[Eng_op_three]</td>
    <td>$row[Eng_op_four]</td>
    <td>$row[Question_hindi]</td>
    <td>$row[Hindi_op_one]</td>
    <td>$row[Hindi_op_two]</td>
    <td>$row[Hindi_op_three]</td>
    <td>$row[Hindi_op_four]</td>
    <td>$row[Question_bengali]</td>
    <td>$row[Bng_op_one]</td>
    <td>$row[Bng_op_two]</td>
    <td>$row[Bng_op_three]</td>
    <td>$row[Bng_op_four]</td>
    <td>$row[Answer]</td>
    
    </tr>";

}
?>
</table>