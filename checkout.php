<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Checkout</h3>
        <?php
        echo("Amount to charge: ...f<p>");
        ?>
        <form action="thankyou.php" method="post">
            Name on Card: <input type="text" name="name"><br>
            Card Number: <input type="text" name="cnum"><br>
            Expiration Date[mm/yy]: <input type="text" name="exp"><br>
            Security Code: <input type="text" name="code"><br>
            <input type="submit">
        </form>
    </body>
</html>
