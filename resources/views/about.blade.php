@extends('layout.master')
@section('title','about page')
@section('content')
<h1>Welcome to About page</h1>
@component('component.alert')
    something went wrong
@endcomponent
@include('partial.contact_form')




@endsection

