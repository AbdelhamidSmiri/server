@extends('layout.master')

@section('title','Coco page')


@section('content')
    <div class="container">
        <h2>Hello from coco page</h2>
    </div>
@endsection

@section('sidbar')
    @parent
    hello from sid bar coco
@endsection