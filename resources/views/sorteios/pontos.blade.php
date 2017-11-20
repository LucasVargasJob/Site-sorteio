@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h4 id="text_center"> Consiga pontos realizando as tarefas abaixo: </h4>
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Tafera nº:</th>
                                <th>Atividade:</th>
                                <th>Disponível até:</th>
                                <th>Recompensa:</th>
                                <th>Pegar</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>     
                              <tr class="success">
                                <td> 1 </td>
                                <td>Seguir a pagina do site no <a>Facebook </a></td>
                                <td>22/11/2017</td>
                                <td>20 Pontos</td>
                                <td><button type="button" class="btn btn-success">Pegue</button></td>
                              </tr>
                              <tr class="danger">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr class="info">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr class="warning">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr class="active">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>


                        
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection