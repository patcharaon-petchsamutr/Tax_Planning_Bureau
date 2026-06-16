<?php
// เริ่มต้นด้วยการเรียกใช้งานไฟล์ตั้งค่าความปลอดภัย ฐานข้อมูล และฟังก์ชันช่วยเหลือจากภายนอก
require_once __DIR__ . '/../config/security.php';
//require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../includes/helpers.php';

// ดึงข้อมูลข่าวสาร 3 บทความล่าสุดอย่างปลอดภัย (ใช้ Prepared Statement)
/*
try {
    $stmt = $pdo->prepare("SELECT id, title, excerpt, image, category, created_at FROM articles ORDER BY created_at DESC LIMIT 3");
    $stmt->execute();
    $articles = $stmt->fetchAll();
} catch (PDOException $e) {
    // ดักจับ Error เผื่อตารางไม่มี เพื่อไม่ให้เว็บล่ม
    $articles = [];
    error_log("Database Error in index.php: " . $e->getMessage());
}
*/

// กำหนดหัวข้อหน้า
$page_title = "KNOWLEDGE MANAGEMENT - Tax Planning Bureau Planning and Quality Management Development";

// โหลดส่วนหัวเว็บ
require_once __DIR__ . '/../includes/header.php'; 
?>

    <!-- Full-screen Hero Section with Slider -->
    <section class="fixed top-0 left-0 h-screen w-full overflow-hidden bg-brand-light z-0" id="hero-slider">
        
        <!-- Slide 1: Video 1 (Network) -->
        <div class="slide active w-full h-full">
            <img src="video/planner.jpg"class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 media-overlay"></div>
        </div>

        <!-- Content Layer -->
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-4 pointer-events-none">
            <h1 class="font-bold text-white leading-[1.05] mb-6 drop-shadow-[0_4px_10px_rgba(0,59,149,0.5)] pointer-events-auto animate-fade-up delay-100">
                <span class="block text-[2.5rem] sm:text-5xl md:text-7xl lg:text-[88px]">
                    Tax Planning Bureau
                </span>
                <span class="block text-[clamp(12px,3.5vw,42px)] mt-2 lg:mt-4 font-bold text-white/95 whitespace-nowrap tracking-wide">
                    Planning and Quality Management Development
                </span>
            </h1>
                <p class="text-[15px] sm:text-lg lg:text-2xl text-white font-medium drop-shadow-md mb-10 max-w-3xl pointer-events-auto animate-fade-up delay-200">
                    สำนักแผนภาษี ส่วนวางแผนและพัฒนาคุณภาพการบริหารงาน
                </p>
            
            
            <a href="#product_and_service" class="group pointer-events-auto flex items-center justify-between gap-3 border border-white bg-white/20 hover:bg-white text-white hover:text-brand-dark px-6 py-2.5 rounded-lg transition-all duration-300 backdrop-blur-md animate-fade-up delay-300 shadow-lg">
                <span class="text-[15px] font-medium tracking-wide">อ่านเพิ่มเติม</span>
                <i data-lucide="chevron-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>

        <a href="#product_and_service" class="absolute bottom-8 left-1/2 z-30 flex flex-col items-center text-white opacity-90 hover:opacity-100 transition-opacity animate-fade-up delay-300 drop-shadow-md">
            <span class="text-lg font-medium tracking-wider mb-2">Scroll Down</span>
            <i data-lucide="arrow-down" class="w-4 h-4 animate-bounce"></i>
        </a>
    </section>

    <!-- Main Content Wrapper -->
    <main class="relative z-10 bg-white mt-[100vh] shadow-[0_-15px_40px_rgba(0,0,0,0.08)]">
        
        <!-- product_and_service Section -->
        <section id="product_and_service" class="py-24 bg-white relative z-20 overflow-hidden border-b border-gray-100">
            <div class="max-w-[1800px] mx-auto px-6 relative z-10">
                <div class="mb-12 max-w-4xl">
                    <h2 class="text-[34px] md:text-3xl lg:text-[40px] font-bold text-brand-dark leading-[1.4]">
                        สินค้าและบริการ
                    </h2>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-6">
                    
                    <!-- Card 1 -->
                    <!-- ตรวจสอบ Path ของรูปภาพด้วยว่าอยู่ใน public/products/ หรือไม่ -->
                    <a href="#" class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full cursor-pointer shadow-sm hover:shadow-xl transition-shadow">
                        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <source src="products/Fuel.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[40px] leading-snug drop-shadow-md">น้ำมัน</h3>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="#" class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full cursor-pointer shadow-sm hover:shadow-xl transition-shadow">
                        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <source src="products/Alcohol.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[40px] leading-snug drop-shadow-md">สุรา</h3>
                        </div>
                    </a>

                    <!-- Card 3 -->
                    <a href="#" class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full cursor-pointer shadow-sm hover:shadow-xl transition-shadow">
                        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <source src="products/EV.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[40px] leading-snug drop-shadow-md">รถยนต์</h3>
                        </div>
                    </a>

                    <!-- Card 4 -->
                    <a href="#" class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full cursor-pointer shadow-sm hover:shadow-xl transition-shadow">
                        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <source src="products/Softdrink.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[40px] leading-snug drop-shadow-md">เครื่องดื่ม</h3>
                        </div>
                    </a>

                    <!-- Card 5 -->
                    <a href="#" class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full cursor-pointer shadow-sm hover:shadow-xl transition-shadow">
                        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <source src="products/Purfume.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[40px] leading-snug drop-shadow-md">น้ำหอม</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="strategy" class="py-24 bg-brand-light/40">
            <div class="max-w-[1800px] mx-auto px-6 relative z-10">
                <div class="mb-12 max-w-4xl">
                    <h2 class="text-[34px] md:text-3xl lg:text-[40px] font-bold text-brand-dark leading-[1.4]">
                        ยุทธศาสตร์
                    </h2>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                    
                    <!-- Card 1 -->
                    <div class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full shadow-sm hover:shadow-xl transition-shadow">
                        
                        <!-- รูปภาพพื้นหลัง -->
                        <img src="strategy/strategy.jpg" alt="ปัจจัยการวางแผนยุทธศาสตร์ประจำปี" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- เงาสีน้ำเงินตอนที่ยังไม่ได้ Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] leading-snug drop-shadow-md">ปัจจัยการวางแผนยุทธศาสตร์ประจำปี</h3>
                        </div>

                        <!-- พื้นหลังสีน้ำเงินสว่างตอน Hover -->
                        <div class="absolute inset-0 bg-brand/95 p-6 flex flex-col justify-start pt-12 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] mb-3 leading-snug">ปัจจัยการวางแผนยุทธศาสตร์ประจำปี</h3>                            
                            <!-- 2. สร้างรายการลิงก์ไฟล์เอกสาร ดันลงล่างสุดด้วย mt-auto -->
                            <div class="mt-auto flex flex-col gap-2 w-full">
                                <span class="text-white/80 text-[13px] font-medium mb-1">เอกสารสำหรับดาวน์โหลด:</span>
                                
                                <!-- ตัวอย่าง PHP จำลองการลูปข้อมูลจากฐานข้อมูล -->
                                <?php
                                // สมมติว่าดึงข้อมูลไฟล์ที่เกี่ยวข้องกับหัวข้อนี้ออกมาได้ 2 ไฟล์
                                $attached_files = [
                                    ['name' => 'ไฟล์ 1: รายงานแผนยุทธศาสตร์.pdf', 'url' => 'assets/documents/file1.pdf'],
                                    ['name' => 'ไฟล์ 2: สรุปงบประมาณประจำปี.pdf', 'url' => 'assets/documents/file2.pdf']
                                ];
                                
                                foreach($attached_files as $file):
                                ?>
                                <a href="<?= $file['url'] ?>" target="_blank" class="flex items-center text-white text-[14px] bg-white/15 hover:bg-white/30 px-3 py-2 rounded-lg transition-colors duration-200">
                                    <i data-lucide="download" class="w-4 h-4 mr-2 shrink-0"></i>
                                    <span class="truncate"><?= $file['name'] ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full shadow-sm hover:shadow-xl transition-shadow">
                        
                        <!-- รูปภาพพื้นหลัง -->
                        <img src="strategy/strategy_excise.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- เงาสีน้ำเงินตอนที่ยังไม่ได้ Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] leading-snug drop-shadow-md">แผนยุทธศาสตร์กรมสรรพสามิต</h3>
                        </div>

                        <!-- พื้นหลังสีน้ำเงินสว่างตอน Hover -->
                        <div class="absolute inset-0 bg-brand/95 p-6 flex flex-col justify-start pt-12 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] mb-3 leading-snug">แผนยุทธศาสตร์กรมสรรพสามิต</h3>                            
                            <!-- 2. สร้างรายการลิงก์ไฟล์เอกสาร ดันลงล่างสุดด้วย mt-auto -->
                            <div class="mt-auto flex flex-col gap-2 w-full">
                                <span class="text-white/80 text-[13px] font-medium mb-1">เอกสารสำหรับดาวน์โหลด:</span>
                                
                                <!-- ตัวอย่าง PHP จำลองการลูปข้อมูลจากฐานข้อมูล -->
                                <?php
                                // สมมติว่าดึงข้อมูลไฟล์ที่เกี่ยวข้องกับหัวข้อนี้ออกมาได้ 2 ไฟล์
                                $attached_files = [
                                    ['name' => 'ไฟล์ 1: รายงานแผนยุทธศาสตร์.pdf', 'url' => 'assets/documents/file1.pdf'],
                                    ['name' => 'ไฟล์ 2: สรุปงบประมาณประจำปี.pdf', 'url' => 'assets/documents/file2.pdf']
                                ];
                                
                                foreach($attached_files as $file):
                                ?>
                                <a href="<?= $file['url'] ?>" target="_blank" class="flex items-center text-white text-[14px] bg-white/15 hover:bg-white/30 px-3 py-2 rounded-lg transition-colors duration-200">
                                    <i data-lucide="download" class="w-4 h-4 mr-2 shrink-0"></i>
                                    <span class="truncate"><?= $file['name'] ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>


                    <!-- Card 3 -->
                    <div class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full shadow-sm hover:shadow-xl transition-shadow">
                        
                        <!-- รูปภาพพื้นหลัง -->
                        <img src="strategy/direction.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- เงาสีน้ำเงินตอนที่ยังไม่ได้ Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] leading-snug drop-shadow-md">ทิศทางองค์กรสรรพสามิต</h3>
                        </div>

                        <!-- พื้นหลังสีน้ำเงินสว่างตอน Hover -->
                        <div class="absolute inset-0 bg-brand/95 p-6 flex flex-col justify-start pt-12 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] mb-3 leading-snug">ทิศทางองค์กรสรรพสามิต</h3>                            
                            <!-- 2. สร้างรายการลิงก์ไฟล์เอกสาร ดันลงล่างสุดด้วย mt-auto -->
                            <div class="mt-auto flex flex-col gap-2 w-full">
                                <span class="text-white/80 text-[13px] font-medium mb-1">เอกสารสำหรับดาวน์โหลด:</span>
                                
                                <!-- ตัวอย่าง PHP จำลองการลูปข้อมูลจากฐานข้อมูล -->
                                <?php
                                // สมมติว่าดึงข้อมูลไฟล์ที่เกี่ยวข้องกับหัวข้อนี้ออกมาได้ 2 ไฟล์
                                $attached_files = [
                                    ['name' => 'ไฟล์ 1: รายงานแผนยุทธศาสตร์.pdf', 'url' => 'assets/documents/file1.pdf'],
                                    ['name' => 'ไฟล์ 2: สรุปงบประมาณประจำปี.pdf', 'url' => 'assets/documents/file2.pdf']
                                ];
                                
                                foreach($attached_files as $file):
                                ?>
                                <a href="<?= $file['url'] ?>" target="_blank" class="flex items-center text-white text-[14px] bg-white/15 hover:bg-white/30 px-3 py-2 rounded-lg transition-colors duration-200">
                                    <i data-lucide="download" class="w-4 h-4 mr-2 shrink-0"></i>
                                    <span class="truncate"><?= $file['name'] ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full shadow-sm hover:shadow-xl transition-shadow">
                        
                        <!-- รูปภาพพื้นหลัง -->
                        <img src="strategy/action_plan.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- เงาสีน้ำเงินตอนที่ยังไม่ได้ Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] leading-snug drop-shadow-md">แผนปฏิบัติราชการประจำปี</h3>
                        </div>

                        <!-- พื้นหลังสีน้ำเงินสว่างตอน Hover -->
                        <div class="absolute inset-0 bg-brand/95 p-6 flex flex-col justify-start pt-12 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] mb-3 leading-snug">แผนปฏิบัติราชการประจำปี</h3>                            
                            <!-- 2. สร้างรายการลิงก์ไฟล์เอกสาร ดันลงล่างสุดด้วย mt-auto -->
                            <div class="mt-auto flex flex-col gap-2 w-full">
                                <span class="text-white/80 text-[13px] font-medium mb-1">เอกสารสำหรับดาวน์โหลด:</span>
                                
                                <!-- ตัวอย่าง PHP จำลองการลูปข้อมูลจากฐานข้อมูล -->
                                <?php
                                // สมมติว่าดึงข้อมูลไฟล์ที่เกี่ยวข้องกับหัวข้อนี้ออกมาได้ 2 ไฟล์
                                $attached_files = [
                                    ['name' => 'ไฟล์ 1: รายงานแผนยุทธศาสตร์.pdf', 'url' => 'assets/documents/file1.pdf'],
                                    ['name' => 'ไฟล์ 2: สรุปงบประมาณประจำปี.pdf', 'url' => 'assets/documents/file2.pdf']
                                ];
                                
                                foreach($attached_files as $file):
                                ?>
                                <a href="<?= $file['url'] ?>" target="_blank" class="flex items-center text-white text-[14px] bg-white/15 hover:bg-white/30 px-3 py-2 rounded-lg transition-colors duration-200">
                                    <i data-lucide="download" class="w-4 h-4 mr-2 shrink-0"></i>
                                    <span class="truncate"><?= $file['name'] ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- budget Section -->
        <section id="budget" class="py-24 bg-brand-light/40">
            <div class="max-w-[1800px] mx-auto px-6 relative z-10">
                <div class="mb-12 max-w-4xl">
                    <h2 class="text-[34px] md:text-3xl lg:text-[40px] font-bold text-brand-dark leading-[1.4]">
                        งบประมาณ
                    </h2>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                    
                    <!-- Card 1 -->
                    <div class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full shadow-sm hover:shadow-xl transition-shadow">
                        
                        <!-- รูปภาพพื้นหลัง -->
                        <img src="budget/money.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- เงาสีน้ำเงินตอนที่ยังไม่ได้ Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] leading-snug drop-shadow-md">งบประมาณรายจ่ายประจำปี</h3>
                        </div>

                        <!-- พื้นหลังสีน้ำเงินสว่างตอน Hover -->
                        <div class="absolute inset-0 bg-brand/95 p-6 flex flex-col justify-start pt-12 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] mb-3 leading-snug">งบประมาณรายจ่ายประจำปี</h3>                            
                            <!-- 2. สร้างรายการลิงก์ไฟล์เอกสาร ดันลงล่างสุดด้วย mt-auto -->
                            <div class="mt-auto flex flex-col gap-2 w-full">
                                <span class="text-white/80 text-[13px] font-medium mb-1">เอกสารสำหรับดาวน์โหลด:</span>
                                
                                <!-- ตัวอย่าง PHP จำลองการลูปข้อมูลจากฐานข้อมูล -->
                                <?php
                                // สมมติว่าดึงข้อมูลไฟล์ที่เกี่ยวข้องกับหัวข้อนี้ออกมาได้ 2 ไฟล์
                                $attached_files = [
                                    ['name' => 'ไฟล์ 1: รายงานแผนยุทธศาสตร์.pdf', 'url' => 'assets/documents/file1.pdf'],
                                    ['name' => 'ไฟล์ 2: สรุปงบประมาณประจำปี.pdf', 'url' => 'assets/documents/file2.pdf']
                                ];
                                
                                foreach($attached_files as $file):
                                ?>
                                <a href="<?= $file['url'] ?>" target="_blank" class="flex items-center text-white text-[14px] bg-white/15 hover:bg-white/30 px-3 py-2 rounded-lg transition-colors duration-200">
                                    <i data-lucide="download" class="w-4 h-4 mr-2 shrink-0"></i>
                                    <span class="truncate"><?= $file['name'] ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full shadow-sm hover:shadow-xl transition-shadow">
                        
                        <!-- รูปภาพพื้นหลัง -->
                        <img src="budget/QandA.png" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- เงาสีน้ำเงินตอนที่ยังไม่ได้ Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] leading-snug drop-shadow-md">ประเด็นถาม - ตอบ</h3>
                        </div>

                        <!-- พื้นหลังสีน้ำเงินสว่างตอน Hover -->
                        <div class="absolute inset-0 bg-brand/95 p-6 flex flex-col justify-start pt-12 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] mb-3 leading-snug">ประเด็นถาม - ตอบ</h3>                            
                            <!-- 2. สร้างรายการลิงก์ไฟล์เอกสาร ดันลงล่างสุดด้วย mt-auto -->
                            <div class="mt-auto flex flex-col gap-2 w-full">
                                <span class="text-white/80 text-[13px] font-medium mb-1">เอกสารสำหรับดาวน์โหลด:</span>
                                
                                <!-- ตัวอย่าง PHP จำลองการลูปข้อมูลจากฐานข้อมูล -->
                                <?php
                                // สมมติว่าดึงข้อมูลไฟล์ที่เกี่ยวข้องกับหัวข้อนี้ออกมาได้ 2 ไฟล์
                                $attached_files = [
                                    ['name' => 'ไฟล์ 1: รายงานแผนยุทธศาสตร์.pdf', 'url' => 'assets/documents/file1.pdf'],
                                    ['name' => 'ไฟล์ 2: สรุปงบประมาณประจำปี.pdf', 'url' => 'assets/documents/file2.pdf']
                                ];
                                
                                foreach($attached_files as $file):
                                ?>
                                <a href="<?= $file['url'] ?>" target="_blank" class="flex items-center text-white text-[14px] bg-white/15 hover:bg-white/30 px-3 py-2 rounded-lg transition-colors duration-200">
                                    <i data-lucide="download" class="w-4 h-4 mr-2 shrink-0"></i>
                                    <span class="truncate"><?= $file['name'] ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full shadow-sm hover:shadow-xl transition-shadow">
                        
                        <!-- รูปภาพพื้นหลัง -->
                        <img src="budget/MP.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- เงาสีน้ำเงินตอนที่ยังไม่ได้ Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] leading-snug drop-shadow-md">สมาชิกสภาผู้แทนราษฎร (ส.ส.)</h3>
                        </div>

                        <!-- พื้นหลังสีน้ำเงินสว่างตอน Hover -->
                        <div class="absolute inset-0 bg-brand/95 p-6 flex flex-col justify-start pt-12 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] mb-3 leading-snug">สมาชิกสภาผู้แทนราษฎร (ส.ส.)</h3>                            
                            <!-- 2. สร้างรายการลิงก์ไฟล์เอกสาร ดันลงล่างสุดด้วย mt-auto -->
                            <div class="mt-auto flex flex-col gap-2 w-full">
                                <span class="text-white/80 text-[13px] font-medium mb-1">เอกสารสำหรับดาวน์โหลด:</span>
                                
                                <!-- ตัวอย่าง PHP จำลองการลูปข้อมูลจากฐานข้อมูล -->
                                <?php
                                // สมมติว่าดึงข้อมูลไฟล์ที่เกี่ยวข้องกับหัวข้อนี้ออกมาได้ 2 ไฟล์
                                $attached_files = [
                                    ['name' => 'ไฟล์ 1: รายงานแผนยุทธศาสตร์.pdf', 'url' => 'assets/documents/file1.pdf'],
                                    ['name' => 'ไฟล์ 2: สรุปงบประมาณประจำปี.pdf', 'url' => 'assets/documents/file2.pdf']
                                ];
                                
                                foreach($attached_files as $file):
                                ?>
                                <a href="<?= $file['url'] ?>" target="_blank" class="flex items-center text-white text-[14px] bg-white/15 hover:bg-white/30 px-3 py-2 rounded-lg transition-colors duration-200">
                                    <i data-lucide="download" class="w-4 h-4 mr-2 shrink-0"></i>
                                    <span class="truncate"><?= $file['name'] ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="group relative block rounded-2xl overflow-hidden h-[340px] md:h-[380px] w-full shadow-sm hover:shadow-xl transition-shadow">
                        
                        <!-- รูปภาพพื้นหลัง -->
                        <img src="budget/MP.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- เงาสีน้ำเงินตอนที่ยังไม่ได้ Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand/40 to-transparent flex flex-col justify-end p-6 transition-opacity duration-300 group-hover:opacity-0">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] leading-snug drop-shadow-md">สมาชิกวุฒิสภา (ส.ว.)</h3>
                        </div>

                        <!-- พื้นหลังสีน้ำเงินสว่างตอน Hover -->
                        <div class="absolute inset-0 bg-brand/95 p-6 flex flex-col justify-start pt-12 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 backdrop-blur-sm">
                            <h3 class="text-white font-bold text-lg lg:text-[20px] mb-3 leading-snug">สมาชิกวุฒิสภา (ส.ว.)</h3>                            
                            <!-- 2. สร้างรายการลิงก์ไฟล์เอกสาร ดันลงล่างสุดด้วย mt-auto -->
                            <div class="mt-auto flex flex-col gap-2 w-full">
                                <span class="text-white/80 text-[13px] font-medium mb-1">เอกสารสำหรับดาวน์โหลด:</span>
                                
                                <!-- ตัวอย่าง PHP จำลองการลูปข้อมูลจากฐานข้อมูล -->
                                <?php
                                // สมมติว่าดึงข้อมูลไฟล์ที่เกี่ยวข้องกับหัวข้อนี้ออกมาได้ 2 ไฟล์
                                $attached_files = [
                                    ['name' => 'ไฟล์ 1: รายงานแผนยุทธศาสตร์.pdf', 'url' => 'assets/documents/file1.pdf'],
                                    ['name' => 'ไฟล์ 2: สรุปงบประมาณประจำปี.pdf', 'url' => 'assets/documents/file2.pdf']
                                ];
                                
                                foreach($attached_files as $file):
                                ?>
                                <a href="<?= $file['url'] ?>" target="_blank" class="flex items-center text-white text-[14px] bg-white/15 hover:bg-white/30 px-3 py-2 rounded-lg transition-colors duration-200">
                                    <i data-lucide="download" class="w-4 h-4 mr-2 shrink-0"></i>
                                    <span class="truncate"><?= $file['name'] ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -->
    </main>

<?php 
// โหลดส่วนท้ายเว็บ
require_once __DIR__ . '/../includes/footer.php'; 
?>