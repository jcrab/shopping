<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Order Summary</h3>
        <?php

            echo "Your subtotal is ...";
            
        ?>
        <form action="tax.php" method="post">
            <input type="submit" value="Confirm">
        </form>
    </body>
</html>
