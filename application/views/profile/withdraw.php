<div class="page-content">
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
	<div class="card card-style mb-2">
        <div class="content">
            <h4>Please Select Withdraw Amount</h4>
            <?php if(!empty($this->session->flashdata('success'))){ ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
            <div class="mt-4 mb-3">
                <div class="row mb-2">
                    <div class="col-6 pr-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="100">
                            <?= rs() ?>100
                        </a>
                    </div>
                    <div class="col-6 pl-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="300">
                            <?= rs() ?>300
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 pr-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="1000">
                            <?= rs() ?>1,000
                        </a>
                    </div>
                    <div class="col-6 pl-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="2500">
                            <?= rs() ?>2,500
                        </a>
                    </div>
                </div>  
                <div class="row mb-2">
                    <div class="col-6 pr-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="5000">
                            <?= rs() ?>5,000
                        </a>
                    </div>
                    <div class="col-6 pl-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="15000">
                            <?= rs() ?>15,000
                        </a>
                    </div>
                </div>  
                <div class="row mb-2">
                    <div class="col-6 pr-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="25000">
                            <?= rs() ?>25,000
                        </a>
                    </div>
                    <div class="col-6 pl-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="50000">
                            <?= rs() ?>50,000
                        </a>
                    </div>
                </div>  
                <div class="row mb-2">
                    <div class="col-6 pr-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="100000">
                            <?= rs() ?>100,000
                        </a>
                    </div>
                    <div class="col-6 pl-1">
                        <a href="#" class="btn btn-full btn-m withdraw-amount-select-btn rounded-s font-13 font-600 btn-amount-with" data-amount="250000">
                            <?= rs() ?>250,000
                        </a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div class="card card-style mb-3">
        <div class="content">
            <div class="alert alert-danger" id="errorMsg" style="display: none;">
                                
            </div>
            <div class="mt-4 mb-3">
                <form method="post" action="<?= base_url('profile/save_withdraw') ?>" id="withdrawForm">
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Bank</span>
                        <input type="text" placeholder="Bank" id="bankName" value="<?= getBank()['bank'] ?>" readonly>
                    </div>
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Amount To Withdraw</span>
                        <input type="text" placeholder="Amount To Withdraw" name="amount" id="amountToWithdraw" class="decimal-num" value="" readonly>
                    </div>
                    <button type="submit" style="width: 100%;" class="btn btn-full btn-m gradient-highlight rounded-s font-13 font-600 mt-4">Withdraw Now</button>
                    <input type="hidden" name="balance" id="accountBalance" value="<?= getUser()['wallet'] ?>">
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
            $('#amountToWithdraw').val($(this).data('amount'));
        });

        $('#withdrawForm').submit(function() {
            if($('#bankName').val() == ""){
                $('#errorMsg').html('Please Add Bank details to make withdraw');
                $('#errorMsg').show();
                return false;
            }
            else if($('#amountToWithdraw').val() == ""){
                $('#errorMsg').html('Please Select Withdraw amount');
                $('#errorMsg').show();
                return false;
            }
            else if(parseFloat($('#accountBalance').val()) <  parseFloat($('#amountToWithdraw').val())){
                $('#errorMsg').html('You do not have enough balance to make this withdraw');
                $('#errorMsg').show();
                return false;
            }else{
                
            }
        });
    })
</script>