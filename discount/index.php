<html>
<head></head>
<body>
    <h1>
<?php

$name = $_GET['product'];
$quantity = $_GET['quantity'];
$price = $_GET['price'];
$discount = $_GET['discount'];
$sum = $quantity * ($price * (1 - $discount/100));


if ($_GET['product'] != '') {
}
if ($quantity != '') {
}
if ($price != '') {
}
if ($discount != '') {
echo "$name $quantity $price $sum";
exit;
}

if ($discount == null) {
echo "Бесплатный сыр только в мышеловке";"1";
exit;
}

?>    
    </h1>
</body>
</html>
