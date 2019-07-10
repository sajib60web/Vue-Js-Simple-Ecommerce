<div class="modal fade" id="updateProduct{{ $product->id }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content animated zoomInUp">
            <div class="modal-header">
                <h5 class="modal-title">Update Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/insert-product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Your Product Name">
                                        </div>
                                        <div class="form-group">
                                            <label>main Category</label>
                                            <select class="form-control valid" name="main_category_id" required="" aria-invalid="false">
                                                <option>Select main Category</option>
                                                @foreach($main_categories as $main_category)
                                                    <option value="{{ $main_category->id }}">{{ $main_category->main_cat_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select class="form-control valid" name="product_brand_id" required="" aria-invalid="false">
                                                <option>Select Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <select class="form-control valid" name="sub_category_id" required="" aria-invalid="false">
                                                <option>Select Sub Category</option>
                                                @foreach($sub_categories as $sub_category)
                                                    <option value="{{ $sub_category->id }}">{{ $sub_category->sub_cat_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label>Short Description</label>
                                        <textarea class="form-control" id="editor3" name="product_short_description" cols="100" rows="10">
                                            {{ $product->product_short_description }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group">
                                    <label>Long Description</label>
                                    <textarea class="form-control" id="editor4" name="prodcut_long_description" cols="100" rows="10">Enter Your Long Description</textarea>
                                </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>New Price</label>
                                            <input type="text" name="product_new_price" class="form-control" placeholder="Enter Your New Price">
                                        </div>
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="product_color" class="form-control" placeholder="Enter Your Color">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" required multiple  name="product_image[]" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Old Price</label>
                                            <input type="text" name="product_old_price" class="form-control" placeholder="Enter Your Old Price">
                                        </div>
                                        <div class="form-group">
                                            <label>Qty</label>
                                            <input type="text" name="product_qty" class="form-control" placeholder="Enter Your Qty">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Status</label>
                                            <select class="form-control valid" name="product_status" id="brand_status{{ $brand->id }}" required="" aria-invalid="false">
                                                <option>Select Product</option>
                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
