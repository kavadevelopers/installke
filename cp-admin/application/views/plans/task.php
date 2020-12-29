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
            <div class="col-md-3">
                <div class="card">
                    <form method="post" action="<?= base_url('plans/task_save') ?>" enctype="multipart/form-data">
                        <div class="card-block">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name <span class="-req">*</span></label>
                                    <input name="name" type="text" class="form-control" value="<?= set_value('name'); ?>" placeholder="Name" required>
                                    <?= form_error('name') ?>
                                </div>
                            </div>        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Amount <span class="-req">*</span></label>
                                    <input name="amount" type="text" class="form-control decimal-num" value="<?= set_value('amount'); ?>" placeholder="Amount" required>
                                    <?= form_error('amount') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Link <span class="-req">*</span></label>
                                    <input name="link" type="text" class="form-control" value="<?= set_value('link'); ?>" placeholder="Link" required>
                                    <?= form_error('link') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Plan <span class="-req">*</span></label>
                                    <select class="form-control" name="plan" required>
                                        <option value="">-- Select Plan --</option>
                                        <?php foreach ($this->db->order_by('name','asc')->get_where('plans')->result_array() as $key => $value) { ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>  
                                        <?php } ?>
                                    </select>
                                    <?= form_error('type') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Type <span class="-req">*</span></label>
                                    <select class="form-control" name="type" required>
                                        <option value="facebook">Facebook</option>
                                    </select>
                                    <?= form_error('type') ?>
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
            <div class="col-md-3">
                <div class="card">
                    <form method="post" action="<?= base_url('plans/task_update') ?>" enctype="multipart/form-data">
                        <div class="card-block">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name <span class="-req">*</span></label>
                                    <input name="name" type="text" class="form-control" value="<?= set_value('name',$single['name']); ?>" placeholder="Name" required>
                                    <?= form_error('name') ?>
                                </div>
                            </div>        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Amount <span class="-req">*</span></label>
                                    <input name="amount" type="text" class="form-control decimal-num" value="<?= set_value('amount',$single['amount']); ?>" placeholder="Amount" required>
                                    <?= form_error('amount') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Link <span class="-req">*</span></label>
                                    <input name="link" type="text" class="form-control" value="<?= set_value('link',$single['link']); ?>" placeholder="Link" required>
                                    <?= form_error('link') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Plan <span class="-req">*</span></label>
                                    <select class="form-control" name="plan" required>
                                        <option value="">-- Select Plan --</option>
                                        <?php foreach ($this->db->order_by('name','asc')->get_where('plans')->result_array() as $key => $value) { ?>
                                            <option value="<?= $value['id'] ?>" <?= $value['id'] == set_value('plan',$single['plan'])?'selected':'' ?>><?= $value['name'] ?></option>  
                                        <?php } ?>
                                    </select>
                                    <?= form_error('plan') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Type <span class="-req">*</span></label>
                                    <select class="form-control" name="type" required>
                                        <option value="facebook">Facebook</option>
                                    </select>
                                    <?= form_error('type') ?>
                                </div>
                            </div> 
                        </div>
                        <div class="card-footer text-right">
                            <a href="<?= base_url('plans/task') ?>" class="btn btn-danger">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                            <button class="btn btn-success">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                        <input type="hidden" name="id" value="<?= $single['id'] ?>">
                    </form>
                </div>
            </div>
        <?php } ?>
        

        <div class="col-md-9">
            <div class="card">
                <div class="card-block table-responsive">
                    <table class="table table-striped table-bordered table-mini table-dt">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-right">Amount</th>
                                <th class="">Link</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Plan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center"><?= $value['name'] ?></td>
                                    <td class="text-right"><?= $value['amount'] ?></td>
                                    <td class=""><?= $value['link'] ?></td>
                                    <td class="text-center"><?= $value['ttype'] ?></td>
                                    <td class="text-center"><?= get_plan($value['plan'])['name'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('plans/edit_task/').$value['id'] ?>" class="btn btn-primary btn-mini">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="<?= base_url('plans/delete_task/').$value['id'] ?>" class="btn btn-danger btn-mini btn-delete">
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