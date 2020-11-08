@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>Add Category
                  <a class="btn btn-success float-right btn-sm" href="{{route('categories.view')}}"><i class="fa fa-list"></i>Category List</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               
                   <form method="post" action="{{route('categories.store')}}" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="name">Category Name</label>
                      <input type="text" name="name"  class="form-control" placeholder="Enter Your Category Name">
                    </div>

                   <div class="form-group col-md-6" style="padding-top: 30px;">
                      <input type="submit" value="Save" class="btn btn-primary">
                  </div>   
                </div>        
               </form>
                
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
$(function () {

  $('#myForm').validate({
    rules: {
      
      name: {
        required: true,
      }, 
      
    },
    messages: {

       name: {
        required: "Please enter a Unit name",
      },
      
      
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection