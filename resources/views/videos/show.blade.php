<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $video->title }}</title>


    <!-- Fonts -->
    <link rel="preconnect" 
    href="https://fonts.bunny.net">
    <link 
    href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" 
    rel="stylesheet" />

    <!-- Styles -->
<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />


</head>

<body >
                <header >
                    
                    @if (Route::has('login'))
                        <nav class="nav-auth">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}" >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}" >
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

    <main>

        <section class="section-show-video">
            
            
            <div class="div-iframe">
                <iframe width="420" height="315"
                src="{{ $youtubeEmbedURL }}{{$youtubeId}}" >
                </iframe>
            </div>

            <div>
                <h2>
                    {{ $video->title }}
                </h2>
            </div>
            
            <div>

                <details>
                    <summary>{{ $video->view_count }} views</summary>


                    <div class="div-description" >
                        {{ $video->description }}
                    </div>

                    <hr>

                    <div>
                        {{ $video->category->name  }}
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

