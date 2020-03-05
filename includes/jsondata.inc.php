<?PHP
require('dbconnect.inc.php');
header('Content-Type: application/json');



$stmt = $conn->prepare("SELECT * FROM `test`");
$stmt->execute();
$result = $stmt->fetchAll();
echo json_encode($result);