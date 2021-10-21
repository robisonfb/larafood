@extends('adminlte::page')

@section('title', __('New plans'))

@section('content_header')
    <h1>{{ __('New plans') }}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">{{ __('Plans') }}</a></li>
        <li class="breadcrumb-item active">{{ __('New plans') }}</li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('plans.create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> {{ __('New') }}</a>
        </div>
        <div class="card-body">
            <form action="{{ route('plans.store') }}" class="form" method="POST">
                @csrf
                @include('admin.pages.plans._partials.form')
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@stop
