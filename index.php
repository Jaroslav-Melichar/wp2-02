<?php 
$amount = filter_input(INPUT_POST, 'amount');
$final = 0 ;
define('EUR_CZK', 25);
define('USD_CZK', 22);
//define('RUB_CZK', 0,30);                Prozatím vypnuto (musím změnit definici)
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
    <title>Document</title>
</head>
<body>
<h1>Směnárna</h1>
<br>
<?php
if (isset($sub)) {

    switch ($switch) {
    case 'czk_eur': 
        $final = $amount / EUR_CZK ;
        $curencyfrom = " CZK " ;
        $curencyto = " EUR " ;
        break;
    case 'eur_czk': 
        $final = $amount * EUR_CZK ;
        $curencyfrom = " EUR " ;
        $curencyto = " CZK " ;
        break;
    case 'czk_usd': 
        $final = $amount * USD_CZK ;
        $curencyfrom = " CZK " ;
        $curencyto = " USD " ;
        break;   
    case 'usd_czk': 
        $final = $amount * USD_CZK ;
        $curencyfrom = " USD " ;
        $curencyto = " CZK " ;
        break;          
    case 'czk_rub': 
        $final = $amount * CZK_RUB ;
        $curencyfrom = " CZK " ;
        $curencyto = " RUB " ;
        break;    
    case 'rub_czk': 
        $final = $amount * RUB_CZK ;
        $curencyfrom = " RUB " ;
        $curencyto = " CZK " ;
        break;                               
                  }

        $all =$text . $amount . $curencyfrom . " = " . $final . $curencyto ?>
<?= $all ?>
<?php
} else { ?>
    <form action="index.php" method="post">
Peníze: <input type="number" name="amount" id="amount"> <br>
     <br>
    CZK to EUR: <input type="radio" name="switch" value="czk_eur" id="switch"><br>
    EUR to CZK: <input type="radio" name="switch" value="eur_czk" id="switch"><br>
        <br>
    CZK to USD: <input type="radio" name="switch" value="usd_czk" id="switch"><br>
    USD to CZK: <input type="radio" name="switch" value="usd_czk" id="switch"><br>
        <br>
    CZK to RUB: <input type="radio" name="switch" value="rub_czk" id="switch"><br>
    RUB to CZK: <input type="radio" name="switch" value="rub_czk" id="switch"><br>
        <br>
        <input type="submit" value="odeslat" name="odeslat">
    </form>
<?php
} ?>

</body>
</html>