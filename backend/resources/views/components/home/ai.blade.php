@push('styles')
<link rel="stylesheet" href="{{ asset('css/ai.css') }}">
@endpush

<section id="ai-section" class="ai-class-1111">
    <div class="ai-class-2222">
        <header class="ai-class-3333">
            <!-- Logo/Seticon -->
            <div class="ai-class-4444">
                <img src="{{ asset('image/AI/hiso.png') }}" alt="Hisokai Logo" class="ai-class-5555">
            </div>
            <h1 class="ai-class-6666">Thiết bị A.I "siêu việt" giúp doanh nghiệp bùng nổ trong thời đại số</h1>
            <p class="ai-class-7777">Cung cấp hạ tầng thiết bị đạt chuẩn kỹ thuật, bảo mật và tính ổn định cho hệ thống chuyển đổi số, trung tâm điều hành và nền tảng dữ liệu quy mô lớn.</p>
        </header>

        <main class="ai-class-8888">
            <div class="ai-class-9999">
                <img src="{{ asset('image/AI/banner3.png') }}" alt="Hisokai AI Cloud Cluster" class="ai-class-1010">
                <div class="ai-class-1112">
                    <h3 class="ai-class-1212">Hisokai AI Cloud Cluster</h3>
                    <p class="ai-class-1313">Hạ tầng GPU trên nền tảng đám mây cho huấn luyện và mô phỏng A.I quy mô lớn</p>
                </div>
            </div>

            <div class="ai-class-9999">
                <img src="{{ asset('image/AI/banner2.png') }}" alt="Hisokai Data Center Service" class="ai-class-1010">
                <div class="ai-class-1112">
                    <h3 class="ai-class-1212">Hisokai Data Center Service</h3>
                    <p class="ai-class-1313">Trung tâm dữ liệu hiệu năng cao - cho thuê hoặc triển khai riêng cho A.I & HPC</p>
                </div>
            </div>

            <div class="ai-class-9999">
                <img src="{{ asset('image/AI/banner1.png') }}" alt="Hisokai AI Academy" class="ai-class-1010">
                <div class="ai-class-1112">
                    <h3 class="ai-class-1212">Hisokai AI Academy</h3>
                    <p class="ai-class-1313">Đào tạo A.I thực hành và cấp chứng chỉ trên cụm GPU thực tế</p>
                </div>
            </div>

            <div class="ai-class-9999">
                <img src="{{ asset('image/AI/banner4.png') }}" alt="Hisokai Tech Support & Simulation" class="ai-class-1010">
                <div class="ai-class-1112">
                    <h3 class="ai-class-1212">Hisokai Tech Support & Simulation</h3>
                    <p class="ai-class-1313">Giải pháp toàn cầu cho mô phỏng, hỗ trợ kỹ thuật và tối ưu hiệu năng</p>
                </div>
            </div>
        </main>

        <div class="ai-class-1414">
            <button type="button" class="ai-class-1515">
                <img src="{{ asset('image/bussiness/Vector5.png') }}" alt="" class="ai-class-1616">
                Truy cập Hisokai
            </button>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('js/ai.js') }}"></script>
@endpush

<script>
    // Use Intersection Observer for smooth scroll animations
    document.addEventListener('DOMContentLoaded', function() {
        const blocks = document.querySelectorAll('.ai-class-9999');

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
