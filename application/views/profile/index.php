<div class="page-content">
    <div class="mb-4">
        <div class="divider mb-4"></div>
        <div class="d-flex content mt-0 mb-1">
            <div>
                <img src="<?= base_url('assets/images/avatars/5s.png'); ?>" data-src="<?= base_url('assets/images/avatars/5s.png'); ?>" width="85" class="rounded-circle mr-3 shadow-xl preload-img">
            </div>
            <div class="flex-grow-1">
                <h2><?= replaceMobileStar(getUser()['mobile']) ?></h2>
                <a href="#" class="mt-3 btn btn-xs font-600 btn-border border-highlight color-highlight" data-toast="snackbar-1" onclick="copyToClipboard('#codeCopy')" data-text="<?= getUser()['usercode'] ?>" id="codeCopy">Invite Code : <?= getUser()['usercode'] ?></a>
            </div>
        </div>
    </div>

    <div class="card card-style" data-card-height="150" style="background: linear-gradient(to right, #c9c9c9 0%, #ababab 100%);">
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
                </div>
            </div>
        </div>
    </div>


    <div class="card card-style mt-n3">
        <div class="content mb-2 mt-3">
            <div class="d-flex">
                <div class="pr-4 col-12 text-center">
                    <p class="font-600 color-highlight mb-0">Your Balance</p>
                    <h1><?= rs() ?> <?= getUser()['wallet'] ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style mt-n3">
        <div class="content mb-2 mt-3">
            <div class="d-flex">
                <div class="pr-4 col-12 text-center">
                    <p class="font-600 color-highlight mb-0">Mission Rewards</p>
                    <h1><?= getUser()['mission_rewards'] ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mb-1 mt-n3">
        <div class="row mb-0">
            <div class="col-6 pr-1">
                <div class="card card-style mx-0 mb-2 p-3">
                    <h6 class="font-14">Member Comission</h6>
                    <h3 class="mb-0"><?= rs() ?> <?= getUser()['member_comission'] ?></h3>
                </div>
            </div>
            <div class="col-6 pl-1">
                <div class="card card-style mx-0 mb-2 p-3">
                    <h6 class="font-14">Mission Comission</h6>
                    <h3 class="mb-0"><?= rs() ?> <?= getUser()['mission_comission'] ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="content mb-2 mt-1">
        <div class="row mb-0">
            <div class="col-6 pr-1">
                <a href="#" style="width: 100%;" class="btn btn-full color-white btn-m gradient-highlight rounded-s font-13 font-600">Deposit</a>
            </div>
            <div class="col-6 pl-1">
                <a href="#" style="width: 100%;" class="btn btn-full color-white btn-m gradient-highlight rounded-s font-13 font-600">Withdraw</a>
            </div>
        </div>
    </div>



    <div class="row mr-0 ml-0 mb-0">
        <a class="col-4 pl-0 pr-0" href="<?= base_url('profile/invite') ?>">    
            <div class="card card-style mb-2">
                <div class="content mb-0">
                    <div class="row justify-content-center mb-1">
                        <div class="col-12">
                            <p class="text-center mb-0 pb-0">
                                <i class="fa fa-user-plus color-green-dark scale-box fa-4x pt-3"></i>
                            </p>
                            <h1 class="text-center font-15 mt-1">Invite</h1>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a class="col-4 pl-0 pr-0">
            <div class="card card-style mb-2">
                <div class="content mb-0">
                    <div class="row justify-content-center mb-1">
                        <div class="col-12">
                            <p class="text-center mb-0 pb-0">
                                <i class="fa fa-users color-blue-dark scale-box fa-4x pt-3"></i>
                            </p>
                            <h1 class="text-center font-15 mt-1">Team</h1>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a class="col-4 pl-0 pr-0">
            <div class="card card-style mb-2">
                <div class="content mb-0">
                    <div class="row justify-content-center mb-1">
                        <div class="col-12">
                            <p class="text-center mb-0 pb-0">
                                <i class="fa fa-line-chart color-pink-dark scale-box fa-4x pt-3"></i>
                            </p>
                            <h1 class="text-center font-15 mt-1">Profit</h1>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div class="card card-style">
        <div class="content mt-0 mb-0">
            <div class="list-bgroup list-custom-small list-icon-0">
                <a href="#" class="d-block-k">
                    <i class="fa fa-credit-card rounded-sm bg-blue-dark"></i><span>Withdrawal Record</span><i class="fa fa-angle-right"></i></a></i>
                </a>
                <a href="#" class="d-block-k">
                    <i class="fa fa-money rounded-sm bg-pink-dark"></i><span>Payment Record</span><i class="fa fa-angle-right"></i></a></i>
                </a>
                <a href="<?= base_url('profile/message_center') ?>" class="d-block-k">
                    <i class="fa fa-commenting rounded-sm bg-teal-dark"></i><span>Message Center</span><i class="fa fa-angle-right"></i></a></i>
                </a>
                <a href="<?= base_url('profile/personal_info') ?>" class="d-block-k">
                    <i class="fa fa-user rounded-sm bg-brown-dark"></i><span>Personal Information</span><i class="fa fa-angle-right"></i></a></i>
                </a>
                <a href="<?= get_setting()['talktolink'] ?>" class="d-block-k" target="_blank">
                    <i class="fa fa-comments rounded-sm bg-gray-dark"></i><span>Contact Customer Service</span><i class="fa fa-angle-right"></i></a></i>
                </a>
                <a href="<?= base_url('profile/setting') ?>" class="d-block-k">
                    <i class="fa fa-cog rounded-sm bg-red-light"></i><span>Setting</span><i class="fa fa-angle-right"></i></a></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div id="snackbar-1" class="snackbar-toast color-white bg-highlight color-white" data-delay="3000" data-autohide="true"><i class="fa fa-files-o mr-3"></i>Text Copied..</div>

<script type="text/javascript">
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).data('text')).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>