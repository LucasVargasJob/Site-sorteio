@extends('layouts.app')

@section('content')
@if(!Auth::guest())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
             		Adicionar Sorteio
             		<a class="pull-right " href="{{ url('sorteios') }}"> Voltar </a>
                </div>
                
                <div class="panel-body">
                	@if(Session::has('mensagem_sucesso'))
                		<div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                	@endif

                    @if(Request::is('*/editar'))
                        {!! Form::model($sorteio, ['method' => 'PATCH', 'url' => 'sorteios/'.$sorteio->id]) !!}
                    @else
                        {!! Form::open(['url' => 'sorteios/salvar']) !!}
                    @endif        

                	{!! Form::label('nome', 'Nome') !!}
                	{!! Form::input('text', 'name',null, ['class' => 'form-control', 'autofocus']) !!}

                    {!! Form::label('imagem', 'Imagem') !!}
                    {!! Form::input('text', 'imagem',null, ['class' => 'form-control']) !!}

                	{!! Form::label('description', 'Descrição do jogo') !!}
                	{!! Form::input('text', 'description',null, ['class' => 'form-control']) !!}

                	{!! Form::label('quantity', 'Código') !!}
                	{!! Form::input('text', 'quantity',null, ['class' => 'form-control']) !!}

                	{!! Form::label('price', 'Pontos necessários') !!}
                	{!! Form::input('text', 'price',null, ['class' => 'form-control']) !!}

                	{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}

                	{!! Form::close() !!}
                </div>  

            </div>
        </div>
    </div>
</div>
@endif
@endsection
