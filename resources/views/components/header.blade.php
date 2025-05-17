<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu - StepUp</title>

   <link rel="stylesheet" href="https://stepupenglisgh.onrender.com/styles.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        {{-- <link rel="stylesheet" href="{{ asset('styles.css') }}"> --}}


</head>
<script>
    function toggleMenu() {
        const menu = document.querySelector('.menu');
        const main = document.querySelector('main') || document.querySelector('.container');
        menu.classList.toggle('active');
        window.scrollTo(0, 0);

        // Kiểm tra nếu chiều rộng nhỏ hơn 768px (thiết bị di động)
        const isMobile = window.innerWidth < 1025;

        if (menu.classList.contains('active')) {
            if (main && isMobile) main.style.marginTop = '1000px'; // Đẩy nội dung xuống
        } else {
            if (main) main.style.marginTop = ''; // Reset lại margin
        }
    }
</script>

<script>
    // Hiện menu-toggle khi scroll xuống
    window.addEventListener('scroll', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu');
        if (window.scrollY > 100) {
            menuToggle.style.display = 'block';
            menu.style.display = 'none'; // Ẩn menu khi scroll
        } else {
            menuToggle.style.display = '';
            menu.style.display = ''; // Hiện menu khi ở đầu trang
        }
    });
</script>
     <div id="root" style="position:fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
        <div id="root"></div>
     </div>
      {{-- Nhúng file JS của React --}}
        {{-- <script type="module" src="{{ asset('/react/dist/assets/index-0sTEjenx.js') }}"></script> --}}
     <script type="module" src="{{ asset('https://stepupenglisgh.onrender.com/react/dist/assets/index-0sTEjenx.js') }}"></script>
<header>
    <nav >
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <div class="menu hide">
            <a href="/" style="{{ Request::is('/') ? 'text-decoration : underline ;' : '' }}">TRANG CHỦ</a>
              <a href="/ve-chung-toi" style="{{ Request::is('ve-chung-toi') ? 'text-decoration : underline;' : '' }}">VỀ CHÚNG TÔI</a>
            <a href="/san-pham" style="{{ Request::is('san-pham') ? 'text-decoration : underline;' : '' }}">SẢN PHẨM</a>

            <a href="/lien-he" style="{{ Request::is('lien-he') ? 'text-decoration : underline;' : '' }}">LIÊN HỆ</a>
            <a href="/feedback" style="{{ Request::is('feedback') ? 'text-decoration : underline;' : '' }}">FEEDBACK</a>
        </div>
    </nav>

</header>



