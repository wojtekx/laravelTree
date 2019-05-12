@extends('base')

@section('main')

<div class="form">
    <h1>Dodaj nowy element</h1>
    <a style="margin: 10px 0" href="{{  url('/tree') }}" class="btn btn-primary">Wróć</a>
    <form method="post" action="{{ route('tree.store') }}">
            @csrf
        <div class="form-group">
            <label for="nazwa">{{ __('Nazwa') }}:</label>
            <input type="text" class="form-control" name="nazwa" required />
            <select class="my-4" name="parent_id">
                    <option value="0">nadrzędny</option>
                @foreach($names as $key => $name )
                    <option value="{{$key}}">{{$name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Add</button>
    </form>

</div>

@endsection