
<div class="person-card">
    <img src="{{ $image }}" alt="{{ $name }}" class="avatar">
    <h3 class="name">{{ $name }}</h3>
    <p class="title">{{ $title }}</p>
    <p class="description">{{ $description }}</p>

    @if(!empty($socials))
    <div class="social-links">
        @foreach($socials as $platform => $url)
            <a href="{{ $url }}" target="_blank" class="social-icon">
                <i class="fab fa-{{ $platform }}"></i>
            </a>
        @endforeach
    </div>
    @endif
</div>
