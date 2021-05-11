
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
    @if ($idProdotto > 0)
    <div class="left scroll">
        <a href={{route("prodotto", ['id'=> $idProdotto -1]) }}><i class="fas fa-chevron-left"></i></a>
    </div>
    @endif
    <div class="right scroll">
        @if ($idProdotto < $maxIndex)
        <a href={{route("prodotto", ['id'=> $idProdotto +1]) }}><i class="fas fa-chevron-right"></i></a>
        @endif
    </div>

</main>
@endsection
