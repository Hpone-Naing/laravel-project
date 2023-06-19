@extends('layout.app')

@section('title')
Employee Lsit
@endsection

@section('head')
@endsection

@section('content')
<<<<<<< HEAD

@if ($errors->any())
  <div id="myDiv" class="save-form-reload"></div>
@endif


@if(session('success'))
<div id="hideMeAfter5Seconds" class="alert alert-success hide-message">
    {{ session('success') }}
=======
<div class="row list-container">  
  <div class="col-sm-12">
    <div id="parent">
    <h1 class="display-8">Employee List</h1>
    <div>
      <a style="margin: 19px;" class="btn btn-primary" id="save">New+</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Job Title</th>
          <th>Gender</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td id="emp_id" name="employee_id">1</td>
            <td>Hpone Naing Tun</td>
            <td>hponenaingtun@gmail.com</td>
            <td>Lisa's husbant</td>
            <td>male</td>
            <td>lisa.jpg</td>
            <td>
              <a href="/show-detail-pages"><i class="fa-regular fa-eye fa-lg ms-2" data-toggle="tooltip" data-placement="top" title="Detail" style="color:#244a26"></i></a>
              <a id="edit-btn"><i class="fas fa-edit fa-lg ms-2" data-toggle="tooltip" data-placement="top" title="Edit" style="color:blue"></i></a>
              <a name="show-alert-msg"><i class="fa fa-trash fa-lg ms-2" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Delete" style="color:red"></i></a>
            </td>
        </tr>
    </tbody>
  </table>
    </div>
  @include('employee.create')
</div>
>>>>>>> 41c195afe7317f32f55edbb02010400f972e13a8
</div>
@endif
<div class="row list-container">
    <div class="col-sm-12">
        <div id="parent">
          <h1 class="display-8">Employee List</h1>
          <div class="inline-container">
            <form  style="display:inline">
            <div class="box">
                <a href="/posts/download-excel/" class="btn btn-outline-primary" style="border-radius: 50px;">PDF  <i class="fa fa-download"></i></a>
              </div>

            <div class="box">
                <a href="/posts/download-excel/" class="btn btn-outline-primary" style="border-radius: 50px;">Excel  <i class="fa fa-download"></i></a>
              </div>

              <div class="box">
                <select class="form-select search-select-box" aria-label="Default select example">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="box">
                <select class="form-select search-select-box" aria-label="Default select example">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="box">
                <input type="text" class="form-control form-input" name="search" placeholder="Search ID, All" onkeyup="searchData(event)" style="width:300px">
              </div>
              <div class="box">
                <i class="fa fa-search search-icon" aria-hidden="true"></i>
              </div>
          </form>
            <div class="box">
              <a style="margin: 19px;" class="btn btn-primary" id="save">New+</a>
            </div>
          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Job Title</td>
                <td>Gender</td>
                <td>Image</td>
                <td>Actions</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td id="emp_id" name="employee_id">1</td>
                <td>Hpone Naing Tun</td>
                <td>hponenaingtun@gmail.com</td>
                <td>Lisa's husbant</td>
                <td>male</td>
                <td>lisa.jpg</td>
                <td>
                  <a href="/show-detail-pages"><i class="fa-regular fa-eye fa-lg ms-2" data-toggle="tooltip" data-placement="top" title="Detail" style="color:#244a26"></i></a>
                  <a href="/show-edit-pages/"><i class="fas fa-edit fa-lg ms-2" data-toggle="tooltip" data-placement="top" title="Edit" style="color:blue"></i></a>
                  <a name="show-alert-msg"><i class="fa fa-trash fa-lg ms-2" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Delete" style="color:red"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        @include('employee.create')
      </div>
  </div>

<div class="alert-box-container">
      <div class="alart-box-card">
        <div class="alert-msg-name mt-4">Are you sure want to delete?</div>
        <form method="delete" action="#">
          @csrf
          @method('DELETE')
          <div class="d-flex justify-content-center align-items-center">
            <input type="hidden" id="delete_emp_id" name="employee_id" value="" />
            <button type="submit" name="alert_msg_delete" class="btn btn-danger mt-3 me-2">Delete</button>
            <button type="reset" name="alert_msg_cancel" class="btn btn-primary mt-3 ms-3">Cancel</button>
          </div>
        </form>
    </div>
</div>
@endsection
@section('footer')
<script>
  if (document.getElementById('myDiv').classList.contains('save-form-reload')) {
    saveFormReload();
  }
</script>
@endsection