<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $video->title }}</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>

    <main>

        <section class="section-show-video">
            <div>
                <h2>
                    {{ $video->title }}
                </h2>
            </div>
            
            <div class="div-iframe">
                <iframe width="420" height="315"
                src="{{ $youtubeEmbedURL }}{{$youtubeId}}" >
                </iframe>
            </div>
            
            <div>

                <details>
                    <summary>{{ $video->view_count }} views</summary>


                    <div>
                        {{ $video->description }}
                    </div>

                    <hr>

                    <div>
                        {{ $category  }}

                    </div>

                </details>
                  
            </div>

            <div>
                <a href="/videos/" >
                    &larr; Voltar 
                </a>
            </div>
            
        </section>

    </main>

</body>
</html>

