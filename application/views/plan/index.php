<div class="page-content">
	<?php if(!empty($this->session->flashdata('success'))){ ?>
        <div class="alert alert-success ml-3 mr-3">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php } ?>
	<div class="card card-style mb-2" data-card-height="150" style="background: linear-gradient(to right, #c9c9c9 0%, #ababab 100%);">
        <div class="row mb-0">
            <div class="col-5 pr-1">
                <div class="mx-0 mb-2 p-3">
                    <img src="<?= base_url('assets/images/level/').getPlan(getUser()['plan'])['image'] ?>" style="width: 100%;">
                </div>
            </div>
            <div class="col-7 pl-1">
                <div class="mx-0 mb-2 p-3">
                    <h6 class="font-18"><?= getPlan(getUser()['plan'])['name'] ?></h6>
                    <h6 class="mb-0">Expire on : <?= getPretyDate(getUser()['expireon']) ?></h6>
                    <h6 class="mb-0">Daily task : <?= getPlan(getUser()['plan'])['task'] ?></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style mb-2">
        <div class="row mb-0">
        	<div class="col-12 pr-1">
                <div class="mx-0 mb-0 p-3">
                    <img src="<?= base_url('assets/images/plan_info.png') ?>" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <a href="<?= base_url('profile/member_profile') ?>">
	    <div class="card card-style bg-pink-light mb-2">
	        <div class="d-flex pt-3 mt-1 mb-2 pb-2">
	            <div class="align-self-center">
	                <i class="color-icon-gray color-white font-30 icon-40 text-center fa fa-money ml-3"></i>
	            </div>
	            <div class="align-self-center">
	                <h4 class="show-on-theme-light color-white pl-2 ml-1 mb-0 ">Profit Info</h4>
	            </div>
	        </div>
	    </div>
	</a>

	<a href="<?= base_url('profile/purchase_history') ?>">
	    <div class="card card-style bg-blue-light mb-2">
	        <div class="d-flex pt-3 mt-1 mb-2 pb-2">
	            <div class="align-self-center">
	                <i class="color-icon-gray color-white font-30 icon-40 text-center fa fa-history ml-3"></i>
	            </div>
	            <div class="align-self-center">
	                <h4 class="show-on-theme-light color-white pl-2 ml-1 mb-0 ">Plan purchase record</h4>
	            </div>
	        </div>
	    </div>
	</a>


	<?php foreach ($list as $key => $value) { ?>
		<div class="card card-style mb-2">
	        <div class="row mb-0">
	            <div class="col-3 pr-1 mt-2">
	                <div class="mx-0 mb-2 p-3">
	                    <img src="<?= base_url('assets/images/level/').$value['image'] ?>" style="width: 100%;">
	                </div>
	            </div>
	            <div class="col-5 pl-1">
	                <div class="mx-0 mb-2 p-3">
	                    <h6 class="font-18"><?= $value['name'] ?></h6>
	                    <h6 class="mb-0">Daily task : <?= $value['task'] ?></h6>
	                </div>
	            </div>
	            <div class="col-4 pl-1">
	                <div class="mx-0 mb-2 p-3">
	                	<?php if($value['id'] == '1'){ ?>
	                		<a href="#" class="btn btn-xxs btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s btm-disabled-k">Claimed</a>
	                	<?php }else if(getUser()['plan'] == $value['id']){ ?>
	                    	<a href="<?= base_url('plan/plan/').$value['id'] ?>" class="btn btn-xxs btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s bg-yellow-light">Extend</a>
	                    <?php }else if(getUser()['plan'] != $value['id']){ ?>
	                    	<a href="<?= base_url('plan/plan/').$value['id'] ?>" class="btn btn-xxs btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s bg-red-light">Join Now</a>
	                    <?php } ?>
	                </div>
	            </div>
	        </div>
	    </div>
    <?php } ?>

</div>