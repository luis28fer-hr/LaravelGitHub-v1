@extends('plantilla')
@section('contenido')

<section class="container  col-md-6">
{{--     <div>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{$error}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
        @endif
    </div> --}}

    <form action="{{route('ProcesarPelicula')}}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title">Formulario de registro</h5>
            </div>
            <div class="card-body">

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10">
                      <input type="text" name="txtnombre" class="form-control" id="inputPassword" value="{{old('txtnombre')}}">
                    </div>
                    <p class="text-danger fst-italic" style="text-align: left">{{$errors->first('txtnombre')}}</p>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Fecha:</label>
                    <div class="col-sm-10">
                      <input type="date" name="txtfecha" class="form-control" id="inputPassword" value="{{old('txtfecha')}}">
                    </div>
                    <p class="text-danger fst-italic" style="text-align: left">{{$errors->first('txtfecha')}}</p>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Productora:</label>
                    <div class="col-sm-10">
                      <input type="text" name="txtproductor" class="form-control" id="inputPassword" value="{{old('txtproductor')}}">
                    </div>
                    <p class="text-danger fst-italic" style="text-align: left">{{$errors->first('txtproductor')}}</p>

                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="txtdescripcion" id="floatingTextarea">{{old('txtdescripcion')}}</textarea>
                    </div>
                    <p class="text-danger fst-italic" style="text-align: left">{{$errors->first('txtdescripcion')}}</p>

                </div>

            </div>
            <div class="card-footer text-center ">
                <button type="subtmit" class="btn btn-outline-success">Guardar</button>
                <button type="reset" class="btn btn-outline-danger">Cancelar</button>
            </div>
        </div>
    </form>

</section>

@endsection
