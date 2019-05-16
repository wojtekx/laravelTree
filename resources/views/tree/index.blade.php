@extends('base')

@section('main')
<div id="app">
        <div>
            <a style="margin: 19px 3px;" href="{{ route('tree.create')}}" class="btn btn-primary">Nowy Element</a>
        </div>   

        <ul id="tree1">
                @foreach($categories as $category)
                    <li>
                        {{ $category->name }}
                        <div class="options">
                                <a href="{{ route('tree.create', ['id' => $category->id])}}" class="btn btn-success">Dodaj</a>
                                <a href="{{ route('tree.edit',$category->id)}}" class="btn btn-primary">Edytuj</a>
                                <form action="{{ route('tree.destroy', $category->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Usuń</button>
                                </form>
                        </div>

                        @if(count($category->childs))

                            @include('manageChild',['childs' => $category->childs])

                        @endif

                    </li>
                @endforeach
            </ul>
</div>

@endsection
