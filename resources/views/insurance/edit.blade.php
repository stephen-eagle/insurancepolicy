@extends('pages.layout')
@section('content')

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              @if(Session::has('success'))
              <p class="text-success">{{session('success')}}</p>
              @endif
              <h5 class="card-title">Update {{$data->title}}</h5>
                <a href="{{url('admin/insurance')}}" class="float-right btn btn-success btn-sm">View All</a>
           </h6>
              
              <!-- Table with stripped rows -->
              <form enctype="multipart/form-data" method="post" action="{{url('admin/insurance/'.$data->id)}}">
                @csrf
                @method('put')
              <table class="table datatable">
                <tr>
                  <tr>
                    <th>Title</th>
                    <td><input value="{{$data->title}}" name="title" type="text" class="form-control"/></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><textarea name="detail" class="form-control">{{$data->detail}}</textarea></td>
                </tr>
                                </table>
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
    @endsection