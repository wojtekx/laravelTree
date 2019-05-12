@extends('base')

@section('main')
<div>
        <div class="flex">
            <a  href="{{ route('tree.create')}}" class="btn btn-primary link">New contact</a>
            <a href="{{  url('/') }}" class="btn btn-primary link">Strona główna</a>
        </div>   


        @foreach($tree as $item)
        <div class="item">
            <ul>
                <li style="list-style:none;margin: 7px;"> {{$item->name}}</li>
            </ul>
           <div class="flex">
                <a href="{{ route('tree.edit', $item->id)}}"><button  class="btn btn-second">Edit</button></a>
                <form action="{{ route('tree.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" >Delete</button>
                </form>
           </div>
        </div>
        @endforeach
</div>

@endsection
