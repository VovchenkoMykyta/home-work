<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Wiki</title>
    <link rel="stylesheet" href="/app/styles/main.css">
    <link rel="shortcut icon" href="https://twigel.tech/favicon.png" type="image/png">
    <script src="../../../js/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

<header>
    <img src="/img/logo.svg" alt="logo" height="50">
    <p>Developer Documentation</p>
</header>


<?php
include_once 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $pageView;
?>

<script src="/js/functions.js"></script>
<script src="/js/index.js"></script>

</body>

</html>