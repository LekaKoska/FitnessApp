<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section("tittle")
               Users
        @endsection</title>
</head>
<body>
@extends("layout")

@section("section")
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Member</th>
            <th scope="col">Name</th>
            <th scope="col">Package</th>
            <th scope="col">Details</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $singeUser)
            <tr>
                <th scope="row">{{$singeUser->id}}</th>
                <td>{{$singeUser->name}}</td>
                <td>Otto</td>
                <td>
                    <a href="" class="btn btn-primary">More</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
</body>
</html>
