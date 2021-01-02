<?php if(!empty($this->session->flashdata('success'))){ ?>
    <div class="alert alert-success ml-3 mr-3">
        <?= $this->session->flashdata('success') ?>
    </div>
<?php } ?>
<div class="card card-style bg-theme pb-0 m-1">
    <div class="content">
        <div class="tab-controls tabs-round tab-animated tabs-small tabs-rounded shadow-xl" data-tab-items="3" data-tab-active="bg-red-dark color-white">
             <a href="#" data-tab-active data-tab="tab-1">Processing</a>
             <a href="#" data-tab="tab-2">Auditing</a>
             <a href="#" data-tab="tab-3">Successfully</a>
        </div>
        <div class="clearfix mb-3"></div>
        <div class="tab-content" id="tab-1">
        	<?php foreach ($processing as $tkey => $tvalue) { $task = getTask($tvalue['task']); ?>
                <div class="card card-style mb-2 mr-0 ml-0">
                    <div class="content m-1">
                        <div class="row mb-0">
                            <div class="col-12 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <img src="<?= base_url('assets/images/fb.png') ?>" style="width: 20px;">
                                    <span style="margin-left: 8px;font-size: 18px;font-weight: 700;"><?= $task['task_type'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-3 pl-1 pr-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-highlight font-600 mb-n1" style="line-height: 1;">Number</p>
                                    <h6 class="mt-1"><?= $task['id'] ?></h6>
                                </div>
                            </div>
                            <div class="col-4 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-highlight font-600 mb-n1" style="line-height: 1;">Comission</p>
                                    <h6 class="color-red-light mt-1"><?= rs().getPlan($task['plan'])['single_commission'] ?></h6>
                                </div>
                            </div>
                            <div class="col-5 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0 text-center">
                                    <a href="<?= base_url('record/send/').$tvalue['id'] ?>" class="btn btn-xxs btn-full rounded-xl text-uppercase font-900 shadow-s bg-red-light">Place Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-12 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-red-light mt-1 text-right">Order time : <?= getPretyDate($tvalue['date']).' '.getPretyTime($tvalue['time']) ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if(count($processing) == 0){ ?>
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
        	<?php foreach ($auditing as $tkey => $tvalue) { $task = getTask($tvalue['task']); ?>
                <div class="card card-style mb-2 mr-0 ml-0">
                    <div class="content m-1">
                        <div class="row mb-0">
                            <div class="col-12 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <img src="<?= base_url('assets/images/fb.png') ?>" style="width: 20px;">
                                    <span style="margin-left: 8px;font-size: 18px;font-weight: 700;"><?= $task['task_type'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-3 pl-1 pr-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-highlight font-600 mb-n1" style="line-height: 1;">Number</p>
                                    <h6 class="mt-1"><?= $task['id'] ?></h6>
                                </div>
                            </div>
                            <div class="col-4 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-highlight font-600 mb-n1" style="line-height: 1;">Comission</p>
                                    <h6 class="color-red-light mt-1"><?= rs().getPlan($task['plan'])['single_commission'] ?></h6>
                                </div>
                            </div>
                            <div class="col-5 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0 text-center">
                                    <a href="#" class="btn btn-xxs btn-full rounded-xl text-uppercase font-900 shadow-s btm-disabled-k">Waiting</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-12 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-red-light mt-1 text-right">Order time : <?= getPretyDate($tvalue['date']).' '.getPretyTime($tvalue['time']) ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if(count($auditing) == 0){ ?>
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
        	<?php foreach ($success as $tkey => $tvalue) { $task = getTask($tvalue['task']); ?>
                <div class="card card-style mb-2 mr-0 ml-0">
                    <div class="content m-1">
                        <div class="row mb-0">
                            <div class="col-12 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <img src="<?= base_url('assets/images/fb.png') ?>" style="width: 20px;">
                                    <span style="margin-left: 8px;font-size: 18px;font-weight: 700;"><?= $task['task_type'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-3 pl-1 pr-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-highlight font-600 mb-n1" style="line-height: 1;">Number</p>
                                    <h6 class="mt-1"><?= $task['id'] ?></h6>
                                </div>
                            </div>
                            <div class="col-4 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-highlight font-600 mb-n1" style="line-height: 1;">Comission</p>
                                    <h6 class="color-red-light mt-1"><?= rs().getPlan($task['plan'])['single_commission'] ?></h6>
                                </div>
                            </div>
                            <div class="col-5 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0 text-center">
                                    <a href="#" class="btn btn-xxs btn-full rounded-xl text-uppercase font-900 shadow-s btm-disabled-k">Successful</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-12 pl-1">
                                <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                    <p class="color-red-light mt-1 text-right">Order time : <?= getPretyDate($tvalue['date']).' '.getPretyTime($tvalue['time']) ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if(count($success) == 0){ ?>
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