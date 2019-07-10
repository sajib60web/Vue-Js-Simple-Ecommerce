<div class="modal fade" id="updateBrand{{ $brand->id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content animated zoomInUp">
            <div class="modal-header">
                <h5 class="modal-title">Update Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/update-brand')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control" placeholder="Enter Your Brand Name">
                                <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                            </div>
                            <div class="form-group">
                                <label>Brand Description</label>
                                <textarea name="brand_description" class="form-control" placeholder="Enter Your Brand Description">
                                    {{ $brand->brand_description }}
								</textarea>
                            </div>
                            <div class="form-group">
                                <label>Brand Image</label>
                                <input type="file" name="brand_image" class="form-control imgInp" accept="image/*"><br>
                                <img class="blah" src="{{ asset($brand->brand_image) }}" style="width: 100%; height: 150px; overflow: hidden;">
                            </div>
                            <div class="form-group">
                                <label>Brand Status</label>
                                <select class="form-control valid" name="brand_status" id="brand_status{{ $brand->id }}" required="" aria-invalid="false">
                                    <option>Select Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('brand_status{{ $brand->id }}').value = {{ $brand->brand_status }};
</script>
