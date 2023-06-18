@extends('layout.app')

@section('title')
Employee Lsit
@endsection

@section('head')
@endsection

@section('content')
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
                  <input type="hidden" id="delete_emp_id" name="employee_id" value=""/>
                  <button type="submit" name="alert_msg_delete" class="btn btn-danger mt-3 me-2">Delete</button>
                  <button type="reset" name="alert_msg_cancel" class="btn btn-primary mt-3 ms-3">Cancel</button>
                </div>
            </form>
    </div>
</div>   
@endsection
@section('footer')
@endsection