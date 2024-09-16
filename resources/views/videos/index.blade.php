<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videos</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
    <main>
        <h1 class="h1-videos">
            Videos
        </h1>

      

        <button class="button button-grey btn-open-submit-form">
            <a href="/video/create" >
                Submit video &rarr;
            </a>
        </button>

        

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
                            {{ $video->id_user }}
                        </td>
                        <td>
                            0
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>

