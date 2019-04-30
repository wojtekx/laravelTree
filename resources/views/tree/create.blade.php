@extends('base')

@section('main')

<div class="form">
    <h1>Add new record</h1>
    <form method="post" action="{{ route('tree.store') }}">
            @csrf
        <div class="form-group">
            <label for="nazwa">{{ __('Nazwa') }}:</label>
            <input type="text" class="form-control" name="nazwa" required />
            <select name="parent_id">
                    <option value="0">nadrzędny</option>
                @foreach($names as $key => $name )
                    <option value="{{$key}}">{{$name}}</option>
                @endforeach
            </select>
        </div>
        <button>Add</button>
    </form>

</div>

@endsection