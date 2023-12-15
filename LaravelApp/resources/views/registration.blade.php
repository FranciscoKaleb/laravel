@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class = 'container'>
        <form  action = '{{route('registration.post')}}' method = "POST" class = 'ms-auto me-auto mt-auto' style = 'width: 500px;'>

            @csrf
            <div class="mb-3">
              <label  class="form-label">First Name</label>
              <input type="text" class="form-control" name="first_name" >
            </div>

            <div class="mb-3">
              <label  class="form-label">Last Name</label>
              <input type="text" class="form-control" name = 'last_name' >
            </div>

            <div class="mb-3">
              <label  class="form-label">Middle Name</label>
              <input type="text" class="form-control" name = 'middle_name' >
            </div>

            <div class="mb-3">
              <label  class="form-label">Birthday</label>
              <input type="date" class="form-control" name = 'birthday'>
            </div>

            <div class="mb-3">
              <label  class="form-label">Gender</label>
              <input type="text" class="form-control" name = 'gender' >
            </div>

            <div class="mb-3">
              <label  class="form-label">Address</label>
              <input type="text" class="form-control" name = 'address' >
            </div>

            <div class="mb-3">
              <label  class="form-label">Phone number</label>
              <input type="text" class="form-control" name = 'phone' >
            </div>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name = 'email' >
            </div>

            <div class="mb-3">
              <label  class="form-label">Username</label>
              <input type="text" class="form-control" name = 'username'>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name = 'password'>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <div class ='mb-3'>
              <a href= '/login'>login</a>
            </div>
            
          </form>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      <script>
        alert('invalid');
      </script>
    @endif
    
@endsection