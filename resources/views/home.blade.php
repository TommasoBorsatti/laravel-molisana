
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
                @foreach ($lunghe as $pasta)
                <div class="card">
                    <a href={{route("prodotto", ['id'=> $pasta['id'] ])}}><img src= {{$pasta["src"]}} alt={{$pasta["titolo"]}}></a>
                </div> 
                @endforeach
            </div>
        </div>
        <div class="container">
            <h2>LE CORTE</h2>
            <div class="card-container">
                @foreach ($corte as $pasta)
                <div class="card">
                    <a href={{route("prodotto", ['id'=> $pasta['id'] ])}}><img src= {{$pasta["src"]}} alt={{$pasta["titolo"]}}></a>
                </div>    
                @endforeach
            </div>
        </div>
        <div class="container">
            <h2>LE CORTISSIME</h2>
            <div class="card-container">
                @foreach ($cortissime as $pasta)
                <div class="card">
                    <a href={{route("prodotto", ['id'=> $pasta['id'] ])}}><img src= {{$pasta["src"]}} alt={{$pasta["titolo"]}}></a>
                </div>   
                @endforeach 
            </div>
        </div>
</main>
@endsection

    

