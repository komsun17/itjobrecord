<?php
/**
 **** AppzStory Back Office Management System Template ****
 * Delete Api
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
header('Content-Type: application/json');
require_once '../connect.php';
/**
 |--------------------------------------------------------------------------
 | เขียนโค้ด Delete Reccord SQL ตัวอย่าง
 | 'DELETE FROM table WHERE table_id = :id'
 |--------------------------------------------------------------------------
*/
parse_str(file_get_contents("php://input"), $_DELETE);

if(isset($_DELETE['id'])) {
    // ทำสิ่งที่ต้องการกับ $_DELETE['key']
    
    $delete_id = $_DELETE['id'];
    $deletestmt = $conn->query("DELETE FROM tb_members WHERE m_id = $delete_id");
    $deletestmt->execute();

    $response = [
        'status' => true,
        'message' => 'Delete Success'
    ];
    http_response_code(204);
    echo json_encode($response);
    
} else {
    // Key ไม่ได้ถูกตั้งค่า จัดการตามสถานการณ์ที่เกิดขึ้น
}


?>