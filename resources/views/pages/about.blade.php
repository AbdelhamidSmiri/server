@extends('layout.master')

@section('title','About page')

@section('content')
    <h3>Hello from about page</h3>
@endsection

@section('sidbar')
    @parent
    <li>different link</li>
</ul>
@endsection
