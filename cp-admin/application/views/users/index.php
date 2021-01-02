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
                                        <button class="btn btn-mini btn-info btn-topup" data-wallet="<?= $value['wallet'] ?>" data-id="<?= $value['id'] ?>">Topup</button>
                                        <button class="btn btn-mini btn-info btn-promo" data-id="<?= $value['id'] ?>">Promo</button>
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

<div class="modal fade" id="modalChnageWallet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="<?= base_url('users/update_wallet') ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wallet Topup</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Wallet Amount</label>
                        <input type="text" name="wallet" id="priceModal" class="form-control decimal-num" placeholder="Wallet Amount" required>
                    </div>
                    <input type="hidden" name="id" id="modalEditId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="modalChnageWalletPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="<?= base_url('users/add_promo') ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wallet Topup</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" class="form-control decimal-num" placeholder="Amount" required>
                    </div>
                    <input type="hidden" name="id" id="modalEditIdPromo">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function(){
        $('.btn-topup').click(function(event) {
            wallet  = $(this).data('wallet');
            id      = $(this).data('id');
            $('#priceModal').val(wallet);
            $('#modalEditId').val(id);
            $('#modalChnageWallet').modal('show');
        });

        $('.btn-promo').click(function(event) {
            id      = $(this).data('id');
            $('#modalEditIdPromo').val(id);
            $('#modalChnageWalletPromo').modal('show');
        });
    })
</script>