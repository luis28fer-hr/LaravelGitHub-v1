@extends('plantilla')
@section('contenido')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://almomento.mx/wp-content/uploads/2021/12/Peliculas-mas-taquilleras-Mexico-2021.jpg" class="d-block w-100" alt="imgen1">
      </div>
      <div class="carousel-item">
        <img src="https://gcdn.lanetaneta.com/wp-content/uploads/2022/04/Las-grandes-peliculas-de-culto-que-llegan-hoy-a-Filmin.jpg" class="d-block w-100" alt="imgen2">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection
