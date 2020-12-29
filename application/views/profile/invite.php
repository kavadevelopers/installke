<div class="page-content">
    <div class="card card-style mb-2">
        <div class="content mt-0 mb-0">
            <div class="list-group list-custom-large">
                <a href="#" data-toast="snackbar-1" onclick="copyToClipboard('#codeCopy')" data-text="<?= getUser()['usercode'] ?>" id="codeCopy">
                    <i class="fa font-18 fa-shopping-bag color-brown-dark"></i>
                    <span>Invitation Code : <?= getUser()['usercode'] ?></span>
                    <strong>Click to copy</strong>
                    <i class="fa fa-files-o"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card card-style mb-3">
        <div class="content mt-0 mb-0">
            <div class="list-group list-custom-large">
                <a href="#" data-toast="snackbar-1" onclick="copyToClipboard('#linkCopy')" data-text="<?= base_url('register?inv=').getUser()['usercode'] ?>" id="linkCopy">
                    <i class="fa font-18 fa-link color-brown-dark"></i>
                    <span>Invitation Link</span>
                    <strong>Click to copy</strong>
                    <i class="fa fa-files-o"></i>
                </a>
            </div>
        </div>
    </div>


    <div class="card card-style">
        <div class="content mb-2">
            <h4>Content of promo</h4>
            <p class="mb-1">
                <?= get_setting()['invitetext'] ?>
            </p>
            <div class="divider mb-0"></div>
            <a href="#" data-toast="snackbar-1" onclick="copyToClipboard('#contentToCopy')" data-text="<?= get_setting()['invitetext'] ?> Link : <?= base_url('register?inv=').getUser()['usercode'] ?>" id="contentToCopy" class="btn btn-full btn-m font-600 font-13 mt-0 rounded-s mt-0 mb-2 gradient-blue">Copy</a>
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