<?php
    declare(strict_types=1);

    // อ่านค่าจากไฟล์ .env อย่างปลอดภัย
    $envPath = __DIR__ . '/../.env';
    if (!file_exists($envPath)) {
        die("System Error: Configuration missing.");
    }
    $env = parse_ini_file($envPath);

    $host = $env['DB_HOST'];
    $dbname = $env['DB_NAME'];
    $username = $env['DB_USER'];
    $password = $env['DB_PASS'];
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // แจ้งเตือน Error เป็น Exception (ไม่เผลอแสดง Error บนหน้าเว็บ)
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false, // 🌟 สำคัญมาก: ปิด Emulate เพื่อให้ Database ทำ Prepare Statement จริงๆ (ป้องกัน SQL Injection 100%)
        PDO::ATTR_STRINGIFY_FETCHES  => false, // (PHP 8) ให้ดึงข้อมูลมาตามชนิดจริง ไม่ใช่ string ทั้งหมด
    ];

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        // 🌟 ห้าม echo $e->getMessage() เด็ดขาด เพราะจะเผยข้อมูล Server สู่สาธารณะ
        error_log($e->getMessage()); // บันทึกเงียบๆ ลง Log ไฟล์
        die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้ กรุณาลองใหม่ภายหลัง");
    }
?>