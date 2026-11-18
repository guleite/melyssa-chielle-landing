<?php
// Faz a pasta abrir sem digitar /index.html em hospedagens WordPress
// (o servidor só procura index.php ao abrir uma pasta).
header('Content-Type: text/html; charset=utf-8');
readfile(__DIR__ . '/index.html');
