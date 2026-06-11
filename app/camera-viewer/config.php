<?php
header('Content-Type: application/javascript');
$api_base = getenv('API_BASE') ?: 'http://localhost:8000';
echo 'const API_BASE = ' . json_encode($api_base) . ';';