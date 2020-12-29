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
                <form method="post" action="<?= base_url('cms/save_tutorials') ?>" enctype="multipart/form-data">
                    <div class="card-block">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title <span class="-req">*</span></label>
                                <input name="title" type="text" class="form-control" value="" required>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description <span class="-req">*</span></label>
                                <textarea name="desc" class="form-control" rows="10" required></textarea>
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
                                <th class="">Title</th>
                                <th class="">Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="">
                                        <?= $value['title'] ?>
                                    </td>
                                    <td class="">
                                        <?= nl2br($value['msg']) ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('cms/delete_tutorial/').$value['id'] ?>" class="btn btn-danger btn-mini btn-delete">
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