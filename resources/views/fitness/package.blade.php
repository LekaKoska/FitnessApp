@php use App\Models\PackageModel; @endphp
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
    @foreach(PackageModel::PACK as $package)
        <p>This is {{$package}} package</p>
        <p>If u want to see details about this package click <a href="{{route("package.permalink", ["package" => $package])}}">Here</a></p>
    @endforeach
@endsection

</body>
</html>
