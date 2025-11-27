@push('styles')
<link rel="stylesheet" href="{{ asset('css/feater.css') }}">
@endpush

<section id="feater-section" class="feater-class-1111">
    <div class="feater-class-2222">
        <div class="feater-class-3333">
            <h1 class="feater-class-4444">
                <span class="title-line">Tầm nhìn &</span>
                <span class="title-line">Sứ mệnh</span>
            </h1>

            <blockquote class="feater-class-5555">
                Công nghệ số, dữ liệu và trí tuệ nhân tạo sẽ là trụ cột của quản trị quốc gia trong giai đoạn mới. HISOTEK định vị vai trò phát triển các hệ thống công nghệ bảo đảm an toàn, đồng bộ và khả năng mở rộng, phục vụ cơ quan Nhà nước và hạ tầng dịch vụ công.
            </blockquote>
        </div>

        <div class="feater-class-6666"></div>

        <div class="feater-class-7777">
            <div class="feater-class-9999">
                <div class="feater-class-1010">
                    <div class="feater-class-1112">
                        <img class="brand-logo" src="{{ asset('image/icons/Head-Mounted-Device.png') }}" alt="Hisotek Logo" />
                    </div>
                    <h2 class="feater-class-1212">Tầm nhìn</h2>
                </div>
                <p class="feater-class-1313">
                    Dẫn đầu trong việc phát triển hạ tầng công nghệ và nền tảng số phục vụ chuyển đổi số quy mô quốc gia.
                </p>
            </div>

            <div class="feater-class-8888"></div>

            <div class="feater-class-9999">
                <div class="feater-class-1010">
                    <div class="feater-class-1112">
                        <img class="brand-logo" src="{{ asset('image/icons/Target.png') }}" alt="Hisotek Logo" />
                    </div>
                    <h2 class="feater-class-1212">Sứ mệnh</h2>
                </div>
                <p class="feater-class-1313">
                    Cung cấp giải pháp và thiết bị công nghệ hiệu năng cao, hỗ trợ vận hành thông minh, bảo mật và tối ưu nguồn lực.
                </p>
            </div>

            <div class="feater-class-8888"></div>

            <div class="feater-class-9999">
                <div class="feater-class-1010">
                    <div class="feater-class-1112">
                        <img class="brand-logo" src="{{ asset('image/icons/Join-Inner.png') }}" alt="Hisotek Logo" />
                    </div>
                    <h2 class="feater-class-1212">Giá trị cốt lõi</h2>
                </div>
                <p class="feater-class-1313">
                    Đổi mới (Innovation) - Tin cậy (Trust) - Hiệu quả (Performance) - Hợp tác (Collaboration)
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    // Animation cho feater-class-4444, feater-class-5555 và feater-class-9999 khi section vào viewport
    (function() {
        const featerSection = document.querySelector('#feater-section');
        const featerTitle = document.querySelector('.feater-class-4444');
        const featerBlockquote = document.querySelector('.feater-class-5555');
        const featerCards = document.querySelectorAll('.feater-class-9999');
        const cardTimeouts = [];
        
        if (!featerSection) return;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.target !== featerSection) {
                    return;
                }

                if (entry.isIntersecting) {
                    if (featerTitle) {
                        featerTitle.classList.add('animate-in');
                    }
                    if (featerBlockquote) {
                        featerBlockquote.classList.add('animate-in');
                    }
                    // Thêm animation cho từng card với delay
                    featerCards.forEach(function(card, index) {
                        cardTimeouts[index] = setTimeout(function() {
                            card.classList.add('animate-in');
                        }, index * 200); // Delay 200ms cho mỗi card
                    });
                } else {
                    if (featerTitle) {
                        featerTitle.classList.remove('animate-in');
                    }
                    if (featerBlockquote) {
                        featerBlockquote.classList.remove('animate-in');
                    }
                    cardTimeouts.forEach(function(timeoutId) {
                        clearTimeout(timeoutId);
                    });
                    cardTimeouts.length = 0;
                    featerCards.forEach(function(card) {
                        card.classList.remove('animate-in');
                    });
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px'
        });

        observer.observe(featerSection);
    })();

</script>
