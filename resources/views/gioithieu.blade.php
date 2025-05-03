<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu - StepUp</title>

    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
    <img src="{{ asset('images/logo.png') }}" alt="StepUp Logo" style="height: 100px;">
        <nav>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <div class="menu">
            <a href="/">TRANG CHỦ</a>
            <a href="/gioi-thieu"style=" text-decoration: underline;">GIỚI THIỆU</a>
            <a href="/khoa-hoc" > KHÓA HỌC</a>
            <a href="/lien-he">LIÊN HỆ</a>
            <a href="/tuyen-dung">TUYỂN DỤNG</a> </div>
        </nav>

    </header>

    <main class="container" style="margin-top : 80px;">
        <div class="left-column">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">

        </div>
        <div class="right-column">
            <h1 class="title" style =" text-align: center; text-indent: -4cm; ">TRUNG TÂM STEPUP ENGLISH</h1>
            <h2 class="subtitle " style =" text-align: center; text-indent: -4cm; ">StepUp - Vững Bước Tương Lai</h2>
            <p><strong>StepUp English</strong> tự hào là trung tâm tiếng Anh với hơn 10 năm kinh nghiệm, đồng hành cùng hàng ngàn học viện trên hành trình chinh phục ngôn ngữ toàn cầu. </p>
            <p>Với phương châm <strong>“Step Up – Vững bước tương lai”</strong>, chúng tôi xây dựng môi trường học tập thân thiện tập thân thiện, sáng tạo và hiệu quả – đặc biệt dành riêng cho học sinh từ tiểu học đến trung học.
             Tại StepUp, học viên không chỉ học tiếng Anh một cách tự nhiên qua các hoạt động tương tác, mà còn rèn luyện sự tự tin, phản xạ và kỹ năng giao tiếp trong đời sống.</p>
            <p  style=" text-indent: 3cm;"><strong>Hãy cùng StepUp chắp cánh cho ước mơ tiếng Anh của con bạn từ hôm nay!</strong></p>
        </div>

    </main>

    <h1 style="margin-top : 80px;">“NGƯỜI BẠN” ĐỒNG HÀNH CÙNG CON TRONG MỖI BUỔI HỌC</h1>
    <div class="container" >

        <div class="section">
            <div class="section-left">
                <h2>Đội ngũ Giáo viên nước ngoài tận tâm</h2>
                <ul style="height:100px">
                    <li>100% giáo viên nước ngoài tốt nghiệp đại học/sau đại học, với chứng chỉ giảng dạy quốc tế CELTA/TESOL và có tối thiểu 120 giờ đào tạo chuyên môn.</li>
                    <li>Thấu hiểu tâm lý, yêu trẻ, tận tâm và truyền cảm hứng học tập cho các con.</li>
                </ul>
                <div class="image-container">
                    <img src={{ asset('images/teacher.png') }} alt="Giáo viên nước ngoài" style=" height:400px" >
                    </div>
            </div>
            <div class="section-right" style=" margin-left: 10px;">
                <h2>Đội ngũ trợ giảng tận tình</h2>
                <ul style="height:100px">
                    <li>Mỗi lớp sẽ có 1 trợ giảng dày dặn kinh nghiệm hỗ trợ giáo viên trong giờ học và luôn theo sát giúp con tiếp thu bài hiệu quả khi đến lớp.</li>
                    <li>Cập nhật thường xuyên tình hình học tập của con đến phụ huynh.</li>
                </ul>
                <div class="image-container">
                    <img src="{{ asset('images/assistant.png') }}" alt="Trợ giảng tận tình" style=" height:400px">
                    </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header1">
            <h1>MÔI TRƯỜNG HỌC TẬP HIỆN ĐẠI GIÚP CON MỞ KHÓA KHO TÀNG KIẾN THỨC</h1>
            <p>StepUp mang đến những trải nghiệm học tập khác biệt, hiệu quả và đầy cảm hứng với trang thiết bị hiện đại và môi trường giáo dục đẳng cấp quốc tế, giúp con yêu thích và chủ động khám phá kho tàng Anh ngữ.</p>
        </div>

    </div>
    <div class="image-grid">
            <img src="{{ asset('images/classroom1.png') }}" alt="Lớp học hiện đại 1" style=" height:400px">
            <img src="{{ asset('images/classroom2.png') }}" alt="Lớp học hiện đại 2" style=" height:400px">
        </div>

        <div style="text-align: center; border-top: 1px solid #ddd; padding-top: 20px; font-size: 0.9em; color: #777; margin-top : 100px;">
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
function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
