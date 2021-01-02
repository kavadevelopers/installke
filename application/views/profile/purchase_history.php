<div class="page-content">
	<?php foreach ($list as $key => $value) { ?>
		<div class="card card-style mb-2">
	        <div class="content m-1">
	            <div class="row mb-0">
	                <div class="col-12 pl-1">
	                    <div class="mx-0 pr-3 pl-3 pb-0">
	                        <span style="margin-left: 8px;font-size: 18px;font-weight: 700;"><?= getPlan($value['plan'])['name'] ?>/<?= $value['days'] ?> Day</span>
	                    </div>
	                </div>
	            </div>
	            <div class="row mb-0">
	                <div class="col-12 pr-1">
	                    <div class="mx-0 mb-1 pr-3 pl-3 pb-0">
	                        <h6 class="mt-1"><?= pretyAmount($value['amount']) ?></h6>
	                    </div>
	                </div>
	            </div>
	            <div class="row mb-0">
	                <div class="col-12 pl-1">
	                    <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
	                        <p class="color-red-light text-right">Expire on : <?= getPretyDate($value['expire_on']) ?></p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	<?php } ?>
	<?php if(count($list) == 0){ ?>
		<div class="card card-style mb-2 mt-5">
	        <div class="content mb-0 mt-0">
	            <div class="todo-list list-group list-custom-large mr-2">
	                <a href="#" class="text-center">
	                    No Records Found
	                </a>
	            </div>
	        </div>
	    </div>
	<?php } ?>
</div>