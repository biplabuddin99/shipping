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
                            <li class="breadcrumb-item active">Home Section_1</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Home Section_1</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

       
        
        <div class="card-box">
          <div>
            <a href="{{route(Session::get('identity').'.member.edit',1)}}" class="btn btn-primary btn-rounded width-sm waves-effect">Edit</a>
        </div>
        <div class="cs-with_shape cs-style1 cs-parallax">
          
          <div class="cs-height_100 cs-height_lg_60"></div>
          <div class="container">
            <div class="row">
              <div class="col-6">
                <div class="cs-vertical_middle">
                  <div class="cs-vertical_middle_in">
                    <div class="cs-text_box cs-style1">
                      <h3 class="cs-text_box_subtitle">{{$data->title}}</h3>
                      <div class="cs-text_box_text">{!!$data->link!!}</div>
                      <div class="cs-text_box_brand">
                        <h4 class="cs-text_box_brand_title">logo</h4>
                        <div class="cs-text_box_brands">
                          @if ($data->homesection1image)
                            @foreach ($data->homesection1image as $item)
                                <img src="{{asset($item->logo)}}" alt="">
                            @endforeach
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="cs-right_full_width cs-space_85">
                  <div class="cs-image_box_2_wrap  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="cs-image_box cs-style2">
                      <div class="cs-image_box_shape">
                        <div class="cs-image_box_in cs-bg" style="background-image: url('{{asset($data->logo)}}');"></div>
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


