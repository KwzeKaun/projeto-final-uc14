<?php
// IMPORTANTE: Use os dados anotados do servidor, NAO use localhost!
$conn = new mysqli("sql205.epizy.com", "if0_384725", "minha_senha", "if0_384725_db");
if ($conn->connect_error) {
die("Erro: " . $conn->connect_error);
}
echo "Conectado