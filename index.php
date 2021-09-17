<?php 
$amount = filter_input(INPUT_POST, 'amount');
$final = 0 ;
define('EUR_CZK',25);
define('CZK_EUR',1);
define('USD_CZK',23);
define('CZK_USD',1);
define('RUB_CZK',0.30);
define('CZK_RUB',1);
define('GBP_CZK',30);
define('CZK_GBP',1);
$sub = filter_input(INPUT_POST, 'odeslat');
$switch =  filter_input(INPUT_POST, 'switch');
$curencyfrom;
$curencyto;
$text = "Převod je hotov : " ;
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Směnárna</h1>
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
        $final = $amount / USD_CZK ;
        $curencyfrom = " CZK " ;
        $curencyto = " USD " ;
            break;
    case 'usd_czk': 
         $final = $amount / USD_CZK ;
         $curencyfrom = " USD " ;
         $curencyto = " CZK " ;
            break;
    case 'czk_rub': 
            $final = $amount / RUB_CZK ;
            $curencyfrom = " CZK " ;
            $curencyto = " RUB " ;
            break;
     case 'rub_czk': 
            $final = $amount / RUB_CZK ;
            $curencyfrom = " RUB " ;
            $curencyto = " CZK " ;
            break;
                    }

        $all =$text . $amount . $curencyfrom . " = " . $final . $curencyto ?>
<?= $all ?>
<?php
} else { ?>
     <label for="amount">Vyberte z čeho chcete převádět : </label>

       <select name="amount" id="amount">
       <option value="none">Měna...</option>
          <option value="CZK">Česká koruna</option>
          <option value="GBP">Libra</option>
          <option value="USD">Dollar</option>
         <option value="RUB">Rubl</option>
        </select> z
        <select name="amount" id="amount">
       <option value="none">Měna...</option>
          <option value="CZK">Česká koruna</option>
          <option value="GBP">Libra</option>
          <option value="USD">Dollar</option>
         <option value="RUB">Rubl</option>
        </select>
        <br>
        <br>
        <form action="index.php" method="post">
Peníze: <input type="number" name="amount" id="amount"> <br>
     <br>
        <br>
        
        <input type="submit" value="odeslat" name="odeslat">
    </form>
<?php
} ?>

</body>
</html>