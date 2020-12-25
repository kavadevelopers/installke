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
    	<div class="col-md-12">
            <div class="card">
                <div class="card-block table-responsive">
                    <table class="table table-striped table-bordered table-mini table-dt">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Mobile</th>
                                <th class="text-center">Referal Code</th>
                                <th class="text-center">Refered By</th>
                                <th class="text-right">Wallet Balance</th>
                                <th class="text-center">Blocked</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center">
                                    	#<?= $value['id'] ?>
                                    </td>
                                    <td class="text-center"><?= $value['mobile'] ?></td>
                                    <td class="text-center"><?= $value['usercode'] ?></td>
                                    <td class="text-center"><?= $value['invitation'] ?></td>
                                    <td class="text-right"><?= rs().$value['wallet'] ?></td>
                                    <td class="text-center">
                                        <?php if($value['blocked'] == "yes"){ ?>
                                            <a href="<?= base_url('users/block/').$value['id'] ?>" class="btn btn-mini btn-danger btn-status">Blocked</a>
                                        <?php }else{ ?>
                                            <a href="<?= base_url('users/block/').$value['id'] ?>/yes" class="btn btn-mini btn-success btn-status">Active</a>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('users/delete/').$value['id'] ?>" class="btn btn-danger btn-mini btn-delete">
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