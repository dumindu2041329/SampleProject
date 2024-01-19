<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="container">
    <a href="{{ route('student.create') }}" type="button" class="btn btn-primary mt-5">Create</a>
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Contact No</th>
                <th scope="col">Address</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->contact_no}}</td>
                    <th>{{$student->address}}</th>
                    <th>{{$student->dob}}</th>
                    <th><a class="btn btn-primary" href="{{route('student.edit', $student->id)}}">Edit</a></th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
