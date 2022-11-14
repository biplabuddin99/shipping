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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="text-center">
                        <h2 class="font-weight-normal text-primary" data-plugin="counterup">
                            
                        </h2>
                        <h5>Total Customer</h5>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="text-center">
                        <h2 class="font-weight-normal text-primary" data-plugin="counterup">
                            
                        </h2>
                        <h5>Total Product</h5>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="text-center">
                        <h2 class="font-weight-normal text-primary" data-plugin="counterup">
                            
                        </h2>
                        <h5>Total Order</h5>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="text-center">
                        <h2 class="font-weight-normal text-primary" data-plugin="counterup">
                            
                        </h2>
                        <h5>Pending Order</h5>
                    </div>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->
    
    </div> <!-- end container -->
</div><!-- end wrapper -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


@endsection
        
@push('style')
   <!--Morris Chart-->
   <link rel="stylesheet" href="{{asset('asset/libs/morris-js/morris.css')}}" />
@endpush
@push('script')

<!-- knob plugin -->
<script src="{{asset('asset/libs/jquery-knob/jquery.knob.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('asset/libs/morris-js/morris.min.js')}}"></script>
<script src="{{asset('asset/libs/raphael/raphael.min.js')}}"></script>

<!-- Dashboard init js-->
<script src="{{asset('asset/js/pages/dashboard.init.js')}}"></script>



@endpush

     