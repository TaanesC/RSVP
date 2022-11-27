<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include 'config/constants.php';
$sql = "select * from tbl_event";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  //mysqli_fetch_all gives us the data in 2D array format.
  // It's second parameter decide whether its assoc array or indexed. Or maybe both
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  echo json_encode($data);
} else {
  echo json_encode(['msg' => 'No Data!', 'status' => false]);
}
?>
