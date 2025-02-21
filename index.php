<?php
include './env.php';
include './view/viewHeader.php';
include './view/viewFooter.php';

$header = new ViewHeader();
$footer = new ViewFooter();
$player = new ViewPlayer();
$playerController = new PlayerController($header, $footer, $model);

$playerController->render();