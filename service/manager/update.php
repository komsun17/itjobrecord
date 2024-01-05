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
<<<<<<< HEAD
//if ($_SERVER['REQUEST_METHOD'] ==="PUT") {
//if(isset($_POST['submit'])) {
    // $id = $_POST['id'];
    // $first_name = $_POST['first_name'];
    // $last_name  = $_POST['last_name'];
    // $email = $_POST['email'];
//}   
parse_str(file_get_contents("php://input"), $_PUT);

if(isset($_PUT['id'])) {
    // ทำสิ่งที่ต้องการกับ $_PUT['key']
    $id = $_PUT['id'];
    $first_name = $_PUT['first_name'];
    $last_name  = $_PUT['last_name'];
    $email = $_PUT['email'];
}

$stmt = $conn->prepare("UPDATE `users` SET `firstname`= :first_name, `lastname` = :last_name, `email` = :email WHERE `u_id` = :id ");
//brndParam ข้อความทั่วไป = PARAM_STR, ตัวเลข = PARAM_INT
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
$stmt->bindParam(':last_name', $last_name , PDO::PARAM_STR);
$stmt->bindParam(':email', $email , PDO::PARAM_STR);
=======
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
>>>>>>> ca48ac4b007cba3846b354f6a341670ea37fd656
$stmt->execute();
$response = [
    'status' => true,
    'message' => 'Update Success'
];
http_response_code(200);
echo json_encode($response);

<<<<<<< HEAD
// } else {
// http_response_code(405);
// echo json_encode(array('ststus' => false, 'message' => 'Method Not Allowed!'));
// }
=======
} else {
http_response_code(405);
echo json_encode(array('ststus' => false, 'message' => 'Method Not Allowed!'));
}
>>>>>>> ca48ac4b007cba3846b354f6a341670ea37fd656

?>