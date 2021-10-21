@extends('adminlte::page')

@section('title', __('Plans details'))

@section('content_header')
    <h1>{{ __('Plans details') }}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">{{ __('Plans') }}</a></li>
        <li class="breadcrumb-item active">{{ __('Plans details') }}</li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('plans.create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> {{ __('New') }}</a>
        </div>
        <div class="card-body">
            <ul>
                <li><strong>{{ __('Name:') }}</strong> {{ $plan->name }}</li>
                <li><strong>{{ __('Url:') }}</strong> {{ $plan->url }}</li>
                <li><strong>{{ __('Price:') }}</strong> R$ {{ number_format($plan->price,2 ,',' , '.' ) }}</li>
                <li><strong>{{ __('Description:') }}</strong> {{ $plan->description }}</li>
            </ul>
        </div>
        <div class="card-footer">

            <form action="{{ route('plans.destroy', $plan->url) }}" method="POST">
                @method('DELETE')
                @csrf
                <a href="{{ route('plans.edit',$plan->url) }}" class="btn btn-success"><i class="far fa-edit"></i> {{ __('Edit') }}</a>
                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> {{ __('Delete Plans') }}</button>
            </form>

        </div>
    </div>
@stop
