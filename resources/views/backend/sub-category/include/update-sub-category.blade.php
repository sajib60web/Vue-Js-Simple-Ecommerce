<div class="modal fade" id="updateMainCategory{{ $sub_category->id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content animated zoomInUp">
            <div class="modal-header">
                <h5 class="modal-title">Update Sub Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/update-sub-category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Sub Category Name</label>
                                <input type="text" name="sub_cat_name" value="{{ $sub_category->sub_cat_name }}" class="form-control" placeholder="Enter Your Sub Category Name">
                                <input type="hidden" name="sub_category_id" value="{{ $sub_category->id }}">
                            </div>
                            <div class="form-group">
                                <label>Main Category</label>
                                <select class="form-control valid" name="main_category_id" id="main_category_id{{ $sub_category->id }}" required="" aria-invalid="false">
                                    <option>Select Main Category</option>
                                    @foreach($main_categories as $main_category)
                                        <option value="{{ $main_category->id }}">{{ $main_category->main_cat_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sub Category Description</label>
                                <textarea name="sub_cat_description" class="form-control" placeholder="Enter Your Sub Category Description">
                                    {{ $sub_category->sub_cat_description }}
								</textarea>
                            </div>
                            <div class="form-group">
                                <label>Sub Category Image</label>
                                <input type="file" name="sub_cat_image" class="form-control imgInp" accept="image/*"><br>
                                <img class="blah" src="{{ asset($sub_category->sub_cat_image) }}" style="width: 100%; height: 150px; overflow: hidden;">
                            </div>
                            <div class="form-group">
                                <label>Sub Category Status</label>
                                <select class="form-control valid" name="sub_cat_status" id="sub_cat_status{{ $sub_category->id }}" required="" aria-invalid="false">
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
    document.getElementById('sub_cat_status{{ $sub_category->id }}').value = {{ $sub_category->sub_cat_status }};
    document.getElementById('main_category_id{{ $sub_category->id }}').value = {{ $sub_category->main_category_id }};
</script>
