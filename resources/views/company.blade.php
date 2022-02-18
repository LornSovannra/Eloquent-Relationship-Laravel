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
    Comapny

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Company Name</th>
            <th scope="col">Location</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)    
                <tr>
                <th scope="row">{{ $company->id }}</th>
                <td>{{ $company->comany_name }}</td>
                <td>{{ $company->company_location }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

    <form action="{{ route("create_company") }}" method="post">
        @csrf
        <button type="submit">Submit</button>
    </form>
</body>
</html>