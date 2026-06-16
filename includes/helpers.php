<?php
declare(strict_types=1);

/**
 * ฟังก์ชันหลีกหนีอักขระพิเศษ ป้องกัน Cross-Site Scripting (XSS)
 * ใช้แทนการเรียก htmlspecialchars() ยาวๆ
 */
function esc(?string $string): string {
    if ($string === null) {
        return '';
    }
    // ENT_QUOTES | ENT_HTML5 จะแปลงทั้ง single/double quote ให้ปลอดภัย
    return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
?>