<!DOCTYPE html>
<html>
<body>

<h1>My Switch Logic PHP page</h1>

<html>
<body>

<form action="logics.php" method="post">
<label>Input your grade : </label>
    Grade: <input type="text" name="grade"><br>
<input type="submit">
</form>

</body>
</html>

<?php
  
   $grade = $_POST['grade'];
   
   switch($grade){
       case "A":
        echo "You are excellent";
        break;
       case "A-": 
        echo "You are very good";
        break;
       case "B+": 
        echo "You are good";
        break;
       case "B": 
        echo "You are some good";
        break;
       case "B-": 
        echo "You are in medium";
        break;
       case "C": 
        echo "You are not good";
        break;
       case "F" : 
        echo "You are fail";
        break;
       default : 
       echo "You entered invalid grade";

   }




    


?>

</body>
</html>