@extends('layouts.AppLayout')

@section('content')

<h1>Our list of products</h1>
@foreach ($products as $product)
<li> {{ $product['name'] }} - {{ $product['price']}}</li>
@endforeach
@endsection