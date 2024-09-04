<?php
$apiKey = "rzp_test_UvBeqk2A4VOkgs";

$amount = isset($_POST['amount']) ? $_POST['amount'] * 100 : 0; // Amount in paisa
$orderId = isset($_POST['orderid']) ? $_POST['orderid'] : uniqid();
$name = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$contact = isset($_POST['mobile']) ? $_POST['mobile'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form action="payscript.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="<?php echo $amount; ?>"
    data-currency="INR"
    data-id="<?php echo $orderId; ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Bharat Post"
    data-description="Training & Development"
    data-image="https://traidev.com/img/web-desgin-development.png"
    data-prefill.name="<?php echo $name; ?>"
    data-prefill.email="<?php echo $email; ?>"
    data-prefill.contact="<?php echo $contact; ?>"
    data-theme.color="#0e90e4">
</script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

</body>
</html>
