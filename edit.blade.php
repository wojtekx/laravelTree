@extends('base')

@section('main')

<div class="form">
    <h1>Edytuj wybrany element</h1>
    <a style="margin: 10px 0" href="{{  url('/tree') }}" class="btn btn-primary">Wróć</a>

    <form method="post" action="{{ route('tree.update', $item->id) }}">
            @method('PATCH')
            @csrf
        <div class="form-group">
            <label for="nazwa">{{ __('Nowa nazwa') }}:</label>
            <input type="text" class="form-control" name="nazwa"  value="{{ $item->name }}" required/>
        </div>
        <button class="btn btn-success">Zatwierdź</button>
    </form>

</div>

@endsection