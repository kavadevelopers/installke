<div class="page-content">
	<div class="card-style mt-3 mb-1" style="box-shadow: none;">
	    <div class="col-12">
	        <h2><?= $single['name'] ?></h2>
	    </div>
	</div>

	<div class="card card-style mb-2">
        <div class="content">
            <h4>Time of subscribe</h4>
            <?php if(!empty($this->session->flashdata('success'))){ ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
            <div class="mt-4 mb-3">
                <div class="row mb-2">
                    <div class="col-6 pr-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="<?= $single['amount'] * 3 ?>" data-day="3">
                            <h5 class="mb-0">3 Day</h5>
                            <p class="color-red-light mb-0"><?= pretyAmount($single['amount'] * 3) ?></p>
                            <p class="color-red-light">Income <?= pretyAmount($single['daily_income'] * 3) ?></p>
                        </a>
                    </div>
                    <div class="col-6 pl-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="<?= $single['amount'] * 30 ?>" data-day="30">
                            <h5 class="mb-0">30 Day</h5>
                            <p class="color-red-light mb-0"><?= pretyAmount($single['amount'] * 30) ?></p>
                            <p class="color-red-light">Income <?= pretyAmount($single['daily_income'] * 30) ?></p>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 pr-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="<?= $single['amount'] * 90 ?>" data-day="90">
                            <h5 class="mb-0">90 Day</h5>
                            <p class="color-red-light mb-0"><?= pretyAmount($single['amount'] * 90) ?></p>
                            <p class="color-red-light">Income <?= pretyAmount($single['daily_income'] * 90) ?></p>
                        </a>
                    </div>
                    <div class="col-6 pl-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="<?= $single['amount'] * 180 ?>" data-day="180">
                            <h5 class="mb-0">180 Day</h5>
                            <p class="color-red-light mb-0"><?= pretyAmount($single['amount'] * 180) ?></p>
                            <p class="color-red-light">Income <?= pretyAmount($single['daily_income'] * 180) ?></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-style mt-3 mb-1" style="box-shadow: none;">
	    <div class="col-12">
	        <h4>Way to subscribe</h4>
	    </div>
	</div>

	<div class="card card-style mb-2">
        <div class="content mb-2 mt-3">
            <div class="d-flex">
                <div class="pr-4 col-12 text-center">
                    <p class="font-600 color-highlight mb-0">Your Balance</p>
                    <h1><?= pretyAmount(getUser()['wallet']) ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="content">
        	<div class="alert alert-danger" id="errorMsg" style="display: none;">
                                
            </div>
            <div class="mt-4 mb-3">
                <form method="post" action="<?= base_url('plan/plan_sub') ?>" id="withdrawForm">
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Amount To Pay</span>
                        <input type="text" placeholder="Amount To Pay" name="amount" id="amountToPay" class="decimal-num" value="" readonly>
                    </div>
                    <button type="submit" style="width: 100%;" class="btn btn-full btn-m gradient-highlight rounded-s font-13 font-600 mt-4">Subscribe Now</button>
                    <input type="hidden" name="balance" id="accountBalance" value="<?= getUser()['wallet'] ?>">
                    <input type="hidden" name="day" id="dayOfSub" value="">
                    <input type="hidden" name="plan" id="" value="<?= $single['id'] ?>">
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $('.btn-amount-with').click(function(event) {
            $('.btn-amount-with').removeClass('withdraw-amount-select-btn-selected');
            $(this).addClass('withdraw-amount-select-btn-selected');
            $('#amountToPay').val($(this).data('amount'));
            $('#dayOfSub').val($(this).data('day'));
        });

        $('#withdrawForm').submit(function() {
            if($('#amountToPay').val() == ""){
                $('#errorMsg').html('Please Select Plan');
                $('#errorMsg').show();
                return false;
            }
            else if(parseFloat($('#accountBalance').val()) <  parseFloat($('#amountToPay').val())){
                $('#errorMsg').html('You do not have enough balance to make this subscription');
                $('#errorMsg').show();
                return false;
            }else{
                
            }
        });
    })
</script>