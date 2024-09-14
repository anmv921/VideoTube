<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $video->title }}</title>

    <link rel="stylesheet" 
    type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
    <h1>
        {{ $video->title }}
    </h1>
    
    <div>
        <a href="/videos/" >
            &larr; Voltar 
        </a>
    </div>
    
    <iframe width="420" height="315"
    src="{{ $youtubeEmbedURL }}{{$youtubeId}}"
    >
    </iframe>
    
    <ul>
        <li>View count - {{ $video->view_count }}</li>
        <li>Description - {{ $video->description }}</li>
        <li>Category id - {{ $video->category_id }}</li>
    </ul>
</body>
</html>

