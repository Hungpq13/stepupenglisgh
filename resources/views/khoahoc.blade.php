<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khoa-hoc</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<header>
        <img src="{{ asset('images/logo.png') }}" alt="StepUp Logo" style="height: 100px;">
        <nav>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <div class="menu">
            <a href="/">TRANG CHỦ</a>
            <a href="/gioi-thieu">GIỚI THIỆU</a>
            <a href="/khoa-hoc" style=" text-decoration: underline;"> KHÓA HỌC</a>
            <a href="/lien-he">LIÊN HỆ</a>
            <a href="/tuyen-dung">TUYỂN DỤNG</a> </div>
        </nav>

    </header>
    <h1>CON BẠN ĐANG Ở ĐỘ TUỔI NÀO?</h1>
    <div class="container">

        <div class="age-group-container">
            <div class="age-group" onclick="showPopup('3-6')">
            <img src="{{ asset('images/36.png') }}" alt="StepUp Logo" style="width:100%;">
            </div>
            <div class="age-group" onclick="showPopup('6-11')">
            <img src="{{ asset('images/611.png') }}" alt="StepUp Logo" style="width:100%;">
            </div>
            <div class="age-group" onclick="showPopup('11-16')">
            <img src="{{ asset('images/1161.png') }}" alt="StepUp Logo" style="width:100%;">
            </div>
        </div>
    </div>

    <div id="popup-3-6" class="popup">
        <img src="{{ asset('images/mamnon.png') }}" alt="StepUp Logo" style="width:100%;" class="popup-image">
        <button onclick="hidePopup('3-6')">Đóng</button>
    </div>

    <div id="popup-6-11" class="popup">
    <img src="{{ asset('images/tieuhoc.png') }}" alt="StepUp Logo" style="width:100%;" class="popup-image">
        <button onclick="hidePopup('6-11')">Đóng</button>
    </div>

    <div id="popup-11-16" class="popup">
    <img src="{{ asset('images/trunghoc.png') }}" alt="StepUp Logo" style="width:100%;" class="popup-image">
        <button onclick="hidePopup('11-16')">Đóng</button>
    </div>

    <div id="overlay" class="overlay" onclick="hideAllPopups()"></div>


    <div style="text-align: center; border-top: 1px solid #ddd; padding-top: 20px; font-size: 0.9em; color: #777;">
    <div class="lienhe" >
        <div style="text-align: left;">
            <h2>LIÊN HỆ</h2>
            <p>Khu Vực Miền Nam</p>
            <p>028 8307 5555 (Phím 1)</p>
        </div>
        <div>
        <p><strong>Trụ sở chính:</strong> 11-12 Đ. DTH, BN, Quận 3, Hồ Chí Minh</p>
        <p><strong>Email:</strong> <a href="mailto:2256120034@hcmussh.edu.vn">2256120034@hcmussh.edu.vn</a></p> </div>
    </div>
    </div>
    <script>
        function showPopup(age) {
            const popup = document.getElementById(`popup-${age}`);
            const overlay = document.getElementById('overlay');
            if (popup && overlay) {
                popup.style.display = 'block';
                overlay.style.display = 'block';
            }
        }

        function hidePopup(age) {
            const popup = document.getElementById(`popup-${age}`);
            const overlay = document.getElementById('overlay');
            if (popup && overlay) {
                popup.style.display = 'none';
                overlay.style.display = 'none';
            }
        }

        function hideAllPopups() {
            const popups = document.querySelectorAll('.popup');
            const overlay = document.getElementById('overlay');
            popups.forEach(popup => {
                popup.style.display = 'none';
            });
            if (overlay) {
                overlay.style.display = 'none';
            }
        }


        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }

    </script>
</body>
</html>
