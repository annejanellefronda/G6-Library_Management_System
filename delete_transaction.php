<?php include "config.php"; ?>
<?php
$id = $_GET['id'];
$conn->query("DELETE FROM transactions WHERE id=$id");
header("Location: transaction.php");
?>