
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
                <div class="container">
                    <h2>LE LUNGHE</h2>
                    <div class="card-container">
                        <div class="card">
                            @foreach ($lunghe as $lunga)
                            <img src= "{{$lunga["src"]}}" alt="{{$lunga["titolo"]}}"></li>
                            @endforeach
                        </div>    
                    </div>
                </div>
                <div class="container">
                    <h2>LE CORTE</h2>
                    <div class="card-container">
                        <div class="card">
                            @foreach ($corte as $corta)
                            <img src= "{{$corta["src"]}}" alt="{{$corta["titolo"]}}"></li>
                            @endforeach
                        </div>    
                    </div>
                </div>
                <div class="container">
                    <h2>LE CORTISSIME</h2>
                    <div class="card-container">
                        <div class="card">
                            @foreach ($cortissime as $cortissima)
                            <img src= "{{$cortissima["src"]}}" alt="{{$cortissima["titolo"]}}"></li>
                            @endforeach
                        </div>    
                    </div>
                </div>
        </main>

    </body>
</html>
