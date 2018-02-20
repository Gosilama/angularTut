<html>

    <head><title>Test</title></head>
    <body>

    <?php
        $hash = hash("sha512", "10000" | "test_pu_f80ea25088bda2621c81e7ad18caf2e8" | "gp1234");
    ?>
    
    <form method="post" action="https://www.kongapay.com/paymentgateway">
        <input type="text" value="<?php echo $hash?>" name="hash"/>
        <input type="number" value="10000" name="amount"/>
        <input type="email" value="godspower.osilama@konga.com" name="email">
        <input type="text" value="mer_004_gp" name="merchant_id">
        <input type="text" value="gp1234" name="reference">
        <input type="text" value="Godspower" name="firstname">
        <input type="text" value="Osilama" name="lastname">
        <input type="text" value="08090586080" name="phone">
        <input type="text" value="https://konga.com" name="callback">
        <input type="text" value="1" name="customerId">
        <input type="submit" value="submit"></form>
    </body>
</html>
