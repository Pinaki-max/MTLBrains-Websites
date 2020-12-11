<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./assets/css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="nav-box">
    <div class="nav-box1">
     
      <img src="./assets/images/MiQuizzerIcon.png" width="150" style="margin-left: 10px;">
     
    </div>
    <centre><h3>Quiz of General Knowledge 2021</h3></centre> 
  
   
      <div class="tollbox">
        <a href="question_itemupdate.php">Dash Board</a><hr>
        <a href="question_iteminsert.php">Categorice</a><hr>
        <a href="question_itemview.php">Blank Mugic</a><hr>
        <a href="question_itemdelete.php">Seting</a><hr>
        <button onclick="openwindow()">Click</button>
      </div>
   
    </div> 
    <script>
      function openwindow(){
        window.open("question_itemview.php")
      }
      </script>
   <!-- <div class="nav-admin">
   </div>-->
</body>
</html>