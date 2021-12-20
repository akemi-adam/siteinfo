@extends('layouts.dashboard')
@section('conteudo')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Solicitações para Usuário Interno</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($solicitacoes as $solicitacao)  
                    
                    <tr>
                        <td>{{ $solicitacao->user_id }}</td>
                        <td>{{ $solicitacao->name }}</td>
                        <td>{{ $solicitacao->email }}</td>
                        <td>
                            <a href="" class="btn-circle bg-success text-white"><i class="fas fa-plus btn-lg"></i></a>
                            <a href="" class="btn-circle bg-danger text-white"><i class="fas fa-times btn-lg"></i></a>
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection