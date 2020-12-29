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
                <form method="post" action="<?= base_url('cms/save_message_center') ?>" enctype="multipart/form-data">
                    <div class="card-block">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title <span class="-req">*</span></label>
                                <input name="title" type="text" class="form-control" value="" required>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Link <span class="-req">*</span></label>
                                <input name="link" type="text" class="form-control" value="" required>
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
        
        <div class="col-md-8">
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
                                    <td><?= $value['title'] ?></td>
                                    <td><?= $value['link'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('cms/delete_message_center/').$value['id'] ?>" class="btn btn-danger btn-mini btn-delete">
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