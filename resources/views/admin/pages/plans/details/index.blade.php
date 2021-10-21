@extends('adminlte::page')

@section('title', __('Details'))

@section('content_header')
    <h1>{{ __('Plan details') }}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">{{ __('Plans') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item active">{{ __('Details') }}</li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-6">
                    <a href="{{ route('details.plan.create',$plan->url) }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> {{ __('New plan details') }}</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>{{ __('Name') }}</th>
                    <th width="200">{{ __('Actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $detail)
                    <tr>
                        <td>{{ $detail->name }}</td>
                        <td>
                            <a href="{{ route('plans.show',$plan->url) }}" class="btn btn-warning"><i class="far fa-eye"></i> {{ __('View') }}</a>
                            <a href="{{ route('plans.edit',$plan->url) }}" class="btn btn-success"><i class="far fa-edit"></i> {{ __('Edit') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {!! $details->links() !!}
        </div>
    </div>
@stop
