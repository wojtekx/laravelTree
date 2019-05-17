@extends('base')

@section('main')
<div id="app">
        <div>
            <a style="margin: 19px 3px;" href="{{ route('tree.create')}}" class="btn btn-primary">Nowy Element</a>
        </div>   

        
                @foreach($categories as $category)
                <ul class="active">
                    <li id="{{$category->id}}" class="ready" >
                       <a class="element"> {{ $category->name }}</a>
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
                </ul>
                @endforeach
        
</div>

@endsection


@push('custom-scripts')
    <script type="text/javascript">
          
            $("ul li a.element").on("click", function () {
                if ($(this).parent().hasClass("ready")) {
                    if ($(this).parent().find("ul").hasClass("active")) {
                        $(this).parent().find("ul").removeClass("active");
                    } else $(this).parent().find("ul").addClass("active");
                }
            });
         

            

    </script>
@endpush