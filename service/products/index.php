<?php
/**
 **** AppzStory Back Office Management System Template ****
 * Index Get ALL Products
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
header('Content-Type: application/json');
require_once '../connect.php';

/**
 |--------------------------------------------------------------------------
 | ดึงข้อมูล Members ทั้งหมด
 | 'SELECT * FROM products'
 |--------------------------------------------------------------------------
*/
/** 
 * กำหนดข้อมูลสำหรับการ Response ไปยังฝั่ง Client
 * 
 * @return array 
 */
$stmt = $conn->prepare("SELECT * FROM tb_products INNER JOIN tb_members ON tb_products.m_id = tb_members.m_id");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$response = [
    'status' => true,
    'response' => $result,
    'message' => 'Get Data Members Success'
];
http_response_code(200);
echo json_encode($response);
