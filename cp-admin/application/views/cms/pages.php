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
        <?php if($_e == 0){ ?>
            <div class="col-md-5">
                <div class="card">
                    <form method="post" action="<?= base_url('cms/save_page') ?>" enctype="multipart/form-data">
                        <div class="card-block">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title <span class="-req">*</span></label>
                                    <input name="title" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Page <span class="-req">*</span></label>
                                    <textarea name="page" type="text" class="form-control" id="editor" value="" required></textarea>
                                </div>
                            </div> 
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-success">
                                <i class="fa fa-plus"></i> Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        <?php }else{ ?>
            <div class="col-md-5">
                <div class="card">
                    <form method="post" action="<?= base_url('cms/update_page') ?>" enctype="multipart/form-data">
                        <div class="card-block">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title <span class="-req">*</span></label>
                                    <input name="title" type="text" class="form-control" value="<?= $single['title'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Page <span class="-req">*</span></label>
                                    <textarea name="page" type="text" class="form-control" id="editor" value="" required><?= $single['page'] ?></textarea>
                                </div>
                            </div> 
                        </div>
                        <div class="card-footer text-right">
                            <input type="hidden" name="id" value="<?= $single['id'] ?>">
                            <button class="btn btn-success">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>
        <div class="col-md-7">
            <div class="card">
                <div class="card-block table-responsive">
                    <table class="table table-striped table-bordered table-mini table-dt">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Link</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td>
                                        <?= $value['title'] ?>
                                    </td>
                                    <td>
                                        <?= getPageLink($value['id']) ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('cms/edit_page/').$value['id'] ?>" class="btn btn-primary btn-mini">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="<?= base_url('cms/delete_page/').$value['id'] ?>" class="btn btn-danger btn-mini btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
</div>


<script src="<?= base_url('asset/assets/ckeditor/ckeditor.js') ?>"></script>

<script type="text/javascript">
    var toolbarGroups = [
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
        { name: 'forms', groups: [ 'forms' ] },
        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
        '/',
        { name: 'styles', groups: [ 'styles' ] },
        { name: 'colors', groups: [ 'colors' ] },
        { name: 'tools', groups: [ 'tools' ] },
        { name: 'others', groups: [ 'others' ] }
    ];
    CKEDITOR.replace( 'editor',{
        toolbar : 'Basic',
        toolbarGroups,
    });
</script>