
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La Molisana - Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!--/Fonts -->

        <!-- CSS -->
        <link rel="stylesheet" href={{asset("css/app.css")}}>

        <!--FAVICON-->
        <link rel="apple-touch-icon" sizes="57x57" href={{asset("img/favicon/apple-icon-57x57.png")}}>
        <link rel="apple-touch-icon" sizes="60x60" href={{asset("img/favicon/apple-icon-60x60.png")}}>
        <link rel="apple-touch-icon" sizes="72x72" href={{asset("img/favicon/apple-icon-72x72.png")}}>
        <link rel="apple-touch-icon" sizes="76x76" href={{asset("img/favicon/apple-icon-76x76.png")}}>
        <link rel="apple-touch-icon" sizes="114x114" href={{asset("img/favicon/apple-icon-114x114.png")}}>
        <link rel="apple-touch-icon" sizes="120x120" href={{asset("img/favicon/apple-icon-120x120.png")}}>
        <link rel="apple-touch-icon" sizes="144x144" href={{asset("img/favicon/apple-icon-144x144.png")}}>
        <link rel="apple-touch-icon" sizes="152x152" href={{asset("img/favicon/apple-icon-152x152.png")}}>
        <link rel="apple-touch-icon" sizes="180x180" href={{asset("img/favicon/apple-icon-180x180.png")}}>
        <link rel="icon" type="image/png" sizes="192x192"  href={{asset("img/favicon/android-icon-192x192.png")}}>
        <link rel="icon" type="image/png" sizes="32x32" href={{asset("img/favicon/favicon-32x32.png")}}>
        <link rel="icon" type="image/png" sizes="96x96" href={{asset("img/favicon/favicon-96x96.png")}}>
        <link rel="icon" type="image/png" sizes="16x16" href={{asset("img/favicon/favicon-16x16.png")}}>
        <link rel="icon" type="image/png" sizes="16x16" href={{asset("img/favicon/favicon.ico")}}>

        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    </head>

    <body>
        
        <!--includo il file parts header-->
        @include('parts.header')

        <main>
            <div class="container wide-container">
                <div class="container">
                    <h2>LE LUNGHE</h2>
                    <div class="card-container">
                        @foreach ($lunghe as $lunga)
                        <div class="card">
                            <img src= {{$lunga["src"]}} alt={{$lunga["titolo"]}}>
                        </div> 
                        @endforeach
                    </div>
                </div>
                <div class="container">
                    <h2>LE CORTE</h2>
                    <div class="card-container">
                        @foreach ($corte as $corta)
                        <div class="card">
                            <img src= {{$corta["src"]}} alt={{$corta["titolo"]}}>
                        </div>    
                        @endforeach
                    </div>
                </div>
                <div class="container">
                    <h2>LE CORTISSIME</h2>
                    <div class="card-container">
                        @foreach ($cortissime as $cortissima)
                        <div class="card">
                            <img src= {{$cortissima["src"]}} alt={{$cortissima["titolo"]}}>
                        </div>   
                        @endforeach 
                    </div>
                </div>
        </main>

        <!--includo il file parts footer-->
        @include('parts.footer')

    </body>
</html>
