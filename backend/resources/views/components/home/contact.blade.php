@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

<section id="contact-section" class="contact-class-1111">
    <div class="contact-class-2222">
        <div class="contact-card-wrapper">
            <div class="contact-class-3333">
                <div class="contact-class-4444">
                    <h2 class="contact-class-5555">Liên hệ với chúng tôi để bắt đầu chuyển đổi số</h2>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form id="contact-form" class="contact-class-6666" method="POST"
                        action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row g-4">
                            <!-- Left Column -->
                            <div class="col-md-6 contact-class-6666-column">
                                <div class="mb-3 contact-class-6666-input">
                                    <label for="full_name" class="form-label">Họ và tên <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        placeholder="Nhập tên của bạn" value="{{ old('full_name') }}" required>
                                    @error('full_name')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 contact-class-6666-input">
                                    <label for="email" class="form-label">Email công việc <span
                                            class="required">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Nhập email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 contact-class-6666-input">
                                    <label for="region" class="form-label">Khu vực <span
                                            class="required">*</span></label>
                                    <select class="form-select" id="region" name="region" required>
                                        <option value="" disabled {{ old('region') ? '' : 'selected' }}>Chọn khu vực</option>
                                        <option value="north" @selected(old('region') === 'north')>Miền Bắc</option>
                                        <option value="central" @selected(old('region') === 'central')>Miền Trung</option>
                                        <option value="south" @selected(old('region') === 'south')>Miền Nam</option>
                                    </select>
                                    @error('region')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6 contact-class-6666-column">
                                <div class="mb-3 contact-class-6666-input">
                                    <label for="company" class="form-label">Tên công ty</label>
                                    <input type="text" class="form-control" id="company" name="company"
                                        placeholder="Nhập tên công ty" value="{{ old('company') }}">
                                    @error('company')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 contact-class-6666-input">
                                    <label for="phone" class="form-label">Số điện thoại <span
                                            class="required">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Nhập số điện thoại" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Full Width Textarea -->
                            <div class="col-12 contact-class-6666-textarea">
                                <div class="mb-3 specific-requirements">
                                    <label for="request" class="form-label">Yêu cầu cụ thể</label>
                                    <textarea class="form-control" id="request" name="request" rows="4" placeholder="Nhập yêu cầu cụ thể của bạn">{{ old('request') }}</textarea>
                                    @error('request')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="contact-class-7777">
                                Gửi yêu cầu <span class="arrow">→</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .contact-class-3333 {
        transform: scale(0.8);
        opacity: 0;
        transition: transform 0.6s ease-out, opacity 0.6s ease-out;
    }

    .contact-class-3333.zoom-in {
        transform: scale(1);
        opacity: 1;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactSection = document.querySelector('.contact-class-3333');
        if (!contactSection) return;

        // Sử dụng Intersection Observer để detect khi section vào viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Khi section vào viewport, thêm class để trigger animation
                    entry.target.classList.add('zoom-in');
                } else {
                    // Khi section ra khỏi viewport, remove class để có thể trigger lại khi vào lại
                    entry.target.classList.remove('zoom-in');
                }
            });
        }, {
            threshold: 0.1, // Trigger khi 10% của section vào viewport
            rootMargin: '0px'
        });

        observer.observe(contactSection);
    });
</script>
