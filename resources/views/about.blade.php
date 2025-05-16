@include('components.header')
<body>
    <script src="{{ asset('js/popup.js') }}"></script>
    <div class="container">
    <h1>Biography</h1>
    <div class="list-member">
    <div class="age-group-container">
     @include('components.person_card', [
    'name' => 'Vũ Minh Hằng',
    'title' => 'Content Creator',
    'description' => 'Ngủ ngày 14 tiếng, thức đêm đến 2h sáng, làm việc 1 tiếng',
    'image' => asset('images/VMH.jpg'),
    'socials' => [
        'facebook' => 'https://www.facebook.com/shynnsleepy',
        'linkedin' => 'https://www.facebook.com/shynnsleepy'
    ]
    ])
     @include('components.person_card', [
    'name' => 'Vũ Minh Hằng',
    'title' => 'Content Creator',
    'description' => 'Ngủ ngày 14 tiếng, thức đêm đến 2h sáng, làm việc 1 tiếng',
    'image' => asset('images/VMH.jpg'),
    'socials' => [
        'facebook' => 'https://www.facebook.com/shynnsleepy',
        'linkedin' => 'https://www.facebook.com/shynnsleepy'
    ]
    ])
     @include('components.person_card', [
    'name' => 'Vũ Minh Hằng',
    'title' => 'Content Creator',
    'description' => 'Ngủ ngày 14 tiếng, thức đêm đến 2h sáng, làm việc 1 tiếng',
    'image' => asset('images/VMH.jpg'),
    'socials' => [
        'facebook' => 'https://www.facebook.com/shynnsleepy',
        'linkedin' => 'https://www.facebook.com/shynnsleepy'
    ]
    ])
     @include('components.person_card', [
    'name' => 'Vũ Minh Hằng',
    'title' => 'Content Creator',
    'description' => 'Ngủ ngày 14 tiếng, thức đêm đến 2h sáng, làm việc 1 tiếng',
    'image' => asset('images/VMH.jpg'),
    'socials' => [
        'facebook' => 'https://www.facebook.com/shynnsleepy',
        'linkedin' => 'https://www.facebook.com/shynnsleepy'
    ]
    ])
     @include('components.person_card', [
    'name' => 'Vũ Minh Hằng',
    'title' => 'Content Creator',
    'description' => 'Ngủ ngày 14 tiếng, thức đêm đến 2h sáng, làm việc 1 tiếng',
    'image' => asset('images/VMH.jpg'),
    'socials' => [
        'facebook' => 'https://www.facebook.com/shynnsleepy',
        'linkedin' => 'https://www.facebook.com/shynnsleepy'
    ]
    ])
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
    </div>
</body>
</html>
