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
<<<<<<< HEAD
if ($_SERVER['REQUEST_METHOD'] ==="POST") {
    
    $emp_id = $_POST['emp_id'];
    $emp_name  = $_POST['emp_name'];
    $emp_email = $_POST['emp_email'];
    $emp_section = $_POST['emp_section'];
    $emp_position = $_POST['emp_position'];
    // $image = $_POST['image'];
    
    $stmt = $conn->prepare("INSERT INTO `tb_members`(`emp_id`, `emp_name`, `emp_email`, `emp_section`, `emp_position`) VALUES (:emp_id, :emp_name, :emp_email, :emp_section, :emp_position)");
    //brndParam ข้อความทั่วไป = PARAM_STR, ตัวเลข = PARAM_INT
    $stmt->bindParam(':emp_id', $emp_id, PDO::PARAM_STR);
    $stmt->bindParam(':emp_name', $emp_name , PDO::PARAM_STR);
    $stmt->bindParam(':emp_email', $emp_email , PDO::PARAM_STR);
    $stmt->bindParam(':emp_section', $emp_position , PDO::PARAM_STR);
    $stmt->bindParam(':emp_position', $emp_position , PDO::PARAM_STR);
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
    
=======
$response = [
    'status' => true,
    'message' => 'Create Success'
];
http_response_code(201);
echo json_encode($response);
>>>>>>> ca48ac4b007cba3846b354f6a341670ea37fd656

?>