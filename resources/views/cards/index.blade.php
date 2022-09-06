@extends('layouts.app')

@section('title',)
@section('content')
<div>

    @foreach (cards as item)
        $item->tile;

    @endforeach
</div>

@endsection
