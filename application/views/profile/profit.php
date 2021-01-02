<div class="page-content">
	<?php foreach ($list as $key => $value) { ?>
		<div class="card card-style mb-2">
	        <div class="content m-1">
	            <div class="row mb-0">
	                <div class="col-12 pl-1">
	                    <div class="mx-0 pr-3 pl-3 pb-0">
	                        <span style="margin-left: 8px;font-size: 18px;font-weight: 700;"><?= ucfirst($value['type']) ?></span>
	                    </div>
	                </div>
	            </div>
	            <div class="row mb-0">
	                <div class="col-4 pr-1">
	                    <div class="mx-0 mb-1 pr-3 pl-3 pb-0">
	                        <h6 class="mt-1"><?= pretyAmount($value['credit']) ?></h6>
	                    </div>
	                </div>
	                <div class="col-8 pl-1">
	                    <div class="mx-0 mb-1 mt-1 pr-3 pl-3 pb-0">
	                        <p class="color-highlight font-600 mb-n1 text-right" style="line-height: 1;">tra id : <?= $value['tra'] ?></p>
	                    </div>
	                </div>
	            </div>
	            <div class="row mb-0">
	                <div class="col-12 pl-1">
	                    <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
	                        <p class="color-red-light text-right"><?= getPretyDate($value['date']) ?></p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	<?php } ?>
</div>