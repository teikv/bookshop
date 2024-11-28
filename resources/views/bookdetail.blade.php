@extends('layout')

@section('title', $book->title)

@section('content')
<div class="container">
    <h1>{{ $book->title }}</h1>
    <img src="/images/{{ $book->image }}" alt="{{ $book->title }}" class="img-fluid">
    <p><strong>Price:</strong> {{ number_format($book->price) }} VND</p>
    <p><strong>Country:</strong> {{ $book->country }}</p>
    <p><strong>Description:</strong> {{ $book->description }}</p>
</div>
@endsection
