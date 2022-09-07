@extends('layouts.app')

@section('title', 'Crear Partida')

@section('content')
    <div class="container">

        <div class="form d-flex justify-content-center gap-3">
            <form action="/games" method="POST" class="mx-3 px-3 mt-5 pt-2 pb-5" enctype="multipart/form-data">
                @csrf
                <div class="text-center mt-2 rounded">
                    <label class="" for="nickname" class="form-label"><h3 class="text-white">Ingrese su nombre de usuario</h3></label>
                    <input type="text" name="nickname" id="nickname" class="form-control"  >
                </div>
                <div class="game d-flex justify-content-center mt-5 gap-3">
                    <a class="btn btn-danger" href="/games" role="button">Crear usuario</a>
                </div>
            </form>
        </div>

    </div>
@endsection
