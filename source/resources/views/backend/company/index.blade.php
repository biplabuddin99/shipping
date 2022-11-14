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
                            <li class="breadcrumb-item active">Company</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Company</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

       
        
        <div class="card-box">
          <div>
            @if($data)
              <a href="{{route(Session::get('identity').'.company.edit')}}" class="btn btn-primary btn-rounded width-sm waves-effect">Edit</a>
            @else
            <a href="{{route(Session::get('identity').'.company.create')}}" class="btn btn-primary btn-rounded width-sm waves-effect">Add New</a>
            @endif
            
        </div>
        <div class="cs-with_shape cs-style1 cs-parallax">
          
          <div class="cs-height_100 cs-height_lg_60"></div>
          <div class="container">
            <div class="row">
              <div class="col-6">
                <div class="cs-vertical_middle">
                  <div class="cs-vertical_middle_in">
                    <div class="cs-text_box cs-style1">
                      <h3 class="cs-text_box_subtitle">{{$data?->name}}</h3>
                      <p >{{$data?->short_description}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="cs-right_full_width cs-space_85">
                  <div class="cs-image_box_2_wrap  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="cs-image_box cs-style2">
                      <div class="cs-image_box_shape">
                        <div class="cs-image_box_in cs-bg" style="background-image: url('{{asset($data?->feature_image)}}');"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div> <!-- end container -->
</div>
<!-- end wrapper -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


@endsection
        
@push('style')

<link href="{{asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" />



@endpush
@push('script')


 <!-- dropify js -->


 <!-- form-upload init -->
 

@endpush


