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
            <a href="/">TRANG CHỦ</a>
            <a href="/gioi-thieu">GIỚI THIỆU</a>
            <a href="/khoa-hoc"> KHÓA HỌC</a>
            <a href="/lien-he" >LIÊN HỆ</a>
            <a href="/tuyen-dung" style=" text-decoration: underline;">TUYỂN DỤNG</a> </div>
        </nav>
        <div style="text-align: center; border-top: 1px solid #ddd; padding-top: 20px; font-size: 0.9em; color: #777; margin-top: 200px;">
    </header>

    <main>
    <h1> TUYỂN DỤNG</h1>
    <div class="container">
    <div class="header">

    </div>
    <div style="display: flex; flex-wrap: wrap; justify-content: space-around; align-items: flex-start;">
        <div style="flex: 2; min-width: 300px; margin-bottom: 20px; text-align: left; padding-right: 20px;">
            <p style=" font-size:30px ; color: black ; font-weight: bolder;">Thực tập sinh phòng học thuật (ESL)</>
            <ul>
                <li>Chuẩn bị tài liệu, dụng cụ giảng dạy cho giáo viên: Giáo trình các cấp, flashcard (nếu có), tranh ảnh phục vụ việc học/ events, giáo cụ…</li>
                <li>Hỗ trợ xây dựng chương trình theo nhiều format khác nhau, dựa trên yêu cầu của khách hàng.</li>
                <li>Hỗ trợ xây dựng, nghiên cứu các đề kiểm tra, đáp ứng theo yêu cầu của khách hàng, phù hợp trình độ của học viên.</li>
                <li>Hỗ trợ xây dựng các chương trình ngoại khóa theo yêu cầu.</li>
                <li>Hỗ trợ đánh giá chất lượng của chương trình dạy học; chất lượng giảng dạy của giáo viên nước ngoài.</li>
                <li>Soạn các bài mẫu demo cho giáo viên mới, giáo viên đi dạy thế.</li>
            </ul>
        </div>
        <div style="flex: 1; min-width: 300px; margin-bottom: 20px; text-align:left; padding-left: 20px;">
            <p style=" font-size:30px ; color: black ; font-weight: bolder;">YÊU CẦU ỨNG VIÊN</>
            <ul>
                <li>Ưu tiên sinh viên năm 3 hoặc năm 4.</li>
                <li>Yêu cầu chứng chỉ tiếng Anh B1.</li>
                <li>Ưu tiên có kinh nghiệm về lĩnh vực giáo dục <br> (soạn giáo án, thiết kế chương trình).</li>
                <li>Thành thạo tin học văn phòng.</li>
                <li>Có kỹ năng giao tiếp, xử lý tình huống tốt.</li>
                <li>Tác phong lịch sự, chuyên nghiệp.</li>
            </ul>
        </div>
    </div>

</div>
<div style="text-align: center; margin-bottom:20px">
        <a href="https://www.facebook.com/shynnsleepy" target="_blank" class="button" style=" font-size:30px ; color: black ; font-weight: bolder ;">Ứng tuyển tại đây</a>
    </div>
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
    </div> </div>
    </main>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
