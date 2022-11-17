@extends('layout.backend.back')
@section('content')

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{Session::get('identity')}}</a></li>
                            <li class="breadcrumb-item active">Header</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Header</h4>
                </div>
            </div>
        </div>    
        <!-- end page title --> 

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    
                    <h4 class="mt-0 header-title mb-3">Header Option</h4>
                    @if(Session::has('response'))
                      <div class="alert alert-{{Session::get('response')['class']}}">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          {{Session::get('response')['message']}}
                      </div>
				    @endif
                    <div class="table-responsive">
                        <table class="table mb-0">
                        <a href="{{route(Session::get('identity').'.service.create')}}" class="btn btn-primary btn-sm btn-rounded width-xs waves-effect">Create</a>
                            <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>logo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              
                                @forelse($services as $s)
                                
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$s->title }}</td>
                                        <td><img src="{{asset($s->logo)}}" height="40" width="40" alt=""></td>
                                       
                                        <td>
                                            
                                            <a href="{{route(Session::get('identity').'.service.edit',$s->id)}}" class="btn btn-primary btn-sm btn-rounded width-xs waves-effect">Edit</a>
                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <th colspan="3" class="text-center">No Pruduct Found</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                </div>
        
            </div>
        </div>
        <!-- end row -->
        

        
    </div> <!-- end container -->
</div>
<!-- end wrapper -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


@endsection
        
@push('style')
 <!-- dropify -->
 
@endpush
@push('script')


 <!-- dropify js -->


 <!-- form-upload init -->
 

@endpush


