<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');
// To update is similar to insert. Except in rest api update request is done throough PUT method
$data = json_decode(file_get_contents("php://input"), true);

$event = $data['event'];
$price = $data['price'];
$qty = $data['qty'];
$customer_name = $data['full-name'];
$customer_contact = $data['contact'];
$customer_email = $data['email'];
$customer_address = $data['address'];

include 'config/constants.php';

$sql = "update tbl_order set event = '$event', price = '$price', qty = '$qty', full-name = '$customer_name', contact = '$customer_contact', email = '$customer_email', address = '$customer_address' where  event= '$event'";
if (mysqli_query($conn, $sql)) {
  echo json_encode(['msg' => 'Data Updated Successfully!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Failed to be Updated!', 'status' => false]);
}
?>

