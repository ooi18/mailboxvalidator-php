<?php

declare(strict_types=1);

$GLOBALS['testApiKey'] = 'YOUR_API_KEY';

if (!$loader = @include './vendor/autoload.php') {
    die('Project dependencies missing');
}

$loader->add('MailboxValidator\Test', __DIR__);
