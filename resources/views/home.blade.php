@extends('layout.master')
@section('title','home page')
@section('content')
<h1>Welcome to Home page</h1>
@endsection

@section('extra')
    <p>hello</p>

    @parent
@endsection

@section('style')
    <style>
        body{
            background: #ddd;
        }
    </style>
@endsection
