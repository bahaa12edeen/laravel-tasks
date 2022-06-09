@extends('layout.master')

@section('content')
<div class="container" style="margin-top:100px">
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstName">
    </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lasttName">
    </div>
        <div class="mb-3">
    
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="confirmPassword">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">City</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="city">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="phonenUmber">
      </div>
     
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection