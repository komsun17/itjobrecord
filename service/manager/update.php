<?php
/**
 **** AppzStory Back Office Management System Template ****
 * Update Admin
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
header('Content-Type: application/json');
require_once '../connect.php';
/**
 |--------------------------------------------------------------------------
 | เขียนโค้ด Update Admin SQL ตัวอย่าง
 | 'UPDATE admin SET field1 = :var1, field2= :var2 WHERE admin_id = :id "'
 |--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] ==="PUT") {
    
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$email = $_POST['email'];

$stmt = $conn->prepare("UPDATE `users` SET `firstname`= :first_name, `lastname` = :last_name, `email` = :email WHERE `u_id` = :id");
//brndParam ข้อความทั่วไป = PARAM_STR, ตัวเลข = PARAM_INT
$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
$stmt->bindParam(':last_name', $last_name , PDO::PARAM_STR);
$stmt->bindParam(':email', $email , PDO::PARAM_STR);
$stmt->bindParam(':id', $id , PDO::PARAM_STR);
$stmt->execute();
$response = [
    'status' => true,
    'message' => 'Update Success'
];
http_response_code(200);
echo json_encode($response);

} else {
http_response_code(405);
echo json_encode(array('ststus' => false, 'message' => 'Method Not Allowed!'));
}

?>