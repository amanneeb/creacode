@foreach($filAriane as $lien)
    @if(isset($lien["lien"]))
        <a href="{{$lien["lien"]}}">{{$lien["titre"]}}</a>

    @else
        {{$lien["titre"]}}

    @endif
    <span> | </span>

@endforeach