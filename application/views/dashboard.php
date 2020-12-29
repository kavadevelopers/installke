<div class="row mb-0">
    <a href="#" class="col-6 pr-1 pl-3">
        <div class="card mr-0 card-style">
            <div class="d-flex pt-2 pb-1">
                <div class="align-self-center">
                    <h5 class="pl-2 ml-1 mb-0">0</h5>
                </div>
            </div>
            <p class="px-3">
                Daily Remaining
            </p>
        </div>
    </a>
    <a href="#" class="col-6 pl-1 pr-3">
        <div class="card ml-0 card-style">
            <div class="d-flex pt-2 pb-1">
                <div class="align-self-center">
                    <h5 class="pl-2 ml-1 mb-0">4</h5>
                </div>
            </div>
            <p class="px-3">
                Quest Accepted
            </p>
        </div>
    </a>
</div>

<a href="<?= base_url('profile/invite') ?>">
    <div class="card card-style bg-primary-k">
        <div class="d-flex pt-3 mt-1 mb-2 pb-2">
            <div class="align-self-center">
                <i class="color-icon-gray color-white font-30 icon-40 text-center fa fa-users ml-3"></i>
            </div>
            <div class="align-self-center">
                <p class="pl-2 ml-1 color-highlight font-500 mb-n1 mt-n1 color-white">Tap to Send</p>
                <h4 class="show-on-theme-light color-white pl-2 ml-1 mb-0 ">Invite</h4>
            </div>
        </div>
    </div>
</a>

<div class="single-slider owl-carousel owl-no-dots mb-0">
    <?php foreach (getSlider() as $key => $value) { ?>
        <a href="<?= $value['link'] ?>" class="card card-style" data-card-height="150" style="background-image: url(<?= base_url(get_setting()['admin_folder'].'/uploads/banner/').$value['image'] ?>);">
        </a>    
    <?php } ?>
</div>

<div class="card card-style mt-1">
    <div class="content">
        <h5 class="font-14 opacity-50">Total Profit <?= rs() ?>1200</h5>
        <div class="divider mb-3"></div>
        <div class="d-flex mb-3">
            <div class="mr-3 pr-1">
                <a href="#" class="icon icon-m mt-1 rounded-m gradient-green"><i class="fa fa-university"></i></a>
            </div>
            <div>
                <p class="font-11 mb-0">Available Balance</p>
                <h2><?= rs() ?>1200</h2>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="mr-3 pr-1">
                <a href="#" class="icon icon-m mt-1 rounded-m gradient-blue"><i class="fa fa-bars"></i></a>
            </div>
            <div>
                <p class="font-11 mb-0">Today's Profit</p>
                <h2><?= rs() ?>120</h2>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="mr-3 pr-1">
                <a href="#" class="icon icon-m mt-1 rounded-m gradient-orange"><i class="fa fa-list-ul"></i></a>
            </div>
            <div>
                <p class="font-11 mb-0">This week's profit</p>
                <h2><?= rs() ?>500</h2>
            </div>
        </div>
        <div class="d-flex">
            <div class="mr-3 pr-1">
                <a href="#" class="icon icon-m mt-1 rounded-m gradient-orange"><i class="fa fa-list-alt"></i></a>
            </div>
            <div>
                <p class="font-11 mb-0">This month's profit</p>
                <h2><?= rs() ?>800</h2>
            </div>
        </div>
    </div>
</div>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="card-style mt-1 mb-1" style="box-shadow: none;">
    <div class="col-12">
        <h2>Mission Hall</h2>
    </div>
</div>
<div class="card card-style bg-blue-light mb-1" data-card-height="120" style="height: 120px;">
    <div class="card-top pt-3 pl-3 ml-2 mt-2">
        <h1 class="color-white font-30">Facebook</h1>
        <h4 class="color-white opacity-50">like, subscribe, comment</h4>
    </div>
    <div class="card-top">
        <a href="#" class="icon icon-xl bg-white color-blue-light float-right mt-4 mr-3 rounded-m"><i class="fa fa-facebook font-24"></i></a>
    </div>
    <div class="card-overlay bg-black opacity-30"></div>
</div>
<div class="card card-style gradient-red mb-1" data-card-height="120" style="height: 120px;">
    <div class="card-top pt-3 pl-3 ml-2 mt-2">
        <h1 class="color-white font-30">Instagram</h1>
        <h4 class="color-white opacity-50">like, subscribe, comment</h4>
    </div>
    <div class="card-top">
        <a href="#" class="icon icon-xl bg-white color-red-dark float-right mt-4 mr-3 rounded-m"><i class="fa fa-instagram font-24"></i></a>
    </div>
    <div class="card-overlay bg-black opacity-30"></div>
    <div class="to-be-unlock-container">
        <div class="col-12">
            <p class="icon-to-be-uplock"><i class="fa fa-lock"></i></p>
            <p class="p-to-be-uplock">To be unlock</p>            
        </div>
    </div>
</div>

<div class="card card-style bg-teal-light mb-1" data-card-height="120" style="height: 120px;">
    <div class="card-top pt-3 pl-3 ml-2 mt-2">
        <h1 class="color-white font-30">Twiter</h1>
        <h4 class="color-white opacity-50">comment</h4>
    </div>
    <div class="card-top">
        <a href="#" class="icon icon-xl bg-white color-teal-light float-right mt-4 mr-3 rounded-m"><i class="fa fa-twitter font-24"></i></a>
    </div>
    <div class="card-overlay bg-black opacity-30"></div>
    <div class="to-be-unlock-container">
        <div class="col-12">
            <p class="icon-to-be-uplock"><i class="fa fa-lock"></i></p>
            <p class="p-to-be-uplock">To be unlock</p>            
        </div>
    </div>
</div>

<div class="card card-style bg-red-light mb-1" data-card-height="120" style="height: 120px;">
    <div class="card-top pt-3 pl-3 ml-2 mt-2">
        <h1 class="color-white font-30">Youtube</h1>
        <h4 class="color-white opacity-50">comment, forward</h4>
    </div>
    <div class="card-top">
        <a href="#" class="icon icon-xl bg-white color-red-light float-right mt-4 mr-3 rounded-m"><i class="fa fa-youtube font-24"></i></a>
    </div>
    <div class="card-overlay bg-black opacity-30"></div>
    <div class="to-be-unlock-container">
        <div class="col-12">
            <p class="icon-to-be-uplock"><i class="fa fa-lock"></i></p>
            <p class="p-to-be-uplock">To be unlock</p>            
        </div>
    </div>
</div>




<div class="card-style mt-3 mb-1" style="box-shadow: none;">
    <div class="col-12">
        <h2>Leaderboard</h2>
    </div>
</div>

<div class="row mb-0">
    <a href="#" class="col-4 pr-1 pl-3 mt-4">
        <div class="card mr-0 card-style">
            <div class="d-flex pt-2 pb-1">
                <img src="<?= base_url('assets/images/ranking/03.png') ?>" style="width: 100%;">
            </div>
            <p class="px-3 mb-0 text-center color-black">
                123****123
            </p>
            <h5 class="text-center color-primary-k mb-0">1234</h5>
            <p class="px-3 mb-0 text-center mb-2">
                Today task 55
            </p>
        </div>
    </a>
    <a href="#" class="col-4 pl-1 pr-1">
        <div class="card ml-0 mr-0 card-style">
            <div class="d-flex pt-2 pb-1">
                <img src="<?= base_url('assets/images/ranking/01.png') ?>" style="width: 100%;">
            </div>
            <p class="px-3 mb-0 text-center color-black">
                989****898
            </p>
            <h5 class="text-center color-primary-k mb-0">1234</h5>
            <p class="px-3 mb-0 text-center mb-2">
                Today task 55
            </p>
        </div>
    </a>
    <a href="#" class="col-4 pl-1 pr-3 mt-4">
        <div class="card ml-0 card-style">
            <div class="d-flex pt-2 pb-1">
                <img src="<?= base_url('assets/images/ranking/02.png') ?>" style="width: 100%;">
            </div>
            <p class="px-3 color-black mb-0 text-center">
                123****123
            </p>
            <h5 class="text-center color-primary-k mb-0">1234</h5>
            <p class="px-3 mb-0 text-center mb-2">
                Today task 55
            </p>
        </div>
    </a>
</div>


