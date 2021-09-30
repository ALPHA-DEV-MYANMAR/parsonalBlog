<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        body{
            padding:3px;
        }

        .sidenv{
          width: 200px;
          background-color: black;
          height: 100%;
          position: fixed;
          padding: 50px;
        }

        .sidenv a{
          display: block;
          font-size: 20px;
          text-decoration: none;
          color:blanchedalmond;
          padding:6px;
          margin-top: 10px;
        }

        .main{
          margin-left: 200px;
          font-size: 18px;
          padding: 20px;
          margin-top: 60px;

        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{-- navigation --}}
                <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
                    <div class="container-fluid">
                      <a class="navbar-brand text-white" href="{{ url('/home') }}">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                              <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                              <button type="submit" class="dropdown-item" onclick="return confim('Are you sure')">Logout</button>       
                              
                              </form>
                              
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>

                  <div class="sidenv">
                    <a href="{{ url('/admin/users') }}">User</a>
                    <a href="{{ url('/admin/skills') }}">Skill</a>
                    <a href="{{ url('/admin/posts') }}">Post</a>
                  </div>

                  <div class="main">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  <h5>Users</h5>
                                  <table class="table table-bordered table-hover">
                                      <thead>
                                          <tr>

                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->status }}</td>
                                                <td>
                                                    <a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-success">Edit</a>
                                                
                                                    <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are You Sure,You Want to Delete')"
                                                    >
                                                    
                                                    <a href="{{ url('admin/users/'.$user->id.'/delete') }}" class="btn btn-danger">Delete</a>

                                                  </button>
                                                  
                                                  </td>
                                            </tr>
                                            @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>