@extends('layouts.app')

{{-- @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif --}}

@section('content')
    <a href="{{ route('note.index') }}">Back</a>
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <label>Title</label>
        {{-- <input type="text" name="title" class="@error('title') danger @enderror"> --}}
        <input type="text" name="title">
        <br />
        @error('title')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label>Description</label>
        <input type="text" name="description">
        <br />
        @error('description')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Create">
    </form>
@endsection
