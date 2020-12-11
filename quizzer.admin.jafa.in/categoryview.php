<?php
$con=mysqli_connect("localhost","root","","mtlbrains");
$sql="select * from category";
$result=mysqli_query($con,$sql);
?>
<table border="1" style="font-size:12px; width:200px"class="gridtable">

<tr>
    <td>Category Id</td>
    <td>Category Name</td>
    <td>Ready Or Not</td>
</tr>
<?php
while($row=mysqli_fetch_array($result)){
    echo "<tr>
    
    <td>$row[Cat_id]</td>
    <td>$row[Cat_name]</td>
    <td>$row[Is_ready]</td>
    
    </tr>";

}
?>
</table>