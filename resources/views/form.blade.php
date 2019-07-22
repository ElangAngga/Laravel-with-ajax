<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('awal.store') }}" method="POST" class="form-horizontal" data-toggle="validator">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Title</label>
                        <div class="col-md-6">
                            <input type="text" name="title" id="title" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Description" class="col-md-3 control-label">Description</label>
                    <div class="col-md-6">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Save</button>
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                
            </form>
        </div>
    </div>
</div>