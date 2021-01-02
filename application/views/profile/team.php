<div class="page-content">
	<div class="card card-style bg-theme pb-0 m-1">
	    <div class="content">
	        <div class="tab-controls tabs-round tab-animated tabs-small tabs-rounded shadow-xl" data-tab-items="3" data-tab-active="bg-red-dark color-white">
	             <a href="#" data-tab-active data-tab="tab-1">Gen 1 (<?= count($first) ?>)</a>
	             <a href="#" data-tab="tab-2">Gen 2 (<?= count($secound) ?>)</a>
	             <a href="#" data-tab="tab-3">Gen 3 (<?= count($third) ?>)</a>
	        </div>
	        <div class="clearfix mb-3"></div>
	        <div class="tab-content" id="tab-1">
	        	<?php foreach ($first as $key => $value) { ?>
	        		<a href="#" class="d-flex mb-3">
	                    <div>
	                        <img src="<?= base_url('assets/images/avatars/5s.png') ?>" width="60" class="rounded-xl mr-3">
	                    </div>
	                    <div>
	                        <h5 class="font-16 font-600"><?= $value['mobile'] ?></h5>
	                        <p class="line-height-s mt-1 opacity-70"><?= getPlan($value['plan'])['name'] ?> - balance : <?= pretyAmount($value['wallet']) ?></p>
	                    </div>
	                    <div class="align-self-center pl-3">
	                        <i class="fa fa-angle-right opacity-20"></i>
	                    </div>
	                </a>
	                <div class="divider mb-3"></div>
	        	<?php } ?>
	        	<?php if(count($first) == 0){ ?>
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
	        <div class="tab-content" id="tab-2">
	        	<?php foreach ($secound as $key => $value) { ?>
	        		<a href="#" class="d-flex mb-3">
	                    <div>
	                        <img src="<?= base_url('assets/images/avatars/2s.png') ?>" width="60" class="rounded-xl mr-3">
	                    </div>
	                    <div>
	                        <h5 class="font-16 font-600"><?= $value['mobile'] ?></h5>
	                        <p class="line-height-s mt-1 opacity-70"><?= getPlan($value['plan'])['name'] ?> - balance : <?= pretyAmount($value['wallet']) ?></p>
	                    </div>
	                    <div class="align-self-center pl-3">
	                        <i class="fa fa-angle-right opacity-20"></i>
	                    </div>
	                </a>
	                <div class="divider mb-3"></div>
	        	<?php } ?>
	        	<?php if(count($secound) == 0){ ?>
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
	        <div class="tab-content" id="tab-3">
	        	<?php foreach ($third as $key => $value) { ?>
	        		<a href="#" class="d-flex mb-3">
	                    <div>
	                        <img src="<?= base_url('assets/images/avatars/4s.png') ?>" width="60" class="rounded-xl mr-3">
	                    </div>
	                    <div>
	                        <h5 class="font-16 font-600"><?= $value['mobile'] ?></h5>
	                        <p class="line-height-s mt-1 opacity-70"><?= getPlan($value['plan'])['name'] ?> - balance : <?= pretyAmount($value['wallet']) ?></p>
	                    </div>
	                    <div class="align-self-center pl-3">
	                        <i class="fa fa-angle-right opacity-20"></i>
	                    </div>
	                </a>
	                <div class="divider mb-3"></div>
	        	<?php } ?>
	        	<?php if(count($third) == 0){ ?>
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
	    </div>
	</div>
</div>