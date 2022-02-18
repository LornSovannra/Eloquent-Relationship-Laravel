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
              Role User
            </div>
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    @include('layouts.header')
                    <a href="/create-role-user" class="btn btn-primary">Grant New Role</a>
                </div>
        
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">User ID</th>
                      <th scope="col">Role ID</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($role_users as $role_user)    
                      <tr>
                        <td>{{ $role_user->user_id }}</td>
                        <td>{{ $role_user->role_id }}</td>
                        <td>
                            <form action="{{ route("delete_role", ['user_id' => $role_user->user_id, 'role_id' => $role_user->role_id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>