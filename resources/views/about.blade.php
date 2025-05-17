
@include('components.header')
<body>

    <div class="container">
    <h1>Biography</h1>
    <div class="list-items">
    <div class="grid-template">  
            @foreach($team as $member)
                @include('components.person_card', [
                    'name'        => $member['name'],
                    'image'       => $member['image'],
                    'title'       => $member['title'],
                    'description' => $member['description'],
                    'socials'     => $member['socials'],
                ]) 
            @endforeach   
    </div>
</div>

@include('components.footer')
</body>
</html>
