
@extends('layouts.main')

@section('titolo-pagina')
<title>La Molisana - I nostri prodotti</title>
@endsection

@section('content')
<main>
    <div class="title-box">
        <h1>{{$prodotto['titolo']}}</h1>
    </div>
    <div class="product-hero">
        <img src={{$prodotto['src-h']}}>
    </div>
    <div class="product-detail">
        <img src={{$prodotto['src-p']}} alt={{$prodotto['titolo']}}>       
    </div>
    <div class="container">
        <div class="text-box">
            <p>{!!$prodotto['descrizione']!!}</p>
        </div>
    </div>

    <!--sidescroll button-->   
    <div class="left scroll">
        <a href={{route("prodotto", ['id'=> 6]) }}><i class="fas fa-chevron-left"></i></a>
    </div>
    <div class="right scroll">
        <a href={{route("prodotto", ['id'=> 3]) }}><i class="fas fa-chevron-right"></i></a>
    </div>

</main>
@endsection
