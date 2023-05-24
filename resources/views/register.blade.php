@extends('layout')

@section('title', 'Home')

@section('content')

<h3 class="mt-5 p-5">Registration Farmers</h3>

<div class="container">

<<<<<<< HEAD
  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Additional Information</label>
=======
<div class="card">
  <div class="card-body">
  <form>
<div class="row">
<div class="col">
<div class="mb-3">
    <label for="firstname">First name</label>
    <input type="email" class="form-control form-control-sm" name="firsname">
>>>>>>> 263d0d6bbb14d104bee02c4f2aeb79957947c67d
  </div>
</div>
  <div class="col">
  <div class="mb-3">
    <label for="middlename" class="form-label">Middle name</label>
    <input type="text" class="form-control form-control-sm" name="middlename">
  </div>
  </div>
  <div class="col">
  <div class="mb-3">
    <label for="lastname" class="form-label">Last name</label>
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
    <label for="area" class="form-label">Are</label>
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


