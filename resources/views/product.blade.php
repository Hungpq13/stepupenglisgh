@include('components.header')
<style>
    .video-section {
    margin-top: 150px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 3fr));
    gap: 20px;

    min-height: 60vh;
}

.video-card {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
    padding: 32px 24px 24px 24px;
    max-width: 380px;
    width: 100%;
    text-align: center;
}

.video-responsive {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    height: 0;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
    margin-bottom: 18px;
}

.video-responsive iframe {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    border: 0;
    border-radius: 12px;
}

.video-title {
    font-size: 1.4rem;
    margin: 12px 0 8px 0;
    color: #1e293b;
    font-weight: bold;
}

.video-desc {
    color: #64748b;
    font-size: 1rem;
    margin-bottom: 0;
}
</style>
<body>
    <div class="container">
        <div class="list-member">
    <div class="age-group-container">
       @include('components.product_card')

    </div> </div></div>
</body>
</html>
