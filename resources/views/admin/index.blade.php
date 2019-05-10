@extends('layouts.app')
@section('menu-left')
    @include('layouts.admin-menu')
@endsection
@section('content')
    <h1>QL User</h1>
    <div class="row">
        <search-component></search-component>
        <pageinate-component></pageinate-component>
    </div>
    <table-component></table-component>
@endsection
