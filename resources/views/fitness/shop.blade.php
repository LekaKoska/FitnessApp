@php use Illuminate\Support\Facades\Session; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
@extends("layout")

@section("section")
    @if(Session::has("error"))
        <p>{{Session::get("error")}}</p>
    @endif
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h5 class="card-title">{{$package->package}}</h5>
            <p class="card-text">Price is {{$package->description}} </p>
            <form action="{{route("package.buy", ['package' => $package->id])}}" method="POST">
                @csrf
                <button>Buy</button>
            </form>

        </div>
    </div>

@endsection
</body>
</html>
