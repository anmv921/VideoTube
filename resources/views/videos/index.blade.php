<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videos</title>

    

    <!-- Fonts -->
    <link rel="preconnect" 
    href="https://fonts.bunny.net">
    <link 
    href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" 
    rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

</head>

<body >
                <header >
                    @if (Route::has('login'))
                        <nav class="nav-auth" >
                            @auth
                                    <a
                                    href="{{ url('/dashboard') }}" >
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

            

            <table>
                <caption>
                    Total videos: {{ $videos->count() }}
                </caption>
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Views</th>
                        <th scope="col">Category</th>
                        <th scope="col">User</th>
                        <th scope="col">Comments</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <th scope="row">
                                <a href="/videos/{{ $video->id }}">
                                    {{ $video->title }}
                                </a>
                            </th>
                            <td>
                                {{ $video->view_count }}
                            </td>
                            <td>
                                {{  $video->category->name }}
                            </td>
                            <td>
                                {{ $video->user->name }}
                            </td>
                            <td>
                                0
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ( Auth::user() )
                <button class="button button-grey btn-open-submit-form">
                    <a 
                    href="{{ url('/video/create') }}" >
                        Submit video &rarr;
                    </a>
                </button>
            @else
                <p class="py-12 italic p-please-login" >
                    Please login to a add a new video.
                </p>
            @endif


        </main>

</body>
</html>

