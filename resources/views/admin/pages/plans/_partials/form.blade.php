@include('admin.includes.alerts')

<div class="form-group">
    <label for="name">{{ __('Name:') }}</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Name') }}" value="{{ $plan->name ?? old('name') }}">
</div>
<div class="form-group">
    <label for="price">{{ __('Price:') }}</label>
    <input type="text" name="price" id="price" class="form-control" placeholder="{{ __('Price') }}" value="{{ $plan->price ?? old('price') }}">
</div>
<div class="form-group">
    <label for="description">{{ __('Description:') }}</label>
    <textarea name="description" id="description" cols="5" rows="3" class="form-control">{{ $plan->description ?? old('description') }}</textarea>

</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark"><i class="far fa-save"></i> {{ __('Save') }} </button>
</div>
