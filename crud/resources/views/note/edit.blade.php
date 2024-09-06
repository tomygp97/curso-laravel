@extends('layout.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
<form method="POST" action="{{ route('note.update', $note->id) }}">
    @method('PUT')
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $note->title }}" /> <br>
    @error('title')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <label for="description">Description</label>
    <input type="text" name="description" value="{{ $note->description }}"/> <br>
    @error('title')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <input type="submit" value="Edit" />
</form>
@endsection