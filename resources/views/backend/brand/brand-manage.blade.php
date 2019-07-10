@extends('backend.master')

@section('title', 'Brand')

@section('main-content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Data Brand</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">{{ Auth::user()->name }} </a></li>
            <li class="breadcrumb-item active" aria-current="page"> Brand</li>
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
            	<i class="fa fa-table"></i> All Brand
                @include('backend.brand.include.insert-brand')
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Brand Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php($count = 1)
                        @foreach($brands as $brand)
                        <tbody>
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td><img src="{{ asset($brand->brand_image) }}" alt="Image" style="width: 100px; height: 50px;"></td>
                                <td>
                                	@if($brand->brand_status == 1)
										<span class="badge badge-success shadow-success m-1">Active</span>
                                	@else
										<span class="badge badge-danger shadow-danger m-1">Pending</span>
                                	@endif
                                </td>
                                <td>
                                	@if($brand->brand_status == 0)
										<a href="{{ url('/publish-brand/'.$brand->id)}}" class="btn btn-success waves-effect waves-light m-1 coustom-btn">
											<i class="fa fa-thumbs-o-up"></i> 
										</a>
                                	@else
										<a href="{{ url('/unpublish-brand/'.$brand->id)}}" class="btn btn-danger waves-effect waves-light m-1 coustom-btn">
											<i class="fa fa-thumbs-o-down"></i>
										</a>
                                	@endif
                                    <button type="button" class="btn btn-primary waves-effect waves-light coustom-btn" data-toggle="modal" data-target="#updateBrand{{ $brand->id }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                	<a href="{{ url('/delete-brand/'.$brand->id)}}" class="btn btn-danger waves-effect waves-light m-1 coustom-btn">
                                		<i class="fa fa-trash-o"></i>
                                	</a>
                                </td>
                            </tr>
                        </tbody>
                        @include('backend.brand.include.update-brand')
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
