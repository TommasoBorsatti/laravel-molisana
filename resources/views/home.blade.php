
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--/Fonts -->

        <link rel="stylesheet" href="{{asset("css/app.css")}}">

    </head>

    <body>
        <div class="container">
            <h1>
                CIAONE
            </h1>
            <div>
                <ul>
                    @foreach ($lunghe as $lunga)
                    <li>{{$lunga["tipo"]}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <ul>
                    @foreach ($corte as $corta)
                    <li>{{$corta["tipo"]}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <ul>
                    @foreach ($cortissime as $cortissima)
                    <li>{{$cortissima["tipo"]}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
