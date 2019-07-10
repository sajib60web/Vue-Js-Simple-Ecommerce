<button style="float: right;" type="button" class="btn btn-success waves-effect waves-light coustom-btn" data-toggle="modal" data-target="#insertBrand"><i style="padding-right: 0px;" class="icon-plus icons"></i></button>

<div class="modal fade" id="insertBrand">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content animated zoomInUp">
            <div class="modal-header">
                <h5 class="modal-title">Create Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/insert-brand')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" name="brand_name" class="form-control" placeholder="Enter Your Brand Name">
                            </div>
                            <div class="form-group">
                                <label>Brand Description</label>
                                <textarea name="brand_description" class="form-control" placeholder="Enter Your Brand Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Brand Image</label>
                                <input type="file" name="brand_image" class="form-control imgInp" accept="image/*"><br>
                                <img class="blah" src="" style="width: 100%; height: 150px; overflow: hidden;" alt="Select Brand Image">
                            </div>
                            <div class="form-group">
                                <label>Brand Status</label>
                                <select class="form-control valid" name="brand_status" required="" aria-invalid="false">
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
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
