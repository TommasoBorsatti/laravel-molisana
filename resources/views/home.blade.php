
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!--/Fonts -->

        <link rel="stylesheet" href="{{asset("css/app.css")}}">

    </head>

    <body>
        
        @include('parts/header')

        <main>
            <div class="container wide-container">

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
    

            </div>

    

        </main>

    </body>
</html>
