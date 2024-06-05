<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIMO EMPOYEE CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/">ZIMO GROUP</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">All Employees</a>
        </li>   
    </ul>
</nav>
<div class="container-fluid">
    <h2>Edit Student</h2>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-sm-8'>
                <div class='card mt-3 p-3'>
                    <form method='POST' action="/employees/{{ $employee->id }}/update" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class='form-group'>
                            <label>Name</label>
                            <input type='text' name='name' class='form-control' value="{{ $employee->name }}">
                            @if($errors->has('name'))
          <span> {{$errors-> first('name')}}</span>
          @endif
                        </div>
                        <div class='form-group'>
                <label>Email</label>
                <input type='text' name='email' class='form-control' value="{{$employee->email  }}">
                @if($errors->has('email'))
                    <span class="text-danger"> {{$errors->first('email')}}</span>
                @endif
            </div>            
                        <div class='form-group'>
                            <label>Contact No</label>
                            <input type='number' name='phone_no' class='form-control' value="{{ $employee->phone }}">
                            @if($errors->has('phone_no'))
                            <span> {{$errors-> first('phone_no')}}</span>
                             @endif
                        </div>
                        <div class='form-group'>
                            <label>Employee Code</label>
                            <input type='text' name='employee_code' class='form-control' value="{{ $employee->employee_code }}">
                            @if($errors->has('employee_code'))
                            <span> {{$errors-> first('employee_code')}}</span>
                             @endif
                        </div>
                        
                        <div class='form-group'>
                            <label>Profile Image</label>
                            <input type='file' name='image' class='form-control' value="{{ $employee->Image }}">   
                        </div>
                        <button type='submit' class='btn btn-dark'>Update</button> 
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
</body>
</html>
