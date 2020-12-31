<div class="page-content">
	<?php foreach ($list as $key => $value) { ?>
		<div class="card card-style mb-2">
	        <div class="content mb-0 mt-0">
	            <div class="todo-list list-group list-custom-large mr-2">
	                <a href="#">
	                    <i class="fa fa-check rounded-xl bg-green-dark color-green1-dark font-12"></i>
	                    <span>Diposited - <?= pretyAmount($value['amount']) ?></span>
	                    <strong>at - <?= getPretyDate($value['date']) ?></strong>
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