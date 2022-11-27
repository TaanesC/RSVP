<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');
// To delete in rest api, we use DELETE method
$data = json_decode(file_get_contents("php://input"), true);
$title = $data['title'];
include 'config/constants.php';
$sql = "delete from tbl_event where title = '$title'";
if (mysqli_query($conn, $sql)) {
  echo json_encode(['msg' => 'Data Deleted Successfully!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Failed to be Deleted!', 'status' => false]);
}
?>
