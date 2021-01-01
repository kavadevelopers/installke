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
                                <th class="text-center">Mobile</th>
                                <th class="text-right">Amount</th>
                                <th class="text-center">Date</th>
                                <th>Bank Details</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center"><?= getCustomer($value['user'])['mobile'] ?></td>
                                    <td class="text-right"><?= rs().$value['amount'] ?></td>
                                    <td class="text-center"><?= vd($value['date']) ?></td>
                                    <td>
                                        <b>Name : </b><?= getCustomerInfo($value['user'])['name'] ?><br>
                                        <b>Bank : </b><?= getCustomerInfo($value['user'])['bank'] ?><br>
                                        <b>Ac No. : </b><?= getCustomerInfo($value['user'])['acc_no'] ?><br>
                                        <b>IFSC : </b><?= getCustomerInfo($value['user'])['ifsc'] ?><br>
                                        <b>PAYTM : </b><?= getCustomerInfo($value['user'])['paytm'] ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('withdraw/successed/').$value['id'] ?>" class="btn btn-success btn-mini">
                                            Success
                                        </a>
                                        <a href="<?= base_url('withdraw/rejected/').$value['id'] ?>/approve" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure?')">
                                            Reject
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