<?php
require('config.php');

$sql = "SELECT¨* FROM notificacao WHERE status = 0";
$query = mysqli_query($conexao, $sql);
$notify = mysql_num_rows();_
?>