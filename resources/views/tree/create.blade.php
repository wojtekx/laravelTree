@extends('base')

@section('main')

<div class="form">
        @if(isset($select) && !empty($select))
        <h1>Dodaj nowe Dziecko</h1>
        @else
        <h1>Dodaj nowy Element</h1>
        @endif
   
    <a style="margin: 19px 3px;" href="{{  url('/') }}" class="btn btn-primary">Wróć</a>
    <form method="post" action="{{ route('tree.store') }}">
            @csrf
        <div class="form-group">
            <label for="nazwa">{{ __('Nazwa') }}:</label>
            @if(isset($select) && !empty($select))
            <input type="hidden" name="parent_id" value="{{$select}}">
            @else
            <select name="parent_id">
                    <option value="0">Element nadrzędny</option>
                @foreach($names as $key => $name )
                    <option value="{{$key}}">{{$name}}</option>
                @endforeach
            </select>
            @endif
            <input type="text" pattern="[A-Za-z0-9\s]+" class="form-control" name="nazwa" required />
        </div>
        <button class="btn btn-success">Dodaj</button>
    </form>

</div>

@endsection