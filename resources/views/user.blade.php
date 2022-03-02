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
    <div class="container mt-3">
      <div class="card">
        <div class="card-header">
          User
        </div>
        <div class="card-body">
          @include('layouts.header')

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nº</th>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)    
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
    </div>
</body>
</html>