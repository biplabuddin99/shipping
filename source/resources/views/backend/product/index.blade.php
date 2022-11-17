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
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Product</h4>
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
                            <thead class="thead-dark">
                            <tr>
                                <th>#SL</th>
                                <th>Title</th>
                                <th>Logo</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $product->title }}</td>
                                    <td><img src="{{asset($product->logo)}}" height="140" width="187" alt=""></td>
                                    <td>{{ $product->details }}</td>
                                    <td>
                                         {{-- <a href="{{route(Session::get('identity').'.product.edit',$product->id)}}" class="btn btn-primary btn-sm btn-rounded width-xs waves-effect">Edit</a> --}}
                                    </td>
                                </tr>

                                @empty
                                    <td colspan="5" class="text-center">There is no data</td>
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
