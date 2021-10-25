<?php

$artisan = __DIR__ . '/artisan';
$comandos = [
    'key:generate',
    'storage:link',
    'migrate --seed'
];

foreach ($comandos as $comando)
    shell_exec("php $artisan $comando");

echo "Setup finalizado!";