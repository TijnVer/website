<?php

session_start();

if (!isset($_SESSION['visited'])) {

    $_SESSION['visited'] = true;

    $file = 'counter.txt';

    if (file_exists($file)) {

        $count = file_get_contents($file);

        $count++;

        file_put_contents($file, $count);

    } else {

        file_put_contents($file, 1);

    }

}

?>

<!DOCTYPE HTML>