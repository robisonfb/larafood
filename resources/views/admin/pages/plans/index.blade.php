@extends('adminlte::page')

@section('title', __('Plans'))

@section('content_header')
    <h1>{{ __('Plans') }}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}">{{ __('Plans') }}</a></li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
                        @csrf
                        <input type="text" class="form-control" name="filter" placeholder="{{ __('Search') }}" value="{{ $filters['filter'] ?? '' }}">
                        <button type="submit" class="btn btn-dark ml-2"><i class="fas fa-search-plus"></i> {{ __('Search') }}</button>
                        @if (isset($filters))
                            <a href="{{ route('plans.index') }}" class="btn btn-dark ml-2"><i class="fas fa-broom"></i> {{ __('Clean Filters') }}</a>
                        @endif
                    </form>
                </div>
                <div class="col-6">
                    <a href="{{ route('plans.create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> {{ __('New') }}</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Price') }}</th>
                        <th width="300">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($plans as $plan)
                    <tr>
                        <td>{{ $plan->name }}</td>
                        <td>R$ {{ number_format($plan->price,2 ,',' , '.' ) }}</td>
                        <td>
                            <a href="{{ route('details.plan.index',$plan->url) }}" class="btn btn-primary"><i class="far fa-eye"></i> {{ __('Details') }}</a>
                            <a href="{{ route('plans.show',$plan->url) }}" class="btn btn-warning"><i class="far fa-eye"></i> {{ __('View') }}</a>
                            <a href="{{ route('plans.edit',$plan->url) }}" class="btn btn-success"><i class="far fa-edit"></i> {{ __('Edit') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">

            @if (isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
        </div>
    </div>
@stop
