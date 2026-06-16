<?php
declare(strict_types=1); // บังคับใช้ชนิดตัวแปรอย่างเข้มงวด (PHP 7+)
    // 1. ตั้งค่า Session ให้ปลอดภัยขั้นสุด
    ini_set('session.use_only_cookies', '1');
    ini_set('session.cookie_httponly', '1');   // ป้องกัน Javascript ขโมย Session (XSS)
    ini_set('session.cookie_secure', '1');     // บังคับส่ง Session ผ่าน HTTPS เท่านั้น
    ini_set('session.cookie_samesite', 'Strict'); // ป้องกัน CSRF
    session_start();

    // 2. HTTP Security Headers
    header("X-Frame-Options: DENY"); // ป้องกัน Clickjacking (เอาเว็บเราไปใส่ใน iframe)
    header("X-XSS-Protection: 1; mode=block"); // เปิด XSS Filter ของเบราว์เซอร์
    header("X-Content-Type-Options: nosniff"); // ป้องกัน MIME-type sniffing
    header("Strict-Transport-Security: max-age=31536000; includeSubDomains"); // บังคับใช้ HTTPS ตลอดเวลา
    // header("Content-Security-Policy: default-src 'self' ..."); // แนะนำให้ตั้งค่า CSP เพิ่มเติม
?>