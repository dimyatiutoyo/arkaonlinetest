<?php
require_once "koneksi.php";

$result = $conn->query("SELECT u.*, COUNT(s.id) AS jumlah, GROUP_CONCAT(s.name) AS skills FROM users u LEFT JOIN skills s ON u.id = s.user_id GROUP BY u.id");

$data = [];
while($row = $result->fetch_assoc()){
    $data[] = [
        'id' => $row['id'],
        'name' => $row['name'],
        'jumlah' => $row['jumlah'],
        'skill' => $row['skills']
    ];
}
echo json_encode(array('status' => 'success', 'data' => $data));