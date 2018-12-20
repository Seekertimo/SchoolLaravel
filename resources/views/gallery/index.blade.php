@extends('layouts.master')

@section('content')
    <h1>Photo Gallery</h1>
    <a href="{{ route('gallery.add_photo') }}" class="btn btn-success">Foto toevoegen</a>

    @foreach($photos as $photo)
        <img src="photos/{{ $photo->photo }}" alt="">
    @endforeach
    
    @endsection