<?php
// IMPORTANTE: Use os dados anotados do servidor, NAO use localhost!
$conn = new mysqli("sql205.epizy.com", "if0_41367730", "RapazmeuSite1", "if0_41367730_datakauan");
if ($conn->connect_error) {
die("Erro: " . $conn->connect_error);
}
echo "Conectado com sucesso ao banco remoto!";
?>