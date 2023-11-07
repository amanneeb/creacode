@foreach($filAriane as $lien)
    @if(isset($lien["lien"]))
        <a href="{{$lien["lien"]}}">{{$lien["titre"]}}</a>

    @else
        <span>{{$lien["titre"]}}</span>

    @endif
    <span> | </span>

@endforeach