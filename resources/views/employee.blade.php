<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    Employee

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Company ID</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)    
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->employee_name }}</td>
                    <td>{{ $employee->gender }}</td>
                    <td>{{ $employee->company_id }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

    <form action="{{ route("create_employee") }}" method="post">
        @csrf
        <button type="submit">Submit</button>
    </form>
</body>
</html>