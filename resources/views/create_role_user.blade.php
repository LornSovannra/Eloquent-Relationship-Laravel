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
          Create Role User
        </div>
        <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    @include('layouts.header')
                    <a href="/role-user" class="btn btn-info">Back</a>
                </div>
        
                <form action="{{ route("save_role") }}" method="post">
                    @csrf
                    <div class="col-auto mt-3">
                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                        <select class="form-select" id="autoSizingSelect" name="user_id">
                          <option selected>Select User ID</option>
                          @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                          @endforeach
                        </select>
                    </div>
        
                    <div class="col-auto mt-3">
                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                        <select class="form-select" id="autoSizingSelect" name="role_id">
                          <option selected>Select Role ID</option>
                          @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                          @endforeach
                        </select>
                    </div>
        
                    <button  class="btn btn-primary mt-3" type="submit">Grant Role</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>