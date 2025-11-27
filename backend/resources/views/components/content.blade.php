<div id="content-container" class="container content-full-height">
    <p><img src="/image/archive/icon1.png"></p>
    <p class="text_title1">Năng lực công nghệ đã được kiểm chứng qua các dự án quy mô lớn</p>
    <p class="text_title2">Từ kiến trúc hệ thống, bảo mật, dữ liệu đến trí tuệ nhân tạo, mọi giải pháp đều được thiết kế để chịu tải lớn, mở rộng linh hoạt và vận hành liên tục 24/7.</p>
    <div class="cards">
        <div class="card card-1">
            <div class="content content1">
                <p class="text-top">02+</p>
                <p class="text-bot">Năm kinh nghiệm trong ngành<br><span class="text-hidden-mobile">công nghệ, trí tuệ<br>nhân tạo</span></p>
            </div>
            <div class="logo_h logo1"></div>
        </div>
        <div class="card card-2">
            <div class="logo_h logo2"></div>
            <div class="content content2">
                <p class="text-top">05+</p>
                <p class="text-bot">Các ngành đã phục vụ</p>
            </div>
        </div>
        <div class="card card-3">
            <div class="content content3">
                <p class="text-top">30+</p>
                <p class="text-bot">Giải pháp ở nhiều ngành<br>khác nhau</p>
            </div>
            <div class="logo_h logo3"></div>
        </div>
        <div class="card card-4">
            <div class="content content4">
                <p class="text-top">20+</p>
                <p class="text-bot">Dự án thành công</p>
            </div>
            <div class="logo_h logo4"></div>
        </div>
    </div>
</div>

<div class="image-container">
    <div class="image-card card1">
        <img src="/image/list/img1.png" alt="Image 1">
        <div class="text-default">
			<div class="text-title-spacing">HỆ SINH THÁI GIẢI PHÁP SỐ<br>TOÀN DIỆN</div>
            <div class="icon icon-spacing"></div>
        </div>
        <div class="text-hover">
            <div class="text-hover-title-spacing">HỆ SINH THÁI GIẢI PHÁP SỐ TOÀN DIỆN</div>
            <div class="icon icon-spacing"></div>
            <div class="text-hover-content text-hover-content-pc-margin">Cung cấp đầy đủ nền tảng phục vụ chuyển đổi số, bao gồm hạ tầng dữ liệu,
                <br>phần mềm quản trị, trí tuệ nhân tạo và giải pháp an toàn thông tin, đáp ứng
                <br>yêu cầu vận hành quy mô lớn và liên thông hệ thống.
            </div>
        </div>
    </div>
    <div class="image-card card2">
        <img src="/image/list/img2.png" alt="Image 2">
        <div class="text-default">
			<div class="text-title-spacing">TUÂN THỦ CHUẨN MỰC KỸ<br>THUẬT & BẢO MẬT</div>
            <div class="icon icon-spacing"></div>
        </div>
        <div class="text-hover">
            <div class="text-hover-title-spacing">TUÂN THỦ CHUẨN MỰC KỸ THUẬT & BẢO MẬT</div>
            <div class="icon icon-spacing"></div>
            <div class="text-hover-content text-hover-content-pc-margin">Các giải pháp được xây dựng theo tiêu chuẩn quốc tế về kiến trúc hệ<br>
                thống, quản lý dữ liệu và an toàn thông tin, bảo đảm tính ổn định, khả năng<br>
                tích hợp và tuân thủ quy định hiện hành.
            </div>
        </div>
    </div>
    <div class="image-card card3">
        <img src="/image/list/img3.png" alt="Image 3">
        <div class="text-default">
			<div class="text-title-spacing">ĐỘI NGŨ CHUYÊN GIA & KỸ SƯ<br>CÔNG NGHỆ CHUYÊN SÂU</div>
            <div class="icon icon-spacing"></div>
        </div>
        <div class="text-hover">
            <div class="text-hover-title-spacing">ĐỘI NGŨ CHUYÊN GIA & KỸ SƯ CÔNG NGHỆ CHUYÊN SÂU</div>
            <div class="icon icon-spacing"></div>
            <div class="text-hover-content text-hover-content-pc-margin">Sở hữu lực lượng nhân sự có kinh nghiệm triển khai hệ thống quy mô lớn,<br>
                chuyên môn cao trong lĩnh vực dữ liệu, AI, hạ tầng CNTT và bảo mật, đáp<br>
                ứng yêu cầu kỹ thuật đặc thù của từng đơn vị.
            </div>
        </div>
    </div>
    <div class="image-card">
        <img src="/image/list/img4.png" alt="Image 4">
        <div class="text-default">
			<div class="text-title-spacing">CAM KẾT ĐỒNG HÀNH & HỖ<br>TRỢ VẬN HÀNH</div>
            <div class="icon icon-spacing"></div>
        </div>
        <div class="text-hover">
            <div class="text-hover-title-spacing">CAM KẾT ĐỒNG HÀNH & HỖ TRỢ VẬN HÀNH</div>
            <div class="icon icon-spacing"></div>
            <div class="text-hover-content text-hover-content-pc-margin">Thực hiện triển khai theo quy trình tiêu chuẩn, hỗ trợ kỹ thuật liên tục, bảo<br>
                trì định kỳ và bảo đảm hệ thống hoạt động ổn định, an toàn, phù hợp nhu<br>
                cầu thực tế và chiến lược dài hạn của khách hàng.
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endpush

<script>
    if (window.innerWidth <= 768) {
        document.querySelectorAll('.text-default').forEach(el => {
            el.style.display = 'none !important';
            el.style.height = '0';
            el.style.opacity = '0';
        });
        document.querySelectorAll('.text-hover').forEach(el => {
            el.style.display = 'block !important';
            el.style.height = 'auto';
            el.style.opacity = '1';
        });
    }

    document.body.classList.add('mobile-mode');

    // Use Intersection Observer for smooth scroll animations
    document.addEventListener('DOMContentLoaded', function() {
        const blocks = document.querySelectorAll('.card, .image-card');

        // Create observer with optimized settings
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    // Use requestAnimationFrame for smooth animation
                    requestAnimationFrame(function() {
                        entry.target.classList.add('visible');
                    });
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '50px'
        });

        // Observe all blocks
        blocks.forEach(function(block) {
            observer.observe(block);
        });
    });
</script>
