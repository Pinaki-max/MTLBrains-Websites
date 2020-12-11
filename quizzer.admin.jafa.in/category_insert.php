<html>
    <head>

        <link rel="stylesheet" href="./assets/css/index.css">
    </head>
    
 <body>
     <div class="form-section">
       <form method="post">
           <input type="text" class="input_field"name="cat_id" placeholder="Enter Categorice Id">
           <input type="text" class="input_field"name="cat_name"placeholder="Enter Categorice Name">
          <!---- <input type="radio" value="yes"name="ready">Ready
           <input type="radio" value="no"name="ready" >No Ready--->
           <input type="text" class="input_field"name="ready" placeholder="Ready Or Not">
           <input type="submit" class="btn"value="INSERT" name="insert">
       </form> 
       </div>
       <?php
       if(isset($_POST['insert'])){
           $connection=mysqli_connect("localhost","root","","mtlbrains");
           $cat_id=$_POST["cat_id"];
           $cat_name=$_POST["cat_name"];
            $ready=$_POST["ready"];
           $sql="insert into category values('$cat_id','$cat_name','$ready')";
           $result=mysqli_query($connection,$sql);
           if($result){
               echo "Data Insert";
           }
           else{
               echo die(mysqli_error($connection));
           }
       }
       ?>
    </body>
</html>