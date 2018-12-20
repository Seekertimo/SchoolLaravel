@extends('layouts.master')

@section('content')
    <h1>Photo Gallery Form</h1>

    <form action="{{ route('gallery.save_photo') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text"  value="{{ old('title') }}"  name="title" placeholder="vul hier in" class="form-control">
                @if($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                    @endif
            </div>
    <div class="form-group">
        <label for="description">omschrijving</label>
        <textarea name="description" placeholder="vul hier in"></textarea>
        @if($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description') }}</p>
        @endif
    </div>
        <div class="form-group">
            <label for="photo">foto uploaden</label>
            <input name="photo" type="file">
            @if($errors->has('photo'))
                <p class="text-danger">{{ $errors->first('photo') }}</p>
            @endif
        </div>
    <button type="submit" class="btn btn-primary">Opsturen</button>




    </form>
    @endsection