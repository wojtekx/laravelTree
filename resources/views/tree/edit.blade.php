@extends('base') 
@section('main')
<div class="row">
    <div >
        <h1>Edytuj element</h1>

        <a style="margin: 19px 3px;" href="{{  url('/tree') }}" class="btn btn-primary">Wróć</a>
        <form method="post" action="{{ route('tree.update', $item->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="nazwa">{{ __('Nazwa') }}:</label>
                <input type="text" pattern="[A-Za-z0-9\s]+" class="form-control" name="nazwa" value='{{ $item->name }}' required />
            </div>
            <button type="submit" class="btn btn-primary">Zatwierdź</button>
        </form>
    </div>
</div>
@endsection