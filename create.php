<?php

$koneksi = mysqli_connect("localhost", 'root', '', 'maintenance', 3360);

if (!$koneksi) {
    die("koneksi gagal!" . mysqli_connect_error());
}


$data = json_decode(file_get_contents('php://input'), true);

$email = $data['email'] ?? null;
$token = $_SERVER['HTTP_CSRF_TOKEN'];
$result = [
    'success' => false,
    'message' => 'gagal!',
];

if (empty($token)) {
    http_response_code(419);
    header('content-type', 'application/json');
    echo json_encode($result);
    return;
}

if ($email === null || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    header('content-type', 'application/json');
    echo json_encode($result);
    return;
}
$sql = "INSERT INTO submits (email) VALUES('$email')";
if (!mysqli_query($koneksi, $sql)) {
    http_response_code(400);
    header('content-type', 'application/json');
    echo json_encode($result);
    return;
}


$result = [
    "success" => true,
    'message' => "berhasil!"
];

http_response_code(200);
header('content-type', 'application/json');
echo json_encode($result);
