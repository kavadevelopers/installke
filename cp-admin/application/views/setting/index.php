<div class="page-header">
    <div class="row align-items-end">
        <div class="col-md-12">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4><?= $_title ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="card">
        <form method="post" action="<?= base_url('setting/save') ?>">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Company Name <span class="-req">*</span></label>
                            <input name="company" type="text" class="form-control" value="<?= set_value('company',get_setting()['name']); ?>" >
                            <?= form_error('company') ?>
                        </div>
                    </div> 
                    <!-- <div class="col-md-4">
                        <div class="form-group">
                            <label>Recaptcha Key <span class="-req">*</span></label>
                            <input name="recatcha_key" type="text" class="form-control" value="<?= set_value('recatcha_key',get_setting()['recatcha_key']); ?>" >
                            <?= form_error('recatcha_key') ?>
                        </div>
                    </div> --> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tawk To Link <span class="-req">*</span></label>
                            <input name="talktolink" type="text" class="form-control" value="<?= set_value('talktolink',get_setting()['talktolink']); ?>" >
                            <?= form_error('talktolink') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Invite Text <span class="-req">*</span></label>
                            <textarea name="invitetext" type="text" rows="5" class="form-control"><?= set_value('invitetext',get_setting()['invitetext']); ?></textarea>
                            <?= form_error('invitetext') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pay you money MerchantKey <span class="-req">*</span></label>
                            <input name="pay_merchant" type="text" class="form-control" value="<?= set_value('pay_merchant',get_setting()['pay_merchant']); ?>">
                            <?= form_error('pay_merchant') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pay you money SALT <span class="-req">*</span></label>
                            <input name="pay_salt" type="text" class="form-control" value="<?= set_value('pay_salt',get_setting()['pay_salt']); ?>">
                            <?= form_error('pay_salt') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pay you money URL <span class="-req">*</span></label>
                            <input name="pay_url" type="text" class="form-control" value="<?= set_value('pay_url',get_setting()['pay_url']); ?>">
                            <?= form_error('pay_url') ?>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-success" type="submit">
                    <i class="fa fa-save"></i> Save
                </button>
            </div>
        </form>
    </div>
</div>