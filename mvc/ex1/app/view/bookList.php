
<table>
<th>Book List</th>
    <?php 

    foreach($books as $book){


    ?>
        
        <tr>
            <td><a href="app/index.php?book=<?php  echo $book->title ; ?>"><?php echo $book->title ; ?> </a> </td>
           
        </tr>

    <?php

    }

    ?>


</table>