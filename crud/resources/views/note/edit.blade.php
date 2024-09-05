@extends('layout.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
<form method="POST" action="{{ route('note.update', $note->id) }}">
    @method('PUT')
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $note->title }}" />

    <label for="description">Description</label>
    <input type="text" name="description" value="{{ $note->description }}"/>

    <input type="submit" value="Edit" />
</form>
@endsection