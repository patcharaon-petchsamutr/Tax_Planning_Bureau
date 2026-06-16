<!DOCTYPE html>
<html lang="th" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../public/favicon/excise_favicon.png">
    <title><?= isset($page_title) ? $page_title : 'KNOWLEDGE MANAGEMENT - THE EXCISE DEPARTMENT' ?></title>
    
    <!-- นำเข้าฟอนต์ Prompt -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- นำเข้า Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- ตั้งค่า Tailwind (โทนฟ้าสว่าง สะอาดตา) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Prompt', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            DEFAULT: '#005EEA', // สีน้ำเงินสว่างขึ้น ดูสะอาดและล้ำสมัย
                            dark: '#003B95',    // น้ำเงินเข้มสำหรับ Hover หรือหัวข้อ
                            light: '#E6F0FF'    // ฟ้าอ่อนมาก สำหรับพื้นหลัง
                        }
                    }
                }
            }
        }
    </script>

    <!-- นำเข้า Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* Navbar เอฟเฟกต์เบลอขาวเมื่อเลื่อนหน้าจอ */
        .glass-nav-scrolled {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 15px -1px rgba(0, 94, 234, 0.08); /* เงาสีฟ้าอ่อนๆ */
            color: #1f2937 !important;
        }
        .glass-nav-scrolled svg, .glass-nav-scrolled i {
            fill: #005EEA !important;
            color: #005EEA !important;
        }

        /* การจัดการ Slider */
        .slide {
            opacity: 0;
            transition: opacity 1s ease-in-out, transform 1.5s ease-out;
            transform: scale(1.03); 
            position: absolute;
            inset: 0;
            z-index: 0;
        }
        .slide.active {
            opacity: 1;
            transform: scale(1);
            z-index: 10;
        }

        /* overlay ไล่เฉดสีฟ้า-ขาว ทับวิดีโอเพื่อให้ดูโปร่งและสะอาด */
        .media-overlay {
            background: linear-gradient(180deg, rgba(0, 94, 234, 0.45) 0%, rgba(255, 255, 255, 0) 100%);
        }

        /* ขีดเส้นใต้สำหรับเมนู (Hover Effect) */
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #005EEA;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }

        /* เอฟเฟกต์ตัวอักษรเคลื่อนไหว (Fade Up) */
        @keyframes fadeUpText {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up {
            opacity: 0;
            animation: fadeUpText 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.3s; }
        .delay-300 { animation-delay: 0.5s; }
    </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    <!-- Navigation Bar -->
    <header class="fixed w-full top-0 z-50 transition-all duration-300 text-white py-4 px-6 lg:px-12" id="navbar">
        <div class="max-w-[1400px] mx-auto flex items-center justify-between relative">
            
            <!-- Logo (ฝั่งซ้าย) -->
            <div class="flex-1 flex justify-start items-center cursor-pointer group z-20">
                <img src="logo/excise_logo.png" class="max-h-16 object-contain" alt="Excise Logo">
            </div>

            <!-- Desktop Menu (ตรงกลาง) -->
            <nav class="hidden xl:flex flex-none space-x-6 lg:space-x-8 text-[18px] lg:text-[20px] font-medium tracking-wide whitespace-nowrap z-20">
                <a href="#" class="nav-link hover:text-brand transition-colors">หน้าแรก</a>
                <a href="#strategy" class="nav-link hover:text-brand transition-colors">ยุทธศาสตร์</a>
                <a href="#risk" class="nav-link hover:text-brand transition-colors">ความเสี่ยง</a>
                <a href="#budget" class="nav-link hover:text-brand transition-colors">งบประมาณ</a>
                <a href="https://script.google.com/macros/s/AKfycbx57nfJ-BzwGeUudIyEH903WT_OHQT-bG2vbfWg9ngpPCWDtOqvuEmeY7Vbpo87nPnjCA/exec" class="nav-link hover:text-brand transition-colors">Dashboard</a>
                <a href="#about" class="nav-link hover:text-brand transition-colors">เกี่ยวกับเรา</a>
            </nav>

            <!-- ฝั่งขวา (Mobile menu button) -->
            <div class="flex-1 flex items-center justify-end z-20">
                <button id="mobile-menu-btn" class="xl:hidden focus:outline-none hover:text-brand">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 top-[80px] bg-white/95 backdrop-blur-md z-40 hidden flex-col border-t border-gray-100 shadow-xl overflow-y-auto">
        <nav class="flex flex-col p-6 space-y-4 text-lg font-medium text-gray-800">
            <a href="#" class="mobile-nav-link hover:text-brand transition-colors border-b border-gray-100 pb-3">หน้าแรก</a>
            <a href="#strategy" class="mobile-nav-link hover:text-brand transition-colors border-b border-gray-100 pb-3">ยุทธศาสตร์</a>
            <a href="#risk" class="mobile-nav-link hover:text-brand transition-colors border-b border-gray-100 pb-3">ความเสี่ยง</a>
            <a href="#budget" class="mobile-nav-link hover:text-brand transition-colors border-b border-gray-100 pb-3">งบประมาณ</a>
            <a href="https://script.google.com/macros/s/AKfycbx57nfJ-BzwGeUudIyEH903WT_OHQT-bG2vbfWg9ngpPCWDtOqvuEmeY7Vbpo87nPnjCA/exec" class="mobile-nav-link hover:text-brand transition-colors border-b border-gray-100 pb-3">Dashboard</a>
            <a href="#about" class="mobile-nav-link hover:text-brand transition-colors pb-3">เกี่ยวกับเรา</a>
        </nav>
    </div>