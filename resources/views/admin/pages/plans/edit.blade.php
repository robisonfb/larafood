@extends('adminlte::page')

@section('title', __('Edit plans'))

@section('content_header')
    <h1>{{ __('Edit plans') }}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">{{ __('Plans') }}</a></li>
        <li class="breadcrumb-item active">{{ __('Edit plans') }}</li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('plans.create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> {{ __('New') }}</a>
        </div>
        <div class="card-body">
            <form action="{{ route('plans.update', $plan->url) }}" class="form" method="POST">
                @csrf
                @method('PUT')
                @include('admin.pages.plans._partials.form')
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@stop
