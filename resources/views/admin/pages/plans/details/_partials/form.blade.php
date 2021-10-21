@include('admin.includes.alerts')

<div class="form-group">
    <label for="name">{{ __('Name:') }}</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Name') }}" value="{{ $plan->name ?? old('name') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-dark"><i class="far fa-save"></i> {{ __('Save') }} </button>
</div>
