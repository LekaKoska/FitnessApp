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
    <form action="{{route("admin.shop")}}" method="POST">
        {{csrf_field()}}
        <input type="text" name="name">
        <textarea name="description"> </textarea>
        <input type="text" name="price">
        <input type="text" name="amount">
        <button>Add</button>
    </form>

@endsection

</body>
</html>
