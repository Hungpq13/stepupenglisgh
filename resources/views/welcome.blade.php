<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepUp English</title>
    <style>body {
    font-family: Arial, sans-serif;
    background-color: #f7fbe9;
    margin: 0;
    padding: 0;
}
nav a {
    margin: 0 15px;
    font-weight: bold;
    text-decoration: none;
    color: black;
}

a:hover
{
  color : green;
  text-decoration: underline;
}
header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 50px;
}

.container {
    display: flex;
    padding: 20px;
    background-color: #f9fce8;
    justify-content: center;
    gap: 50px;

}

.left-column {
    flex: 1;
    text-align: center;
}

.right-column {
    flex: 2;
    background-color: #f9fce8;
}

.title {
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.subtitle {
    font-size: 24px;
    font-weight: normal;
    color: #333;
    margin-bottom: 30px;
}

.right-column p {
    font-size: 18px;
    line-height: 1.8;
    color: #111;
}

h1 {
    color: #2E8B57;
    text-align: center;
    margin-bottom: 20px;
}
.section {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 5px;
    background-color : rgb(179, 212, 161);
}
.section-left, .section-right {
    flex: 1;
    gap: 10px ;

}
h2 {
    color: #4682B4;
    margin-top: 0;
    margin-bottom: 10px;
}
ul {
    padding-left: 20px;
    margin-bottom: 15px;
}
li {
    margin-bottom: 5px;
}
img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}
.image-container {
    text-align: center;
}

.loading {
    text-align: center;
    padding: 10px;
    display: none; /* Ẩn ban đầu */
}
.header1 {
    text-align: center;
    color: #2E8B57; /* Màu xanh lá cây */
    margin-bottom: 20px;
}

.header1 h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
}
.header1 p {
    font-size: 1.1em;
    color: #555;
}
.image-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
.image-grid img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}




.age-group-container {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}
/* Responsive layout */
@media (max-width: 768px) {
    .image-grid {
        display: grid; /* Cần có display: grid nếu dùng grid-template-columns */
        grid-template-columns: 1fr;
    }
    .age-group-container {
        flex-direction: column;
    }
}
.age-group {
    background-color: #e0f7fa; /* Màu xanh nhạt */
    border: 1px solid #b2ebf2;
    border-radius: 5px;
    text-align: center;
    cursor: pointer;
}
.age-group h2 {
    color: #00bcd4; /* Màu xanh dương nhạt */
    margin-top: 0;
    margin-bottom: 10px;
}
.popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    display: none; /* Ẩn mặc định */
    text-align: center;
}
.popup h3 {
    color: #4CAF50; /* Màu xanh lá cây đậm */
    margin-top: 0;
    margin-bottom: 10px;
}
.popup p {
    line-height: 1.6;
    margin-bottom: 15px;
    text-align: left; /* Căn trái nội dung pop-up cho dễ đọc */
}
.popup button {
    background-color: #f44336; /* Màu đỏ */
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
}
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Màu đen trong suốt */
    z-index: 999;
    display: none; /* Ẩn mặc định */
}
.popup-image {
    max-width: 100%;
    height: auto;
    margin-bottom: 5%;
    border-radius: 5px;
}
     @media ((max-width: 900px) and (min-width: 300px) ) {
            .age-group-container {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
                margin-bottom: 20px;
            }
            .age-group {
                padding: 15px;
                font-size: 1em;
            }
            .age-group h2 {
                margin-bottom: 10px;
                font-size: 1.3em;
            }
            .popup {
                padding: 20px;
                max-height: none; /* Loại bỏ giới hạn chiều cao trên desktop */
                overflow-y: visible; /* Loại bỏ thanh cuộn mặc định trên desktop */
                width: 80%; /* Giảm chiều rộng pop-up trên desktop */
                max-width: 600px; /* Tăng chiều rộng tối đa của pop-up trên desktop */
            }
            .popup h3 {
                font-size: 1.5em;
                margin-bottom: 15px;
            }
            .popup p {
                font-size: 1.1em;
                margin-bottom: 15px;
            }
            .popup ul {
                font-size: 1.1em;
                margin-bottom: 15px;
            }
            .popup li {
                margin-bottom: 8px;
            }
            .popup button {
                padding: 10px 20px;
                font-size: 1.1em;
                margin-top: 15px;
            }
            .popup-image {
                margin-bottom: 15px;
            }
        }


        .menu-toggle {
            display: none; /* Ẩn nút menu mặc định trên desktop */
            font-size: 1.5em;
            cursor: pointer;
            padding: 10px 15px;
            position: absolute;
            top: 0;
            left: 10px;
        }

        .menu {
            display: block; /* Hiển thị menu đầy đủ trên desktop */
        }

        /* Ẩn menu và hiển thị nút menu trên thiết bị di động (max-width: 768px) */
        @media (max-width: 768px) {
            .menu {
                display: none; /* Ẩn menu trên mobile */
                flex-direction: column; /* Hiển thị các link theo cột trên mobile */
                width: 100%;
                text-align: left;
                position: absolute;
                top: 50px; /* Điều chỉnh vị trí menu xuống dưới nút */
                left: -150px;
                z-index: 10; /* Đảm bảo menu hiển thị trên các phần tử khác */
            }

            .menu a {
                display: block; /* Mỗi link trên một dòng trên mobile */
                padding: 50px;
                width: 100px;
                border-bottom: 1px solid #555;
                background-color: whitesmoke;

            }

            .menu a:last-child {
                border-bottom: none;
            }

            .menu-toggle {
                display: block; /* Hiển thị nút menu trên mobile */
                margin-left: -50px;
            }

            nav {
                position: relative; /* Để định vị tuyệt đối nút menu */
                text-align: center; /* Căn giữa nút menu (có thể tùy chỉnh) */
            }
        }

        .menu.active {
            display: flex; /* Hiển thị menu khi có class 'active' */

        }

        .lienhe {
            display: flex; justify-content: center;
            align-items: flex-start;
            margin-bottom: 20px; gap :100px
        }
        @media (max-width: 800px) {
            .lienhe{
                justify-content: center;
                flex-direction: column;
                margin-bottom: 120px; gap :10px ;
                padding: 10px;
            }
            .container {
                flex-direction: column;
                padding: 10px;
            }

            .left-column,
            .right-column {
                width: 100%;
                text-align: center;
            }

            .right-column .title,
            .right-column .subtitle {
                text-indent: 0 !important;
                text-align: center;
            }
            .section {
                flex-direction: column;
            }

            .section-left,
            .section-right {
                width: 100%;
            }

            .image-container img {
                height: auto !important;
                max-width: 100%;
            }

            .image-grid {
                grid-template-columns: 1fr;
            }

            .image-grid img {
                height: auto !important;
                width: 100%;
            }
        }
 </style>
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
