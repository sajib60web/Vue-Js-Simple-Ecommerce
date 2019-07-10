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
                </div>
                <div class="card-body">
                    <form action="{{ url('/update-product_image')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php($count = 1)
                                @foreach($product_images as $product)
                                    <tbody>
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>
                                                <input type="file" multiple  name="product_image[]" accept="image/*"><br><br>
                                                <input type="text" name="product_image_id[]" value="{{ $product->id }}"><br><br>
                                                <img style="height: 60px; width: 60px" src="{{ asset($product->product_image) }}" >
                                            </td>
                                            <td>
                                                <a href="{{ url('/delete-product-image/'.$product->id)}}" class="btn btn-danger waves-effect waves-light m-1 coustom-btn">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->
    <script src="{{ asset('/backend') }}/assets/js/jquery.min.js"></script>
@endsection
