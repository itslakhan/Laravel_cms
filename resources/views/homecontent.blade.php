@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h2>Edit Home Page Content</h2>
    <form action="{{ route('home.update') }}" method="post"  enctype="multipart/form-data" class="form-container">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $homecontent->title ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" class="form-control" value="{{ $homeContent->subtitle ?? '' }}" >
        </div>
       

        @for ($i = 1; $i <= 6; $i++) 
            <div class="form-group">
                <label for="icon_{{ $i }}">Icon {{ $i }}</label>
                <input type="file" name="icon_{{ $i }}" accept="image/*">

            </div>
            <div class="form-group">
                <label for="icon_title_{{ $i }}">Icon Title {{ $i }}</label>
                <input type="text" name="icon_title_{{ $i }}" class="form-control" value="{{ $homecontent->{'icon_title_'.$i} ?? '' }}">
            </div>
        @endfor

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>


@endsection