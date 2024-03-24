<?php

require 'database.php';

$tweets = $database->prepare("SELECT * FROM tweet INNER JOIN user ON tweet.user_id = user.id");

$tweets->execute();

$tweet = $tweets->fetchAll(PDO::FETCH_ASSOC);

print_r($tweet);