<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Submit Video
    </title>
   

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
                        <nav class="nav-auth">
                            @auth
                                <div>
                                <a
                                    href="{{ url('/dashboard') }}" >
                                        Dashboard
                                    </a>
                                <div>
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

            <h1 class="h1-create-video">
                Submit video
            </h1>

            <button class="button button-grey btn-back" >
                <a href="{{ url('/videos') }}" >
                    &larr; Go back  
                </a>
            </button>
            <form action="/videos" method="POST" >
                @csrf
                <div>
                    <input type="text" name="title" id="title" placeholder="Video title">
                </div>
                <div>
                    <input type="text" name="link" id="link" placeholder="Link">
                </div>
                <div>
                    <input type="text" name="view_count" id="view_count" placeholder="Views" >
                </div>
                <div>
                    <textarea id="description"
                     name="description"
                     placeholder="Description" ></textarea>
                </div>
                <div>
                    <select name="category_id" id="category_id" >
                        <option value="">
                            --Category--
                        </option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" 
                    class="button button-grey btn-submit" >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    
</body>
</html>


