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
    <form class="mt-5" action="{{route('student.update', $student->id)}}" method="POST">
        @csrf
        @method('PUT')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" name="first_name" value="{{$student->first_name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" name="last_name" value="{{$student->last_name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Contact No</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact No" name="contact_no" value="{{$student->contact_no}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="address" value="{{$student->address}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Birth Date</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Birth Date" name="dob" value="{{$student->dob}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
