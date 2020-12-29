<div class="page-content">
    <div class="card card-style">
        <div class="content">
            <?php if(!empty($this->session->flashdata('success'))){ ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
            <h4>Profile Information</h4>
            <div class="mt-4 mb-1">
                <div class="input-style input-style-2 mb-3 pb-1">
                    <span class="input-style-1-active">Mobile Number</span>
                    <input type="text" placeholder="Mobile" value="<?= replaceMobileStar(getUser()['mobile']) ?>" disabled>
                </div>
                <div class="input-style input-style-2 mb-3 pb-1">
                    <span class="input-style-1-active">Superior Account</span>
                    <input type="text" placeholder="Superior Account" value="<?= getSuperiorMobile(getUser()['invitation']); ?>" disabled>
                </div>
                <div class="input-style input-style-2 mb-3 pb-1">
                    <span class="input-style-1-active">Invitation Code</span>
                    <input type="text" placeholder="Invitation Code" value="<?= getUser()['usercode'] ?>" disabled>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <h4>Bank Information</h4>
            <p style="color: red;">
                Incorrect Information will affect your withdrawal
            </p>
            <div class="mt-4 mb-3">
                <form method="post" action="<?= base_url('profile/save_bank') ?>" id="registrationForm">
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Account Number</span>
                        <input type="text" placeholder="Account Number" name="acc_no" value="<?= getBank()['acc_no'] ?>" required>
                    </div>
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Account Name</span>
                        <input type="text" placeholder="Account Name" name="name" value="<?= getBank()['name'] ?>" required>
                    </div>
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Bank Name</span>
                        <input type="text" placeholder="Bank Name" name="bank" value="<?= getBank()['bank'] ?>" required>
                    </div>
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">IFSC Code</span>
                        <input type="text" placeholder="IFSC Code" name="ifsc" value="<?= getBank()['ifsc'] ?>" required>
                    </div>
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Paytm Account</span>
                        <input type="text" class="numbers" placeholder="Paytm Account" name="paytm" value="<?= getBank()['paytm'] ?>" required>
                    </div>
                    <button type="submit" style="width: 100%;" class="btn btn-full btn-m gradient-highlight rounded-s font-13 font-600 mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>