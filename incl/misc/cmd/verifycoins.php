<?php
include dirname(__FILE__)."/../../lib/connection.php";
$query = $db->prepare("UPDATE levels SET starCoins=1 WHERE levelID = :levelID");
$query->execute([':levelID' => $levelID]);
$query = $db->prepare("INSERT INTO modactions (type, value, value3, timestamp, account) VALUES (2, 1, :levelID, :timestamp, :id)");
$query->execute([':timestamp' => $uploadDate, ':id' => $accountID, ':levelID' => $levelID]);
exit("temp_0_Coins are now verified.");
?>