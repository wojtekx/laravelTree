@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edytuj element</h1>

        <a style="margin: 19px 3px;" href="{{  url('/tree') }}" class="btn btn-primary">Wróć</a>
        <form method="post" action="{{ route('tree.update', $item->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="nazwa">{{ __('Nazwa') }}:</label>
                <input type="text" class="form-control" name="nazwa" value='{{ $item->name }}' required />
            </div>
            <button type="submit" class="btn btn-primary">Zatwierdź</button>
        </form>
    </div>
</div>
@endsection