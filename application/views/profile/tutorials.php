<div class="page-content">
	<?php foreach ($list as $key => $value) { ?>
		<div class="card card-style mb-2">
			<div class="accordion" id="accordion-<?= $key ?>">
				<div class="mb-0">
	                <button class="btn accordion-btn border-0 color-theme" data-toggle="collapse" data-target="#collapse<?= $key ?>">
	                <i class="fa fa-info color-yellow-dark mr-2"></i>
	                <?= $value['title'] ?>
	                <i class="fa fa-chevron-down font-10 accordion-icon"></i>
	                </button>
	                <div id="collapse<?= $key ?>" class="collapse" data-parent="#accordion-<?= $key ?>">
	                    <div class="py-2 pl-3 pr-3">
	                        <?= nl2br($value['msg']) ?>
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