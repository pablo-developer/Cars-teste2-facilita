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
        <h2 align="center">Adicionar de Cores</h2>          
        <div class="row justify-content-md-center">
            <nav>
                <div class="nav-wrapper"  aria-label="breadcrumb">
                    <div class="col-md-8 col-md-offset-2 col-md-12 breadcrumb">                        
                        <li><a class="breadcrumb-item" href="{{route('admin.principal')}}">Iniciar</a></li>
                        <li><a class="breadcrumb-item" href="{{route('admin.cores')}}">Lista Cores</a></li>
                        <li><a>Adicionar de Cores</a></li>                            
                    </div> 
                </div>
            </nav>        
        </div>  
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2 col-md-12" id="center">
                <form action="{{route('admin.cores.salvar')}}" method="post">
                    {{csrf_field()}}
                    @include('admin.cores._form')

                    <button class="btn btn-primary">Adicionar</button>
                </form>
            </div>
        </div>        
    </div>

@endsection