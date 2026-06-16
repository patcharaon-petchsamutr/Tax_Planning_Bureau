<!-- Footer Section -->
    <footer id="about" class="relative z-10 bg-[#0A1A3A] text-gray-400 pt-20 pb-10">
        <div class="max-w-[1600px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-16">
                
                <!-- Col 1: Brand & Desc -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <!-- โลโก้สีขาวจากโฟลเดอร์ logo -->
                        <img src="logo/excise_logo.png" class="max-h-16 object-contain" alt="Excise Logo">
                    </div>
                    
                    <p class="text-gray-400 text-sm leading-relaxed mb-6 pr-4">
                        บริษัทคอนซัลต์ระดับโลกสัญชาติไทย ผู้ให้บริการให้คำปรึกษาด้านนวัตกรรมและเทคโนโลยีอย่างครบวงจร เพื่อสนับสนุนองค์กรให้ก้าวขีดจำกัดด้วยเทคโนโลยีแห่งอนาคต
                    </p>
                    <!-- ไอคอน Social Media โปร่งแสง -->
                    <div class="flex items-center space-x-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 text-white flex items-center justify-center hover:bg-brand hover:scale-105 transition-all">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 text-white flex items-center justify-center hover:bg-brand hover:scale-105 transition-all">
                            <i data-lucide="linkedin" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 text-white flex items-center justify-center hover:bg-brand hover:scale-105 transition-all">
                            <i data-lucide="youtube" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Services -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-6">บริการ</h4>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Management Consulting</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Digital Excellence</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Big Data & AI</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cybersecurity</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">ERP Advisory</a></li>
                    </ul>
                </div>

                <!-- Col 3: Company -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-6">บริษัท</h4>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">เกี่ยวกับเรา</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">ข่าวสาร</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">ร่วมงานกับเรา</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">นักลงทุนสัมพันธ์</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">ติดต่อเรา</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-6">ติดต่อ</h4>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start">
                            <i data-lucide="map-pin" class="w-5 h-5 mr-3 text-brand shrink-0"></i>
                            <span>1488 ถนนนครไชยศรี เขตดุสิต กรุงเทพมหานคร 10300</span>
                        </li>
                        <li class="flex items-center">
                            <i data-lucide="phone" class="w-4 h-4 mr-3 text-brand shrink-0"></i>
                            <span>02 241 5600</span>
                        </li>
                        <li class="flex items-center">
                            <i data-lucide="mail" class="w-4 h-4 mr-3 text-brand shrink-0"></i>
                            <span>contact@excise.go.th</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between text-xs text-gray-500">
                <p>&copy; สงวนลิขสิทธิ์ 2569 สำนักแผนภาษี กรมสรรพสามิต</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">นโยบายความเป็นส่วนตัว (Privacy Policy)</a>
                    <a href="#" class="hover:text-white transition-colors">เงื่อนไขการใช้งาน (Terms of Use)</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // 1. Initialize Lucide Icons
        lucide.createIcons();
        
        let isMenuOpen = false; // ตัวแปรเช็คสถานะเมนูมือถือ

        // 2. Navbar Scroll Effect (จัดการสีตัวอักษร)
        const navbar = document.getElementById('navbar');
        const navLinks = navbar ? navbar.querySelectorAll('.nav-link') : [];
        const rightActions = navbar ? navbar.querySelector('.justify-end') : null;
        const logoGroup = navbar ? navbar.querySelector('.group') : null;

        if (navbar) {
            window.addEventListener('scroll', () => {
                // ถ้าเมนูมือถือเปิดอยู่ หรือเลื่อนหน้าจอลงมา ให้แถบเป็นสีขาว/ตัวหนังสือสีเทา
                if (window.scrollY > 50 || isMenuOpen) {
                    navbar.classList.add('glass-nav-scrolled');
                    navbar.classList.remove('text-white', 'py-4');
                    navbar.classList.add('py-3', 'text-gray-800'); 
                } else {
                    navbar.classList.remove('glass-nav-scrolled', 'py-3', 'text-gray-800');
                    navbar.classList.add('text-white', 'py-4');
                }
            });
        }

        // 3. Hero Slider Logic
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.getElementById('prev-slide');
        const nextBtn = document.getElementById('next-slide');
        let currentSlide = 0;
        let slideInterval;

        if (slides.length > 0 && prevBtn && nextBtn) {
            function goToSlide(index) {
                slides[currentSlide].classList.remove('active');
                currentSlide = (index + slides.length) % slides.length;
                slides[currentSlide].classList.add('active');
            }

            function nextSlide() { goToSlide(currentSlide + 1); }
            function prevSlide() { goToSlide(currentSlide - 1); }

            function startSlider() {
                slideInterval = setInterval(nextSlide, 6000);
            }

            function resetInterval() {
                clearInterval(slideInterval);
                startSlider();
            }

            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });

            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });

            startSlider();
        }

        // 4. Mobile Menu Toggle Logic
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        if (mobileMenuBtn && mobileMenu) {
            function toggleMenu() {
                isMenuOpen = !isMenuOpen;
                if (isMenuOpen) {
                    // เปิดเมนู
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.classList.add('flex');
                    mobileMenuBtn.innerHTML = '<i data-lucide="x" class="w-6 h-6"></i>'; // เปลี่ยนเป็นรูป X
                    
                    // บังคับให้ Navbar เป็นสีขาว
                    if (navbar) {
                        navbar.classList.add('glass-nav-scrolled', 'text-gray-800');
                        navbar.classList.remove('text-white');
                    }
                } else {
                    // ปิดเมนู
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('flex');
                    mobileMenuBtn.innerHTML = '<i data-lucide="menu" class="w-6 h-6"></i>'; // เปลี่ยนกลับเป็นเมนู
                    
                    // คืนค่า Navbar กรณีอยู่บนสุด
                    if (navbar && window.scrollY <= 50) {
                        navbar.classList.remove('glass-nav-scrolled', 'text-gray-800');
                        navbar.classList.add('text-white');
                    }
                }
                lucide.createIcons(); // โหลดไอคอนใหม่
            }

            mobileMenuBtn.addEventListener('click', toggleMenu);

            // เมื่อกดลิงก์ใดๆ ในเมนูมือถือ ให้ปิดเมนูอัตโนมัติ
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (isMenuOpen) toggleMenu();
                });
            });
        }
    </script>
</body>
</html>