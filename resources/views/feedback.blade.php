@include('components.header')
<body>
<div class="container">
<div class="feedback-form">
    <h2>Gửi Phản Hồi</h2>
      <form action="{{ route('feedback.send') }}" method="POST">
   {{-- <form action="{{ route('https://boomer-bridge.onrender.com/feedback.send') }}" method="POST"> --}}
        @csrf
        <label for="name">Họ tên</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Gửi lại feedback cho chúng mình nha !</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Gửi</button>
    </form>

    @if(session('success'))
    <p style="color:green ; font-weight:bold ; text-align: center">{{ session('success') }}</p>
@endif
</div>

</div>
@include('components.footer')
</body>
</html>
