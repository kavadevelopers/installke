<?php if(!empty($this->session->flashdata('success'))){ ?>
    <div class="alert alert-success ml-3 mr-3">
        <?= $this->session->flashdata('success') ?>
    </div>
<?php } ?>
<div class="card card-style bg-theme pb-0 m-1">
    <div class="content">
        <div class="tab-controls tabs-round tab-animated tabs-small tabs-rounded shadow-xl" data-tab-items="4" data-tab-active="bg-red-dark color-white">
            <?php foreach ($plan as $key => $value) { ?>
                <a href="#" <?php if($value['id'] == getUser()['plan']){ ?> data-tab-active <?php } ?> data-tab="tab-<?= $key ?>"><?= $value['name'] ?></a>
            <?php } ?>
        </div>
        <div class="clearfix mb-3"></div>
        <?php if(dailyRemaining() == 0){ ?>
            <p class="color-red-light">Your Today's task is completed. Wait for tomorrow or upgrade your plan.</p>
        <?php } ?>
        <?php foreach ($plan as $key => $value) { ?>
            <div class="tab-content" id="tab-<?= $key ?>">
                <?php $tasks = $this->db->get_where('task',['plan' => $value['id']])->result_array() ?>
                <?php foreach ($tasks as $tkey => $tvalue) { ?>
                    <?php $record = $this->db->get_where('mission_record',['user' => getUser()['id'],'task' => $tvalue['id']])->row_array() ?>
                    <?php if($tvalue['unit'] > $tvalue['unit_done'] && !$record) { ?>
                        <?php
                            if($value['id'] == getUser()['plan'] && dailyRemaining()){
                                $link = base_url('task/task_apply/').$tvalue['id'];
                            } else{
                                $link = "#";
                            }
                        ?>
                        <div class="card card-style mb-2 mr-0 ml-0">
                            <div class="content m-1">
                                <div class="row mb-0">
                                    <div class="col-12 pl-1">
                                        <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                            <img src="<?= base_url('assets/images/fb.png') ?>" style="width: 20px;">
                                            <span style="margin-left: 8px;font-size: 18px;font-weight: 700;"><?= $tvalue['task_type'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-3 pl-1 pr-1">
                                        <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                            <p class="color-highlight font-600 mb-n1" style="line-height: 1;">Number</p>
                                            <h6 class="mt-1"><?= $tvalue['id'] ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-4 pl-1">
                                        <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                            <p class="color-highlight font-600 mb-n1" style="line-height: 1;">Comission</p>
                                            <h6 class="color-red-light mt-1"><?= rs().$value['single_commission'] ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-5 pl-1">
                                        <div class="mx-0 mb-2 pr-3 pl-3 pb-0 text-center">
                                            <a href="<?= $link ?>" class="btn btn-xxs btn-full rounded-xl text-uppercase font-900 shadow-s <?php if($value['id'] == getUser()['plan'] && dailyRemaining() != 0){ ?> bg-red-light <?php }else{ ?>btm-disabled-k<?php } ?>">Place Order</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-12 pl-1">
                                        <div class="mx-0 mb-2 pr-3 pl-3 pb-0">
                                            <p class="color-red-light mt-1 text-right"><?= $tvalue['unit_done'] ?> already earned, available <?= $tvalue['unit'] - $tvalue['unit_done'] ?> unit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>