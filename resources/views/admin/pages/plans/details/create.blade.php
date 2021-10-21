@extends('adminlte::page')

@section('title', __('New detail to the plan'))

@section('content_header')
    <h1>{{ __('New detail to the plan') }}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">{{ __('Plans') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index',$plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item active">{{ __('Details') }}</li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{ route('details.plan.store', $plan->url) }}" class="form" method="POST">
                @csrf
                @method('PUT')
                @include('admin.pages.plans.details._partials.form')
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@stop
