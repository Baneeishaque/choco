<div class="modal fade " id="create-modal" tabindex="-1" role="dialog" aria-labelledby="create-modal-label"   aria-hidden="true">
    <div class="modal-dialog  " role="document">
        <div class="modal-content ">
             <form action="POST"  id="create-form" class=""  enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="create-modal-label">Create Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
                    <input type="hidden" id="id" value="">

                    <div class="form-group name">
                        <label for="name" class="col-form-label">Banner Name</label>
                        <input type="text" class="form-control" placeholder="Enter Banner Name"  
                            id="name"
                            name="name"
                            data-validation="required length" 
                          data-validation-length="3-20" 
                          data-validation-error-msg="Name is required and it must minimum 3 to 20 charactors."
                           />
                    </div>
                    <div class="form-group priority">
                        <label for="priority" class="col-form-label">Priority</label>
                        <input type="text" class="form-control" placeholder="Enter Banner priority"  
                            id="priority"
                            name="priority"
                            data-validation="required length" 
                           data-validation-length="1-20" 
                           data-validation-error-msg="priority is required"
                           />
                    </div>

                    <div class="form-group priority">
                        <label for="offer_content" class="col-form-label">Content</label>
                        <input type="text" class="form-control" placeholder="Enter Offer Content"  
                            id="offer_content"
                            name="offer_content"
                            data-validation="required length" 
                           data-validation-length="1-20" 
                           data-validation-error-msg="priority is required"
                           />
                    </div>
                   
                    <div class="form-group image">
                        <label for="file" class="col-form-label">Image</label><br>
                        <img src="" id="image-view" width="150" height="150" alt="No Image Selected">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="image"
                            id="image"
                            name="image" 
                            accept="image/*" 
                            onchange="readImage(this);"
                          >
                          <label class="custom-file-label" for="customFile">Choose file</label>
                          <label class="description text-info">*Note:The input should be image and less than 1MB size & no smaller than 100X50 px and ratio must be 2:1</label>
                        </div>
                         
                    </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary create-submit-btn">Save</button>
            </div>
             </form>
        </div>
    </div>
</div>
<script>
        function readImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image-view')
                        .attr('src', e.target.result)
                        .css("display", "block")
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
