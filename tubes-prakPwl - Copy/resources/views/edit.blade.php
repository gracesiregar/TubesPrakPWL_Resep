@extends('layouts.layout')

@section('content')
{{-- content --}}
<div class="flex justify-center mt-10 flex-col gap-10">
  {{-- search bar --}}
  <form action="/updateResep" method="POST">
    @method('PUT')
    @csrf
    <input type="hidden" name="id" value="{{ $resep->id }}">
    <label class="form-control w-full max-w-lg mx-auto">
      <div class="label">
        <span class="label-text text-emerald-600">Edit Task</span>
      </div>
      <input name="resep" type="text" placeholder="Type here" class="input input-bordered input-success w-full max-w-lg"
        value="{{ $resep->resep }}" />
      @error('resep')
      <span class="text-red-600">{{ $message }}</span>
      @enderror
      <div class="label">
      </div>
      {{-- button add --}}
      <button type="submit" class="btn btn-success w-36 self-center">Edit</button>
      {{-- akhir button add --}}
    </label>
  </form>
  {{-- akhir search bar --}}
</div>
{{-- akhir content --}}
@endsection