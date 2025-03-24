@php use App\Models\PackageModel;use Illuminate\Support\Facades\Session; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section("tittle")
            Packages
        @endsection</title>
</head>
<body>
@extends("layout")

@section("section")
    @if(Session::get("error"))
        <p class="text-danger">{{Session::has("error")}}</p>

    @endif
    @foreach(PackageModel::PACK as $package)
        <p>This is {{$package}} package</p>
        <p>If u want to see details about this package click <a
                href="{{route("package.permalink", ["package" => $package])}}">Here</a></p>
    @endforeach
@endsection

</body>
</html>
