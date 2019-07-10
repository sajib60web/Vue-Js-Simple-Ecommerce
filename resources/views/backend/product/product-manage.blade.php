@extends('backend.master')

@section('title', 'Product')

@section('main-content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Data Brand</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">{{ Auth::user()->name }} </a></li>
            <li class="breadcrumb-item active" aria-current="page"> Product</li>
        </ol>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="col-sm-3">
        <div class="btn-group float-sm-right">
            <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                <span class="caret"></span>
            </button>
            <div class="dropdown-menu">
                <a href="javaScript:void();" class="dropdown-item">Action</a>
                <a href="javaScript:void();" class="dropdown-item">Another action</a>
                <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                <div class="dropdown-divider"></div>
                <a href="javaScript:void();" class="dropdown-item">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            	<i class="fa fa-table"></i> All Product
                @include('backend.product.include.insert-product')
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php($count = 1)
                        @foreach($products as $product)
                        <tbody>
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>
                                    @foreach($product_images as $key => $product_image)
                                        @if($product->id == $product_image->product_id)
                                                <img style="height: 60px; width: 60px"  src="{{asset($product_image->product_image)}}" >
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                	@if($product->product_status == 1)
										<span class="badge badge-success shadow-success m-1">Active</span>
                                	@else
										<span class="badge badge-danger shadow-danger m-1">Pending</span>
                                	@endif
                                </td>
                                <td>
                                	@if($product->product_status == 0)
										<a href="{{ url('/publish-product/'.$product->id)}}" class="btn btn-success waves-effect waves-light m-1 coustom-btn">
											<i class="fa fa-thumbs-o-up"></i>
										</a>
                                	@else
										<a href="{{ url('/unpublish-product/'.$product->id)}}" class="btn btn-danger waves-effect waves-light m-1 coustom-btn">
											<i class="fa fa-thumbs-o-down"></i>
										</a>
                                	@endif
                                    <button type="button" class="btn btn-primary waves-effect waves-light coustom-btn" data-toggle="modal" data-target="#updateProduct{{ $product->id }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <a href="{{ url('/edit-image/'.$product->id)}}" class="btn btn-success waves-effect waves-light coustom-btn">
                                        <i class="fa fa-file-photo-o"></i>
                                    </a>
                                	<a href="{{ url('/delete-product/'.$product->id)}}" class="btn btn-danger waves-effect waves-light m-1 coustom-btn">
                                		<i class="fa fa-trash-o"></i>
                                	</a>
                                </td>
                            </tr>
                        </tbody>
                        @include('backend.product.include.update-product')
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-->

<script src="{{ asset('/backend') }}/assets/js/jquery.min.js"></script>
<script type="text/javascript">
    // Image select in show
    $(document).ready(function() {
        $(".imgInp").change(function(){
            readURL(this);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('.selectpicker').selectpicker();
    });
</script>
@endsection
