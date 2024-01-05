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
parse_str(file_get_contents("php://input"), $_PUT);

if(isset($_PUT['m_id'])) {
    // ทำสิ่งที่ต้องการกับ $_PUT['key']
    $id = $_PUT['m_id'];
    $emp_id = $_PUT['emp_id'];
    $emp_name  = $_PUT['emp_name'];
    $emp_email = $_PUT['emp_email'];
    $emp_section = $_PUT['emp_section'];
    $emp_position = $_PUT['emp_position'];
}

$stmt = $conn->prepare("UPDATE `tb_members` SET `emp_id`= :emp_id, `emp_name` = :emp_name, `emp_email` = :emp_email, `emp_section` = :emp_section, `emp_position` = :emp_position WHERE `m_id` = :id ");
//brndParam ข้อความทั่วไป = PARAM_STR, ตัวเลข = PARAM_INT
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->bindParam(':emp_id', $emp_id, PDO::PARAM_STR);
$stmt->bindParam(':emp_name', $emp_name , PDO::PARAM_STR);
$stmt->bindParam(':emp_email', $emp_email , PDO::PARAM_STR);
$stmt->bindParam(':emp_section', $emp_section , PDO::PARAM_STR);
$stmt->bindParam(':emp_position', $emp_position , PDO::PARAM_STR);
$stmt->execute();
$response = [
    'status' => true,
    'message' => 'Update Success'
];
http_response_code(200);
echo json_encode($response);

?>