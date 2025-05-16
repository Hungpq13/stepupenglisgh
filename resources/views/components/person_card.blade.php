
<style>
    .person-card {
    width: 300px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    padding: 20px;
    text-align: center;
    transition: 0.3s ease;
}

.person-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.person-card .avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #e0e0ff;
    margin-bottom: 10px;
}

.person-card .name {
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0 5px;
}

.person-card .title {
    color: #ffcdf3;
    font-weight: 500;
    margin-bottom: 10px;
}

.person-card .description {
    color: #666;
    font-size: 14px;
    margin-bottom: 15px;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.social-icon {
    color: #555;
    font-size: 18px;
    transition: color 0.3s;
}

.social-icon:hover {
    color: #4a4aff;
}
</style>
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
