<?php
    require_once("DatabaseConnection.php");
    $db = new DatabaseConnection('127.0.0.1', null, 'ysolovykh', 'securepass', 'ucode_web');
    if ($db->getConnectionStatus())
        $result = $db->connection->query("SELECT * FROM heroes;");
    if (isset($result)) {
        printf("Select вернул %d строк.\n", $result->num_rows);
    }
?>