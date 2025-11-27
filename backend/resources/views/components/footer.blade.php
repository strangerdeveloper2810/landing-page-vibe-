<style>
	
.container-footer {
    text-align: left
}
.site-footer {
    background: #fff;
    padding: 0;
    /* border-top: 1px solid rgba(0, 87, 242, 0.3); */
    /* mở rộng nền trắng phủ toàn màn hình để loại bỏ viền đen hai bên */
    box-shadow: 0 0 0 100vmax #fff;
    clip-path: inset(0 -100vmax);
}

.site-footer .container {
    background: #fff;
    padding: 60px var(--page-padding, 79px) 0;
    max-width: 1440px;
    margin: 0 auto;
}

.footer-top {
    /* border-bottom: 1px solid rgba(0, 0, 0, 0.1); */
    padding-bottom: 40px;
    margin-bottom: 30px;
}

.footer-logo-section {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 24px;
}

.footer-logo {
    display: flex;
    align-items: center;
    gap: 8px;
}

.footer-logo .logo-h {
    font-size: 32px;
    font-weight: 700;
    background: linear-gradient(90deg, #0057F2 0%, #FF6B35 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.footer-logo .logo-text {
    font-size: 18px;
    font-weight: 600;
    color: #000;
}

.footer-divider {
    width: 1px;
    height: 40px;
    background: rgba(0, 0, 0, 0.2);
}

.footer-slogan {
    font-family: Be Vietnam Pro;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    vertical-align: middle;
    color: #52525B;
}

.footer-content {
    display: grid;
    grid-template-columns: 65% 35%;
    gap: 40px;
    margin-bottom: 30px;
}

.footer-left-section {
    display: flex;
    flex-direction: column;
}

.footer-left-columns {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 80px;
    margin-bottom: 24px;
    padding-top: 24px;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.footer-column h3 {
    font-family: Be Vietnam Pro;
    font-weight: 600;
    font-style: normal;
    font-size: 18px;
    line-height: 28px;
    letter-spacing: 0.15px;
    vertical-align: middle;
    color: #000;
    margin-bottom: 20px;
}

.footer-column h4 {
    font-family: 'Be Vietnam Pro', sans-serif;
    font-weight: 700;
    font-size: 16px;
    color: #000;
    margin-bottom: 15px;
}

.footer-column ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-column ul li {
    margin-bottom: 12px;
}

.footer-column ul li a {
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    color: #52525B;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-column ul li a:hover {
    color: #000;
}

.contact-info {
    color: #52525B;
    font-size: 14px;
    line-height: 1.8;
    font-weight: 400;
}

.contact-info p {
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    color: #52525B;
    margin-bottom: 8px;
}

.contact-label {
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    color: #52525B;
}

.footer-right {
    background: transparent;
    padding: 0;
    overflow: hidden;
}

/* Bảng thông tin liên hệ: căn thẳng hàng 2 cột */
.contact-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 8px; /* khoảng cách giữa các hàng */
}

.contact-table th {
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    color: #52525B;
    text-align: left;
    white-space: nowrap;
    padding-right: 16px;
    vertical-align: top;
}

.contact-table td {
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    color: #000;
}

.contact-table td a {
    color: inherit;
    text-decoration: none;
}

.email-subscription {
	margin-left: 19px;
    margin-bottom: 25px;
    background: var(--Condition-Background, #F7F8FA);
    border: 1px solid rgba(0, 0, 0, 0.06);
    box-shadow: 0 8px 24px rgba(16, 24, 40, 0.06);
    border-radius: 16px;
    padding: 0 16px 20px 16px; /* thêm padding ngang để nội dung không lòi ra ngoài */
    position: relative;
    overflow: hidden;
}

/* line-infinity làm background của email-subscription */
.email-subscription::before {
    content: "";
    position: absolute;
    width: 290.796299585087px;
    height: 390.46854231068875px;
    right: 90px;
    top: 213px;
    transform: rotate(42.75deg) !important;
    transform-origin: center center;
    opacity: 1;
    background-image: url('{{ asset('image/footer/line-infinity.png') }}');
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    pointer-events: none;
    z-index: 0;
    backdrop-filter: blur(4px);
}

/* Floating label cho input email - scope chỉ trong email-subscription để tránh conflict */
.email-subscription .form-field {
    position: relative;
    margin-top: 16px; /* yêu cầu: top 16px */
}

.email-subscription .form-label {
    position: absolute;
    top: 12px; /* margin-top yêu cầu 12px */
    left: 12px; /* margin-left yêu cầu 12px */
    right: 12px; /* margin-right yêu cầu 12px */
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal; /* Medium theo hệ thống tương đương 500 */
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.15px;
    vertical-align: middle;
    color: #111827;
    pointer-events: none;
}

.email-input-group {
    display: flex;
    flex-direction: column;
    gap: 8px; /* margin-bottom giữa các phần tử 8px */
    margin-bottom: 25px;
    padding: 0 0px; /* yêu cầu: left/right 16px */
}

.email-input {
    width: 100%;
    padding: 40px 12px 12px 12px; /* chừa chỗ cho label phía trên (40px) và lề trái/phải 12px */
    border: 1px solid rgba(16, 24, 40, 0.12);
    border-radius: 12px;
    background: #fff;
    color: #0f172a;
    font-size: 14px;
    box-shadow: inset 0 1px 2px rgba(16, 24, 40, 0.04);
}

.email-input::placeholder {
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal; /* Medium tương đương 500 */
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    vertical-align: middle;
    color: rgba(0, 0, 0, 0.5);
}

.email-btn {
    width: 100%;
    padding: 14px 28px;
    background: linear-gradient(268.03deg, #0057F2 0%, #1E88E5 100%);
    color: #fff;
    border: none;
    border-radius: 999px;
    margin-top: 17px;
    font-weight: 700;
    letter-spacing: 0.2px;
    font-size: 15px;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s, opacity 0.2s;
    box-shadow: 0 10px 24px rgba(0, 87, 242, 0.35), inset 0 1px 0 rgba(255,255,255,0.25);
}

.email-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 14px 28px rgba(0, 87, 242, 0.45), inset 0 1px 0 rgba(255,255,255,0.25);
    background: linear-gradient(268.03deg, #0050de 0%, #187dd7 100%);
    opacity: 0.98;
}

.social-section h4 {
    font-family: 'Be Vietnam Pro', sans-serif;
    font-weight: 500;
    font-style: normal; /* Medium tương đương 500 */
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    vertical-align: middle;
    color: #52525B;
    margin-bottom: 0;
}

.social-wrapper {
    background: #ffffff;
    padding: 12px;
    width: 100%;
    margin: 127px 0 0px 0; /* dùng padding của card, tránh tràn ra ngoài */
    border-radius: 12px;
    border: 1px solid rgba(16, 24, 40, 0.06);
    box-shadow: 0 6px 18px rgba(16, 24, 40, 0.08);
    display: block;
    position: relative;
    z-index: 1;
}

.social-section {
    background: transparent;
    border: 0;
    box-shadow: none;
    border-radius: 0;
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 12px;
}

.social-icons {
    display: flex;
    gap: 0;
    margin-left: auto; /* đẩy nhóm icon về mép phải của thẻ */
}

.social-icons a + a {
    margin-left: 8px; /* khoảng cách giữa Facebook và Zalo */
}

.social-icon {
    width: 32px;
    height: 32px;
    border-radius: 4px;
    background: #fff;
    border: 1px solid rgba(16, 24, 40, 0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0f172a;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 6px 14px rgba(16, 24, 40, 0.08);
}

.social-icon img {
    width: 32px;
    height: 32px;
    border-radius: 4px;
    display: block;
}

.social-icon:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(16, 24, 40, 0.12);
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 0;
    background: transparent;
    margin: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.copyright {
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal; /* Medium tương đương 500 */
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    vertical-align: middle;
    color: #52525B;
}

.partnership-link {
    font-family: Be Vietnam Pro;
    font-weight: 500;
    font-style: normal; /* Medium tương đương 500 */
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    vertical-align: middle;
    color: #000;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
}

.partnership-link strong {
    font-family: Be Vietnam Pro;
    font-weight: 600;
    font-style: normal; /* SemiBold tương đương 600 */
    font-size: 16px;
    line-height: 24px;
    letter-spacing: 0.15px;
    vertical-align: middle;
    color: #000;
}

.partnership-link:hover {
    color: #000;
    opacity: 0.8;
}

.partnership-link img {
    width: 24px;
    height: 24px;
    opacity: 1;
    display: inline-block;
    vertical-align: middle;
}

.site-footer {
	border-top: none;
	background: #fff;
}

@media (max-width: 1280px) {
    .site-footer .container {
        padding-left: 48px;
        padding-right: 48px;
    }
}

@media (max-width: 992px) {
    .footer-content {
        grid-template-columns: 1fr;
    }
    
    .footer-left-columns {
        grid-template-columns: 1fr;
    }
    
    .footer-right {
        margin-top: 30px;
    }
}

@media (max-width: 768px) {
    .site-footer .container {
        padding-left: 24px;
        padding-right: 24px;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
    }
    
    .footer-left-columns {
        grid-template-columns: 1fr;
    }
    
    .footer-logo-section {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .footer-divider {
        display: none;
    }
    
    .footer-bottom {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }

    .footer-logo {
        gap: 7.8px;
    }

    .footer-logo .brand-logo {
        width: 88.2px;
        height: 24px;
        object-fit: contain;
    }
}
</style>

<footer class="site-footer">
    <div class="container container-footer">
        <div class="footer-top">
            <!-- Nội dung chính -->
            <div class="footer-content">
                <!-- Phần 1: Logo + Slogan + Trang chính + Thông tin liên hệ + Footer Bottom (65%) -->
                <div class="footer-left-section">
                    <!-- Logo và Slogan -->
                    <div class="footer-logo-section">
                        <div class="footer-logo">
                            <img class="brand-logo" src="{{ asset('image/logo/Logo-blue.png') }}" alt="Hisotek Logo" />
                        </div>
                        <div class="footer-divider"></div>
                        <div class="footer-slogan">
                            Công nghệ an toàn – Dữ liệu thống nhất – Vận hành thông minh.
                        </div>
                    </div>

                    <div class="footer-left-columns">
                        <!-- Cột Trang chính -->
                        <div class="footer-column">
                            <h3>Trang chính</h3>
                            <ul>
                                <li><a href="#">Sản phẩm & Giải pháp</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="#">Về chúng tôi</a></li>
                                <li><a href="#">Liên hệ với chúng tôi</a></li>
                            </ul>
                        </div>

                        <!-- Cột Thông tin liên hệ -->
                        <div class="footer-column">
                            <h3>Thông tin liên hệ</h3>
                            <div class="contact-info">
                                <table class="contact-table">
                                    <tbody>
                                        <tr>
                                            <th>Mã số thuế:</th>
                                            <td>0318500822</td>
                                        </tr>
                                        <tr>
                                            <th>  Địa chỉ:</th>
                                            <td>135A Đường Trần Thị Diệu, Phường Phước Long, Thành phố Hồ Chí Minh, Việt Nam</td>
                                        </tr>
                                        <tr>
                                            <th>Email:</th>
                                            <td><a href="mailto:support@hisotekvn.com">support@hisotekvn.com</a></td>
                                        </tr>
                                        <tr>
                                            <th>Hotline:</th>
                                            <td><a href="tel:0794791049">0794 791 049</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Bottom nằm trong phần 1 -->
                    <div class="footer-bottom">
                        <div class="copyright">
                            Hisotek Vietnam©{{ date('Y') }}
                        </div>
                        <a href="#" class="partnership-link">
                            Bạn muốn hợp tác? <strong>Hãy kết nối với chúng tôi</strong>
                           <img class="brand-logo" src="{{ asset('image/icons/Arrow-Outward.png') }}" alt="Hisotek Logo" />
                        </a>
                    </div>
                </div>

                <!-- Phần 2: Email form (35%) -->
                <div class="footer-column footer-right">
                    <div class="email-subscription">
                        <h4 style="display:none">Địa chỉ email</h4>
                        <div class="email-input-group">
                            <div class="form-field">
                                <label class="form-label" for="footer-email">Địa chỉ email</label>
                                <input id="footer-email" type="email" class="email-input" placeholder="Địa chỉ email của bạn">
                            </div>
                            <button class="email-btn">Đăng ký</button>
                        </div>
                        <div class="social-wrapper">
                            <div class="social-section">
                                <h4>Liên lạc với chúng tôi trên</h4>
                                <div class="social-icons">
                                    <a href="#" class="social-icon">
										<img class="brand-logo" src="{{ asset('image/icons/fb-footer-icon.png') }}" alt="Hisotek Logo" />
									</a>
                                    <a href="#" class="social-icon">
										<img class="brand-logo" src="{{ asset('image/icons/zalo-footer-icon.png') }}" alt="Hisotek Logo" />
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
