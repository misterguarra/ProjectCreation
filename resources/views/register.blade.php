@extends('layout')

@section('title', 'Register')

@section('content')
<style>
  body{
    background-color: lightblue;
    
  }
  h3{
    text-align: center;
    font-size: 50px;
    font-family: verdana;
  }

  .card-body{
    padding: 15px;
    font-family: verdana;
  }

  .text{
    font-family: verdana;
  }

  </style>
<h3 class="mt-5 p-5">R E G I S T R A T I O N</h3>

<div class="container">

<div class="card">
  <div class="card-body">
  <form>
<div class="row">
<div class="col">
<div class="mb-3">
    <label for="firstname">First Name</label>
    <input type="email" class="form-control form-control-sm" name="firsname">
  </div>
</div>
  <div class="col">
  <div class="mb-3">
    <label for="middlename" class="form-label">Middle Name</label>
    <input type="text" class="form-control form-control-sm" name="middlename">
  </div>
  </div>
  <div class="col">
  <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control form-control-sm" name="lastname">
  </div>
  </div>
</div>
<div class="row">
<div class="col">
<div class="mb-3">
    <label for="contact" class="form-label">Contact No.</label>
    <input type="text" class="form-control form-control-sm" name="contact">
  </div>
</div>
  <div class="col">
  <div class="mb-5">
    <label for="area" class="form-label">Area</label>
    <input type="number" class="form-control form-control-sm" name="area">
  </div>
  </div>
</div>
<div class="mb-3">
<select class="form-select form-select-sm" name="crops" aria-label="Default select example">
  <option selected>Select</option>
  <option value="sugarcane">Sugarcane</option>
  <option value="corn">Corn</option>
  <option value="rice">Rice</option>
</select>
</div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
  </div>
</div>
</div>


@endsection


