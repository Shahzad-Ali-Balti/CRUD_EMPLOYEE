<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIMO EMPLOYEE CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="/">ZIMO GROUP</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">All Employees</a>
        </li>   
    </ul>
</nav>

@if ($message = Session::get('success'))
<div class="alert alert-success dismissible">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container-fluid">
    <div class="text-right">    
        <a href="/employees/create" class="btn btn-dark mt-2">New Employee</a>
    </div>
    <h2>Employees Details</h2>

    <div>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Employee Code</th>
                    <th>Profile Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $key => $employee)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><a href='/employees/{{ $employee->id }}/show' class='text-light' >{{ $employee->name }}</a></td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->employee_code }}</td>
                        <td>
                        <img src="storage/employees/{{$employee->profile_image}}" class='rounded-circle' width='50' height='50'>
                        </td>
                        <td>
                            <a href="/employees/{{ $employee->id }}/edit" class="btn btn-light">Edit</a>
                            <form action="/employees/{{ $employee->id }}/delete" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button  href= "/employees/{{ $employee->id }}/delete" type="submit" class="btn btn-danger">
                              Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>