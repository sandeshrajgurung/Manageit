<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../config/database.php';
include_once '../class/User.php';

$database = new Database();
$db = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include '../config/postHeader.php';

    $user = new User($db);
    $data = json_decode(json_encode($_POST));

    $user->firstName = $data->firstName;
    $user->lastName = $data->lastName;
    $user->gender = $data->gender;
    $user->contactNumber = $data->contactNumber;
    $user->currentAddress = $data->currentAddress;
    $user->permanentAddress = $data->permanentAddress;
    $user->email = $data->email;
    $user->dateOfBirth = $data->dateOfBirth;
    $user->status = $data->status;
    $user->memberSince = $data->memberSince;
    $user->createdAt = date('Y-m-d H:i:s');
    $user->updatedAt = date('Y-m-d H:i:s');

    if ($user->createUser()) {
        header('Location: ../employee.php');
    } else {
        echo 'Employee could not be created.';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include '../config/getHeader.php';

    $user = new User($db);
    $stmt = $user->getUsers();
    $itemCount = $stmt->rowCount();

    if ($itemCount > 0) {

        $userArray = array();
        $userArray["users"] = array();
        $userArray["totalUsers"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $e = array(
                "id" => $id,
                "firstName" => $first_name,
                "lastName" => $last_name,
                "gender" => $gender,
                "contactNumber" => $contact_number,
                "currentAddress" => $current_address,
                "permanentAddress" => $permanent_address,
                "email" => $email,
                "dateOfBirth" => $date_of_birth,
                "status" => $status,
                "memberSince" => $member_since,
                "createdAt" => $created_at,
                "updatedAt" => $updated_at,

            );
            array_push($userArray["users"], $e);
        }
        echo json_encode($userArray);
    } else {
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    include '../config/deleteHeader.php';

    $user = new User($db);
    $data = json_decode(file_get_contents("php://input"));

    $user->id = $data->id;

    if ($user->deleteUser()) {
        echo json_encode("User deleted.");
    } else {
        echo json_encode("Data could not be deleted");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    include '../config/postHeader.php';

    $user = new User($db);
    $data = json_decode(file_get_contents("php://input"));

    $user->id = $data->id;
    $user->firstName = $data->firstName;
    $user->lastName = $data->lastName;
    $user->gender = $data->gender;
    $user->contactNumber = $data->contactNumber;
    $user->currentAddress = $data->currentAddress;
    $user->permanentAddress = $data->permanentAddress;
    $user->email = $data->email;
    $user->dateOfBirth = $data->dateOfBirth;
    $user->status = $data->status;
    $user->memberSince = $data->memberSince;
    $user->updatedAt = date('Y-m-d H:i:s');

    if ($user->updateUser()) {
        echo 'User updated successfully.';
    } else {
        echo 'User could not be updated.';
    }
}