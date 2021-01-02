<div class="page-content">
	<?php foreach ($list as $key => $value) { ?>
		<div class="card card-style mb-2">
	        <div class="content mt-0 mb-0">
	            <div class="list-group list-custom-large">
	                <a href="<?= $value['link'] ?>">
	                    <span><?= $value['title'] ?></span>
	                    <strong><?= getPretyDateTime($value['created_at']) ?></strong>
	                    <i class="fa fa-chevron-right"></i>
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