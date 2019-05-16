<ul>
        @foreach($childs as $child)
        <li>
            {{ $child->name }}
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
        @endforeach
    </ul>