<?php
/**
 **** AppzStory Back Office Management System Template ****
 * Index Get ALL Manager
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
header('Content-Type: application/json');
require_once '../connect.php';

/**
 |--------------------------------------------------------------------------
 | ดึงข้อมูล admin ทั้งหมด
 | 'SELECT * FROM admin'
 |--------------------------------------------------------------------------
*/

$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

/** 
 * กำหนดข้อมูลสำหรับการ Response ไปยังฝั่ง Client
 * 
 * @return array 
 * 
 */

    $response = [
        'status' => true,
        'response' => $result,
        'message' => 'Get Data Manager Success'
    ];
    http_response_code(200);
    echo json_encode($response);
