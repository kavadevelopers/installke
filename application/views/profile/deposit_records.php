<div class="page-content">
	<?php foreach ($list as $key => $value) { ?>
		<div class="card card-style mb-2">
	        <div class="content mb-0 mt-0">
	            <div class="todo-list list-group list-custom-large mr-2">
	                <a href="#">
	                	<?php if($value['status'] == "failed"){ ?>
	                    	<i class="fa fa-ban rounded-xl bg-red-dark color-green1-dark font-12"></i>
	                    <?php } ?>
	                    <?php if($value['status'] == "success"){ ?>
	                    	<i class="fa fa-check rounded-xl bg-green-dark color-green1-dark font-12"></i>
	                    <?php } ?>
	                    <span>Diposited - <?= pretyAmount($value['amount']) ?></span>
	                    <strong>at - <?= getPretyDate($value['date']).' - '.$value['status'] ?> </strong>
	                </a>
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