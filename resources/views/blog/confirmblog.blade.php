@extends('layouts.app')
@section('content') 
    

    <div class="container py-5">
        <h1>¿Deseas eliminar esta seccion {{ $Blog->nombre}} ?</h1>
    <form method="POST" action="{{ route('blog.destroy',$Blog->id)}}">
        @method('DELETE')
        @csrf
        <button type="submit" class="redondo btn btn-danger">
            <i class="fas fa-trash-alt"></i>Eliminar
        </button>
        <a class="redondo btn btn-secondary" href="{{ URL::previous() }}">
            <i class="fas fa-ban"></i>Cancelar
          </a>       
    </form>
    </div>
@endsection
