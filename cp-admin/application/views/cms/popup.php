<div class="page-header">
    <div class="row align-items-end">
        <div class="col-md-12">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4><?= $_title ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <form method="post" action="<?= base_url('cms/update_popup') ?>" enctype="multipart/form-data">
                    <div class="card-block">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title <span class="-req">*</span></label>
                                <input name="title" type="text" class="form-control" value="<?= $single['title'] ?>" required>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Msg <span class="-req">*</span></label>
                                <textarea name="msg" type="text" class="form-control" value="" rows="10" required><?= $single['msg'] ?></textarea>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Link </label>
                                <input name="link" type="text" class="form-control" value="<?= $single['link'] ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> 
                                <div class="checkbox-fade fade-in-primary d-">
                                    <label>
                                        <input type="checkbox" value="1" name="enable" <?= $single['enable'] == 1?'checked' :'' ?>>
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span class="text-inverse">Enable</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-success">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>