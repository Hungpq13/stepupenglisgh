<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepUp English</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="StepUp Logo" style="height: 100px;">
        <nav>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <div class="menu">
            <a href="/" style=" text-decoration: underline;">TRANG CHỦ</a>
            <a href="/gioi-thieu">GIỚI THIỆU</a>
            <a href="/khoa-hoc" > KHÓA HỌC</a>
            <a href="/lien-he">LIÊN HỆ</a>
            <a href="/tuyen-dung">TUYỂN DỤNG</a> </div>
        </nav>

    </header>

    <main>
        <img src="{{ asset('images/banner.png') }}" alt="StepUp Team" style="width: 80%; margin-left:10% ; margin-right:10%; margin-top: 50px;">

        <div style="text-align: center; border-top: 1px solid #ddd; padding-top: 20px; font-size: 0.9em; color: #777; margin-top: 200px;">
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
    </main>


<script>
function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
