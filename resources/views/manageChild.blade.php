
        @foreach($childs as $child)
        <ul>
            <li id="{{$child->id}}"  class="ready" >
            <a class="element"> {{ $child->name }}</a>
            <div class="options">
                    <a href="{{ route('tree.create', ['id' => $child->id])}}" class="btn btn-success">Dodaj</a>
                    <a href="{{ route('tree.edit',$child->id)}}" class="btn btn-primary">Edytuj</a>
                    <form action="{{ route('tree.destroy', $child->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Usuń</button>
                    </form>
            </div>
            @if(count($child->childs))
                @include('manageChild',['childs' => $child->childs])
             @endif
        </li>
    </ul>
        @endforeach
  

    