<div class="page-content">
	<div class="card card-style mb-3">
        <div class="content">
            <h4>Deposit</h4>
            <?php if(!empty($this->session->flashdata('success'))){ ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
            <div class="alert alert-danger" id="errorMsg" style="display: none;">
                                
            </div>
            <div class="mt-4 mb-3">
                <form method="post" action="<?= $action ?>" id="depositForm">
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Amount To Pay</span>
                        <input type="text" placeholder="Amount To Deposit" name="amount" value="<?= $amount ?>" required readonly>
                    </div>
                    <input type="hidden" name="productinfo" value="<?php echo $productinfo; ?>" />
                    <input type="hidden" name="firstname" value="<?php echo $name; ?>" />
                    <input type="hidden" name="email" value="<?php echo $mailid; ?>" />
                    <input type="hidden" name="phone" value="<?php echo $phoneno; ?>" />
                    <input type="hidden" name="address1" value="<?php echo $address; ?>" />
                    <input type="hidden" name="key" value="<?php echo $mkey; ?>" />
                    <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
                    <input type="hidden" name="txnid" value="<?php echo $tid; ?>" />
                    <input name="surl" value="<?php echo $sucess; ?>" size="64" type="hidden" />
                    <input name="furl" value="<?php echo $failure; ?>" size="64" type="hidden" />  
                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                    <input name="curl" value="<?php echo $cancel; ?> " type="hidden" />
                    <button type="submit" style="width: 100%;" class="btn btn-full btn-m gradient-highlight rounded-s font-13 font-600 mt-4">Confirm and Pay</button>
                </form>
            </div>
        </div>
    </div>
</div>