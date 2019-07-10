<div class="modal fade" id="updateMainCategory{{ $main_category->id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content animated zoomInUp">
            <div class="modal-header">
                <h5 class="modal-title">Update Main Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/update-main-category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Main Category Name</label>
                                <input type="text" name="main_cat_name" value="{{ $main_category->main_cat_name }}" class="form-control" placeholder="Enter Your Main Category Name">
                                <input type="hidden" name="main_category_id" value="{{ $main_category->id }}">
                            </div>
                            <div class="form-group">
                                <label>Main Category Description</label>
                                <textarea name="main_cat_description" class="form-control" placeholder="Enter Your Main Category Description">
                                    {{ $main_category->main_cat_description }}
								</textarea>
                            </div>
                            <div class="form-group">
                                <label>Main Category Image</label>
                                <input type="file" name="main_cat_image" class="form-control imgInp" accept="image/*"><br>
                                <img class="blah" src="{{ asset($main_category->main_cat_image) }}" style="width: 100%; height: 150px; overflow: hidden;">
                            </div>
                            <div class="form-group">
                                <label>Main Category Status</label>
                                <select class="form-control valid" name="main_cat_status" id="main_cat_status{{ $main_category->id }}" required="" aria-invalid="false">
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
    document.getElementById('main_cat_status{{ $main_category->id }}').value = {{ $main_category->main_cat_status }};
</script>
