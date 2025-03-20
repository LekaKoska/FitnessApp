@php use Illuminate\Support\Facades\Session; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section("tittle")
            Home
        @endsection</title>
</head>
<body>
@extends("layout")

@section("section")
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
@endsection


</body>
</html>
