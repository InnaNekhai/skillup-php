<?php

include 'init.php';

unset($_SESSION['user']);
header('Location: Login.php');