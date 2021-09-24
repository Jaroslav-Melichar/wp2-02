<?php 
$amount = filter_input(INPUT_POST, 'amount');
$final = 0 ;
define('EUR_CZK', 25);
define('USD_CZK', 21);
define('RUB_CZK', 0.3);
define('GBP_CZK', 29);
define('USD_EUR', 25);
define('RUB_EUR', 0.3);
define('GBP_EUR', 29);
define('RUB_GBP', 25);
define('USD_GBP', 21);
define('USD_RUB', 0.3);


$sub = filter_input(INPUT_POST, 'odeslat');
$switch =  filter_input(INPUT_POST, 'switch');
$curencyfrom;
$curencyto;
$text = "Převod je hotov : " ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chci spát</title>
</head>
<body>
<h1>Směnárna</h1>
<br>

<?php
if (isset($sub)) {
    switch ($switch) {
        case 'czk_eur': 
            $finalamount = $amount / EUR_CZK ;
            $convertfrom = " CZK " ;
            $convertto = " EUR " ;
            break;
       case 'czk_usd': 
            $finalamount = $amount / USD_CZK ;
            $convertfrom = " CZK " ;
            $convertto = " USD " ;
            break;
       case 'czk_gbp': 
            $finalamount = $amount / GBP_CZK ;
            $convertfrom = " CZK " ;
            $convertto = " GBP " ;
            break;
        case 'czk_rub': 
            $finalamount = $amount / RUB_CZK;
            $convertfrom = " RUB " ;
            $convertto = " CZK " ;
            break;
        case 'eur_czk': 
            $finalamount = $amount * EUR_CZK ;
            $convertfrom = " EUR " ;
            $convertto = " CZK " ;
            break;
        case 'eur_usd':
            $finalamount = $amount * USD_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " USD " ;
            break;
        case 'eur_rub': 
            $finalamount = $amount * RUB_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " RUB " ;
            break;
        case 'eur_gbp': 
            $finalamount = $amount * GBP_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " GBP " ;
            break;
        case 'usd_czk': 
            $finalamount = $amount * USD_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
        case 'usd_eur': 
            $finalamount = $amount * USD_EUR ;
            $convertfrom = " USD " ;
            $convertto = " EUR " ;
            break;
       case 'usd_rub': 
            $finalamount = $amount * USD_RUB ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
       case 'usd_gbp': 
            $finalamount = $amount * USD_GBP;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;
       case 'rub_czk': 
            $finalamount = $amount * RUB_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
       case 'rub_eur': 
            $finalamount = $amount * RUB_EUR ;
            $convertfrom = " US " ;
            $convertto = " EUR " ;
            break;
       case 'rub_usd': 
            $finalamount = $amount * USD_RUB ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
      case 'rub_gbp': 
            $finalamount = $amount * GBP_EUR;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;
      case 'gbp_czk': 
            $finalamount = $amount * GBP_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
      case 'gbp_eur': 
            $finalamount = $amount * GBP_EUR ;
            $convertfrom = " US " ;
            $convertto = " EUR " ;
            break;
      case 'gbp_usd': 
            $finalamount = $amount * USD_GBP ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
      case 'gbp_rub': 
            $finalamount = $amount * RUB_GBP;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;   
                         }

?>
<?= $all ?>
<?php
} else { ?>
    <form action="index.php" method="post">
Peníze: <input type="number" name="amount" id="amount">

 <select name="switch" id="switch">
    <option value="">--Vyberte možnost--</option>
    <option value="czk_eur">Z CZK DO EUR</option>
    <option value="czk_usd">Z CZK DO USD</option>
    <option value="czk_gbp">Z CZK DO GBP</option>
    <option value="czk_rub">Z CZK DO RUB</option>
    <option value="eur_czk">Z EUR DO CZK</option>
    <option value="eur_usd">Z EUR DO USD</option>
    <option value="eur_rub">Z EUR DO RUB</option>
    <option value="eur_gbp">Z EUR DO GBP</option>
    <option value="usd_czk">Z USD DO CZK</option>
    <option value="usd_eur">Z USD DO EUR</option>
    <option value="usd_rub">Z USD DO RUB</option>
    <option value="usd_gbp">Z USD DO GBP</option>
    <option value="rub_czk">Z RUB DO CZK</option>
    <option value="rub_eur">Z RUB DO EUR</option>
    <option value="rub_usd">Z RUB DO USD</option>
    <option value="rub_gbp">Z RUB DO GBP</option>
    <option value="gbp_czk">Z GBP DO CZK</option>
    <option value="gbp_eur">Z GBP DO EUR</option>
    <option value="gbp_usd">Z GBP DO USD</option>
    <option value="gbp_rub">Z GBP DO RUB</option>
</select>
<br>
<br>
        <input type="submit" value="submit" name="odeslat">
    </form>
<?php
} ?>

</body>
</html>