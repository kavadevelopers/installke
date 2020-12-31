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
                <form method="post" action="<?= base_url('profile/save_deposit') ?>" id="depositForm">
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Payment Method</span>
                        <input type="text" placeholder="Account Number" name="acc_no" value="Online Payment" readonly>
                    </div>
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Amount To Deposit</span>
                        <input type="text" placeholder="Amount To Deposit" id="depositAmount" name="amount" class="decimal-num" value="" required>

                    </div>
                    <button type="submit" style="width: 100%;" class="btn btn-full btn-m gradient-highlight rounded-s font-13 font-600 mt-4">Next</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card card-style mt-3 mb-3">
        <div class="content">
            <h1 class="mb-1">Tips</h1>
            <p class="mt-1 mb-2">
                1. Minimum of single recharge 200 INR. maximum is 1,00,000 INR.
            </p>
            <p class="mt-1 mb-2">
                2. After the balance topped up, activate membership to get higher commissions.
            </p>
            <p class="mt-1 mb-2">
                3. If you face any problms during recharge, please contect customer service immediately to solve it.
            </p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $('#depositForm').submit(function(){
            if(parseFloat($('#depositAmount').val()) < 200){
                $('#errorMsg').html('Minimum deposit must more than 200 INR');
                $('#errorMsg').show();
                return false;
            }
        });
    })
</script>