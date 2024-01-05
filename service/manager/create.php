<?php
/**
 **** AppzStory Back Office Management System Template ****
 * Create Admin
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
header('Content-Type: application/json');
require_once '../connect.php';
/**
 |--------------------------------------------------------------------------
 | เขียนโค้ด Insert Admin SQL ตัวอย่าง
 | 'INSERT INTO admin (field1, field2, field3) VALUES (:var1, :var2, :var3)'
 |--------------------------------------------------------------------------
 
*/

if ($_SERVER['REQUEST_METHOD'] ==="POST") {
    
<<<<<<< HEAD
$m_id = $_POST['m_id'];
$emp_id  = $_POST['emp_id'];
=======
$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
>>>>>>> ca48ac4b007cba3846b354f6a341670ea37fd656
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
// $image = $_POST['image'];

$stmt = $conn->prepare("INSERT INTO `users`(`firstname`, `lastname`, `email`, `username`, `password`) VALUES (:first_name, :last_name, :email, :username, :password)");
//brndParam ข้อความทั่วไป = PARAM_STR, ตัวเลข = PARAM_INT
$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
$stmt->bindParam(':last_name', $last_name , PDO::PARAM_STR);
$stmt->bindParam(':email', $email , PDO::PARAM_STR);
$stmt->bindParam(':username', $username , PDO::PARAM_STR);
$stmt->bindParam(':password', $password , PDO::PARAM_STR);
$stmt->execute();

$response = [
    'status' => true,
    'message' => 'Create Success'
];
http_response_code(200);
echo json_encode($response);

} else {
http_response_code(405);
echo json_encode(array('ststus' => false, 'message' => 'Method Not Allowed!'));
}

?>