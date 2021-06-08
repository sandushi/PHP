<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>
    <h2> Book List </h2>
    <table>
    <tr>
        <th>Book Title</th>
        <th>Category</th>
        <th>Author</th>
    </tr>

    <?php 

    foreach($books as $book){
    ?>
        <tr>
            <td><a href="app/index.php?book=<?php  echo $book['title'] ; ?>"><?php echo $book['title'] ; ?> </a> </td>   
            <td><?php echo $book['category'] ; ?></td>   
            <td><?php echo $book['author'] ; ?> </td>   
            </tr>

        <?php

    }

    ?>


    </table>


    

</body>
</html>