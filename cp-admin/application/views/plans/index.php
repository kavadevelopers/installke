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
            <div class="col-md-3" style="display: none;">
                <div class="card">
                    <form method="post" action="<?= base_url('plans/save') ?>" enctype="multipart/form-data">
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
                                    <label>Number of tasks <span class="-req">*</span></label>
                                    <input name="no_of_tasks" type="text" class="form-control numbers" value="<?= set_value('no_of_tasks'); ?>" placeholder="Number of tasks" required>
                                    <?= form_error('no_of_tasks') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Single Comission <span class="-req">*</span></label>
                                    <input name="single_comission" type="text" class="form-control decimal-num" value="<?= set_value('single_comission'); ?>" placeholder="Single Comission" required>
                                    <?= form_error('single_comission') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Daily Income <span class="-req">*</span></label>
                                    <input name="daily_income" type="text" class="form-control decimal-num" value="<?= set_value('daily_income'); ?>" placeholder="Daily Income" required>
                                    <?= form_error('daily_income') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Monthly Income <span class="-req">*</span></label>
                                    <input name="monthly_income" type="text" class="form-control decimal-num" value="<?= set_value('monthly_income'); ?>" placeholder="Monthly Income" required>
                                    <?= form_error('monthly_income') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Anual Income <span class="-req">*</span></label>
                                    <input name="anual_income" type="text" class="form-control decimal-num" value="<?= set_value('anual_income'); ?>" placeholder="Anual Income" required>
                                    <?= form_error('anual_income') ?>
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
            <div class="col-md-3" style="display: none;">
                <div class="card">
                    <form method="post" action="<?= base_url('plans/update') ?>" enctype="multipart/form-data">
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
                                    <label>Number of tasks <span class="-req">*</span></label>
                                    <input name="no_of_tasks" type="text" class="form-control numbers" value="<?= set_value('no_of_tasks',$single['task']); ?>" placeholder="Number of tasks" required>
                                    <?= form_error('no_of_tasks') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Single Comission <span class="-req">*</span></label>
                                    <input name="single_comission" type="text" class="form-control decimal-num" value="<?= set_value('single_comission',$single['single_commission']); ?>" placeholder="Single Comission" required>
                                    <?= form_error('single_comission') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Daily Income <span class="-req">*</span></label>
                                    <input name="daily_income" type="text" class="form-control decimal-num" value="<?= set_value('daily_income',$single['daily_income']); ?>" placeholder="Daily Income" required>
                                    <?= form_error('daily_income') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Monthly Income <span class="-req">*</span></label>
                                    <input name="monthly_income" type="text" class="form-control decimal-num" value="<?= set_value('monthly_income',$single['monthly_income']); ?>" placeholder="Monthly Income" required>
                                    <?= form_error('monthly_income') ?>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Anual Income <span class="-req">*</span></label>
                                    <input name="anual_income" type="text" class="form-control decimal-num" value="<?= set_value('anual_income',$single['anual_income']); ?>" placeholder="Anual Income" required>
                                    <?= form_error('anual_income') ?>
                                </div>
                            </div> 
                        </div>
                        <div class="card-footer text-right">
                            <a href="<?= base_url('plans/index') ?>" class="btn btn-danger">
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
        

        <div class="col-md-12">
            <div class="card">
                <div class="card-block table-responsive">
                    <table class="table table-striped table-bordered table-mini table-dt">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">No of tasks</th>
                                <th class="text-right">Amount</th>
                                <th class="text-center">Single Comission</th>
                                <th class="text-right">Daily Inc.</th>
                                <th class="text-right">Monthly Inc.</th>
                                <th class="text-right">Anual Inc.</th>
                                <!-- <th class="text-center">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center"><?= $value['name'] ?></td>
                                    <td class="text-center"><?= $value['task'] ?></td>
                                    <td class="text-right"><?= $value['amount'] ?></td>
                                    <td class="text-center"><?= $value['single_commission'] ?></td>
                                    <td class="text-right"><?= $value['daily_income'] ?></td>
                                    <td class="text-right"><?= $value['monthly_income'] ?></td>
                                    <td class="text-right"><?= $value['anual_income'] ?></td>
                                    <!-- <td class="text-center">
                                        <a href="<?= base_url('plans/edit/').$value['id'] ?>" class="btn btn-primary btn-mini">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="<?= base_url('plans/delete/').$value['id'] ?>" class="btn btn-danger btn-mini btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
</div>