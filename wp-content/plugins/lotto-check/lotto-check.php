<?php
/*
Plugin Name: Lottery Checker
Plugin URI: http://example.com/
Description: A plugin to check lottery numbers on your WordPress website
Version: 1.0
Author: Your Name
Author URI: http://example.com/
License: GPL2
*/

// Add your code here


function get_lottery_result() {                         //เพิ่มฟังก์ชัน get_lottery_result() เพื่อดึงข้อมูลการออกรางวัลล็อตเตอรี
    $response = wp_remote_get(LOTTERY_CHECKER_API_URL);

    if (is_wp_error($response)) {
        return false;
    }

    $body = wp_remote_retrieve_body($response);         //จาก API โดยใช้ฟังก์ชัน wp_remote_get() ของ WordPress
    $lottery_result = json_decode($body);               //แปลงข้อมูล JSON ให้เป็นข้อมูล PHP โดยใช้ฟังก์ชัน json_decode():

    return $lottery_result;
}

function check_lottery_number($lottery_number) {
    $lottery_result = get_lottery_result();

    if (!$lottery_result) {
        return 'Unable to retrieve lottery result.';
    }

    foreach ($lottery_result->result as $result) {
        if ($result->number == $lottery_number) {
            return 'Congratulations! Your lottery number ' . $lottery_number . ' has won!';
        }
    }

    return 'Sorry, your lottery number ' . $lottery_number . ' did not win.';
}

// สร้างฟังก์ชันตรวจสอบหมายเลขล็อตเตอรี่
function check_lottery($lottery_number) {
    // ตรวจสอบจาก API หรือแหล่งข้อมูลอื่น ๆ ที่คุณเลือก
    $lottery_result = json_decode(file_get_contents('https://data.go.th/dataset/lottery'));
 
    // ตรวจสอบหมายเลขล็อตเตอรี่
    foreach ($lottery_result->result as $result) {
        if ($result->number == $lottery_number) {
            return true;
        }
    }
 
    // ไม่พบหมายเลขล็อตเตอรี่ที่ระบุ
    return false;
}
?>