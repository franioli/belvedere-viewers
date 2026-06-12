<?php
header('Content-Type: application/javascript');
header('Cache-Control: no-store');
$api_base = getenv('API_BASE') ?: 'http://localhost:8000';
echo 'const API_BASE = ' . json_encode($api_base) . ';';