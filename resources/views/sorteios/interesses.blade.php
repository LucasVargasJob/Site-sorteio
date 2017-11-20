@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading" id="text_center">
                    Sorteios em que você está participando
                </div>

                <div class="panel-body">
                    @foreach($sorteios as $sorteio)
                        <article class="panel-body" id="container_produto">
                            <div id="text_center"> Sorteio nº {{$sorteio->id}}</div>
                            <figure><img src="{{URL::asset('img/'. $sorteio->imagem)}}" alt="Imagem do produto"></figure>
                            <div id="infoproduto">
                                {{$sorteio->name}} <br>
                                {{$sorteio->description}} 
                                {{$sorteio->quantity}} <br>
                                <div id="valor">Participando</div>
                            </div>
                        </article>
                    @endforeach     
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
