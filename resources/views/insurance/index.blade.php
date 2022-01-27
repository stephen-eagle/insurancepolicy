@extends('pages.layout')
@section('content')

<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              @if(Session::has('success'))
                                <p class="text-success">{{session('success')}}</p>
                                @endif;
              <h5 class="card-title"></h5>
                <a href="{{url('admin/insurance')}}" class="float-right btn btn-success btn-sm">View All</a>
           </h6>
              
              <!-- Table with stripped rows -->
            
              <table class="table datatable">
                <thead>
                  <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Price</th>
                      <th>GalleryImages</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Price</th>
                      <th>GalleryImages</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
              <tbody>
                  @if($data)
                      @foreach($data as $d)
                      <tr>
                          <td>{{$d->id}}</td>
                          <td>{{$d->title}}</td>
                          <td>{{$d->price}}</td>
                          <td>{{count($d->roomtypeimgs)}}</td>
                          <td>
                              <a href="{{url('admin/insurance/'.$d->id)}}" 
                              class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                              <a href="{{url('admin/insurance/'.$d->id).'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                              <a onclick="return confirm('are you sure to delete this data?')"href="{{url('admin/insurance/'.$d->id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                      </tr>
                      @endforeach
                  @endif
              </tbody>
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