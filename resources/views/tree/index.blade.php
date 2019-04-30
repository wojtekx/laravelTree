@extends('base')

@section('main')
<div>
        <div>
            <a style="float:right; margin: 19px 3px;" href="{{  url('/') }}" class="btn btn-primary">Strona główna</a>
        </div>
        <div>
            <a style="margin: 19px 3px;" href="{{ route('tree.create')}}" class="btn btn-primary">New contact</a>
        </div>   


        @foreach($tree as $item)
        <div class="item" style="display:flex;justify-content: space-between;width: 20%;margin: 10px auto;">
            <ul>
                <li style="list-style:none;margin: 7px;"> {{ __('nazwa')}}: {{$item->name}}</li>
            </ul>
            <form action="{{ route('tree.destroy', $item->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
        @endforeach
</div>

@endsection