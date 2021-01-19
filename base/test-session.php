<?php
session_start();

$_SESSION['prenom'] = 'michel';

print_r($_SESSION);


phpinfo();
