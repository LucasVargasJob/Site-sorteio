@extends('layouts.app')
@section('content')
@if(!Auth::guest())
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(Auth::user()->admin)
                	   <a class="pull-right btn btn-default" href="{{ url('sorteio/novo') }}">Novo Sorteio</a> <br><br>
                    @else
                        <p id="text_center"> Sorteios atuais </p>
                    @endif   
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif
            		
            	    @foreach($sorteios as $sorteio)
                        <article class="panel-body" id="container_sorteio">
                            <div id="text_center"> Sorteio nº {{$sorteio->id}}</div>
    						<figure><img src="{{URL::asset('img/'. $sorteio->imagem)}}" alt="Imagem do produto"></figure>

    					 	<div id="info_sorteio">
                				{{$sorteio->name}} <br>
                				{{$sorteio->description}} 
                				<br>
                				<div id="valor">Pontos: {{$sorteio->price}}</div>
            				</div>

                            @if(Auth::user()->admin)
                                <a href="{{ '/sorteios/'.$sorteio->id}}/editar" class="btn btn-default">Editar</a>
                                {!! Form::open(['method' => 'DELETE', 'url' => '/sorteios/'.$sorteio->id, 'style' => 'display: inline;']) !!}
                                <button type="submit" class="pull-right btn btn-default" >Excluir</button>
                                {!! Form::close() !!}
                                @else
                                <a class="form-control btn btn-default" href="{{ url('/interesses/'.Auth::user()->id).'/'.$sorteio->id }}">Participar</a>  
                            @endif   
    				    </article>
				    @endforeach 	
                </div>  
            </div>   
        </div>
    </div>
</div>

@endif
@endsection
