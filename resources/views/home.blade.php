
@extends('layouts.main')

@section('titolo-pagina')
<title>La Molisana - Home</title>
@endsection
       
@section('content')
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
@endsection

    

