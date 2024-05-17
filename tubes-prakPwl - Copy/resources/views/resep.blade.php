

@extends('layouts.layout')
@section('content')
{{--content--}}
<div class=" bg-gray-200 ">
  <h1 class="hero-content flex-col lg:flex-row text-3xl font-extralight">Bagikan resep masakan Anda di Cookpad <br>dan bantu orang lain membuat hidangan lezat!</h1>
</div>


<div class=" flex bg-gray-200 p-4 grid-cols-3 justify-center">

{{--card--}}
<div class=" flex bg-gray-200 p-4 grid-cols-3 justify-center">

  <div class="card w-96 bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Shoes!</h2>
      <p>If a dog chews shoes whose shoes does he choose?</p>
      <div class=" flex gap-3 justify center">
      <div class="card-actions">
        <button class="btn btn-primary">Buy Now</button>
      </div>
      <div class="card-actions">
        <button class="btn btn-primary">edit</button>
      </div>
      <div class="card-actions">
        <button class="btn btn-primary">delete</button>
      </div>
    </div>
  </div>


  </div>
</div>
{{--akhir card--}}




</div>
{{--akhir content--}}
@endsection

