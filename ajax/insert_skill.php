<?php
require_once "koneksi.php";

if(!isset($_POST) || $_POST['skill'] == null) {
    echo json_encode(array('status' => 'failed', 'message' => 'Gagal membuat data.'));
} else {
    $skill = $_POST['skill'];
    $id = $_POST['id'];
    
    $sql = "INSERT INTO skills VALUES('', '$skill', $id)";

    if($conn->query($sql) == true) {

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
    } else {
        echo json_encode(array('status' => 'failed', 'message' => 'Gagal membuat data.'));
    }
}