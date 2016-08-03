<?php
$paypal_id='abcd@abdc.com'; // Business email ID
date_default_timezone_set('Asia/Hong_Kong');
?>
<h4>Welcome, Guest</h4>

<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="<?php echo $paypal_id?>">
<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name_1" value="dd">
<input type="hidden" name="amount_1" value="1">
<input type="hidden" name="item_name_2" value="DBDB">
<input type="hidden" name="amount_2" value="1.5">
<input type="hidden" name="currency_code" value="HKD">
<input type="hidden" name="lc" value="zh_HK">
<input type="hidden" name="charset" value="utf-8">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="invoice" value="2131231fefe<?php echo date('ymdhis')?>">
<input type="hidden" name="custom" value="2ewfew">

<input type="hidden" name="notify_url" value="http://localhost/PaypalDemo/webFormIPNDemo/ipn.php">
<input type="hidden" name="cancel_return" value="http://localhost/PaypalDemo/webFormIPNDemo/3.php">
    <input type="hidden" name="return" value="http://localhost/PaypalDemo/webFormIPNDemo/2.php">
<!-- Display the payment button. -->
<button type="submit">submit</button>
</form>
