@extends('pages.layout')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1 class="float-right">
      <a href="{{url('admin/pdf')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a></h1>
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                @if($errors->any())
                              @foreach($errors->all() as $error)
                              <p class="text-danger">{{$error}}</p>
                              @endforeach
                              @endif
  
                                  @if(Session::has('success'))
                                  <p class="text-success">{{session('success')}}</p>
                                  @endif
                <h5 class="card-title">New Insurance Product</h5>
                  <a href="{{url('admin/insurance')}}" class="float-right btn btn-success btn-sm">View All</a>
             </h6>
                
                <!-- Table with stripped rows -->
                <form enctype="multipart/form-data" method="post" action="{{url('admin/insurance')}}">
                  @csrf
                  <table class="table datatable">
                    <tr>
                      <th>Insurance Policy Type</th>
                                            <td><input name="title" type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td><textarea name="detail" class="form-control"></textarea></td>
                                        </tr>
                                        <tr>
                                        <td colspan="2">
                                            <input type="submit" class="btn btn-primary"/>
                                        </td>
                                        </tr>
                  </table>
                </form>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

  </main><!-- End #main -->
  @endsection