
<script src="{{asset('app.css')}}"></script>
@extends('layouts.app')

@section('content')    

</head>
    <div  class="container">
        <h2 align="center">Lista de Marcas</h2>  
        <div class="row justify-content-md-center">
            <nav>
                <div class="nav-wrapper"  aria-label="breadcrumb">
                    <div class="col-md-8 col-md-offset-2 breadcrumb">                        
                        <li><a class="breadcrumb-item" href="{{route('admin.principal')}}">Iniciar</a></li>
                        <li><a>Lista de Marca</a></li>                            
                    </div> 
                </div>
            </nav>
        </div>  
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2 id="centralizar">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nome</th>                            
                            <th>Ação</th>
                        </tr>
                        <tbody>
                            @foreach($marcas as $marca)
                                <tr>
                                    <td>{{$marca->marcaID}}</td>
                                    <td>{{$marca->marcaNome}}</td>                                    
                                    <td>
                                    <a class="btn btn-info" href="{{route('admin.marcas.editar',$marca->marcaID)}}">Editar</a>                
                                        <a class="btn btn-warning" href="
                                        javascript: 
                                            if(confirm('Deleta este registro?')){
                                                window.location.href='{{route('admin.marcas.deletar',$marca->marcaID)}}'
                                            }                                             
                                        ">Delete</a>                
                                    </td>            
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>                
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <a class="btn btn-primary" href="{{route('admin.marcas.adicionar')}}">Adicionar</a>                     
                    </div>
                </div> 
            </div>
        </div>    
    </div>
@endsection