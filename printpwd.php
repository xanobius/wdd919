<?php

// echo password_hash("asd123", PASSWORD_DEFAULT);

// our password: $2y$10$KjxizYk6qGCKtxedbUOhE.up4cPQJQ0GEE2bAaJZh/La0jiinH1wG

$hash = password_hash("asd123", PASSWORD_DEFAULT);
$pwd = 'asd123';



print "check password " . $hash;

$hash = '$2y$10$l51xh1Su1Nmi/RSzMSP1duD9e3X6fYEq6LGQp4HOgwZp/e1azJqUi';

// echo password_verify($pwd, $hash) ? 'Success' : 'Failed';


if (password_verify($pwd, $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}