<style>
    input.form-control{
        border-width: 0px 0px 1px 0px;
        box-shadow: 0 0 0 0;
        border-radius: 0px;        
    }
    #center{
        margin: 0 auto;
        float: none;
    }
</style>

@extends('layouts.app')

@section('content')
<div  class="container">
        <h2 align="center">Adicionar de Usuário</h2>          
        <div class="row">
            <nav>
                <div class="nav-wrapper"  aria-label="breadcrumb">
                    <div class="col-md-12 breadcrumb">                        
                        <li><a class="breadcrumb-item" href="{{route('admin.principal')}}">Iniciar</a></li>
                        <li><a class="breadcrumb-item" href="{{route('admin.usuarios')}}">Lista Usuarios</a></li>
                        <li><a>Adicionar de Usuarios</a></li>                            
                    </div> 
                </div>
            </nav>
        
        </div>  
        <div class="row">
            <div class="col-md-6 col-md-12" id="center">
            <form action="{{route('admin.usuarios.salvar')}}" method="post">
                {{csrf_field()}}
                @include('admin.usuarios._form')

                <button class="btn btn-primary">Adicionar</button>
            </form>
        </div>
        </div>
        
    </div>

@endsection