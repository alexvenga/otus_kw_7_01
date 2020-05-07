<?php

header('X-Token: 123-456-789');

$stdin = fopen('php://stdin','r');

while ($line = fgetc($stdin)) {
    echo $line;
}

echo sprintf("Your name %s\n", $_GET['name']);
echo sprintf("Your city %s\n", $_GET['city']);

echo getenv('QUERY_STRING');

fclose($stdin);
