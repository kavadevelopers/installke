<div class="page-content">
    <div class="card card-style">
        <div class="content px-4">
            <div class="content">
                <?php if(!empty($this->session->flashdata('success'))){ ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('success') ?>
                    </div>
                <?php } ?>
            </div>
            <form method="post" action="<?= base_url('profile/save_password') ?>">
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-lock"></i>
                    <span>New Password</span>
                    <input type="password" name="pass" autocomplete="off" onkeyup="checkPass();" id="passwordNum" placeholder="New Password" required>
                </div>
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-lock"></i>
                    <span>Confirm Password</span>
                    <input type="password" name="cpass" autocomplete="off" onkeyup="checkPass();" id="CpasswordNum" placeholder="Confirm Password" required>
                    <p style="color: red;" class="mb-0 missmatch"></p>
                </div>
                <button type="submit" id="changePassBtn" class="btn has-icon btn-full btn-l font-600 font-13 gradient-highlight mt-4 rounded-s" style="width: 100%;">Change Password</button>
            </form>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mt-0 mb-0">
            <div class="list-bgroup list-custom-small list-icon-0">
                <a href="<?= base_url('login/logout') ?>" class="d-block-k">
                    <i class="fa fa-power-off rounded-sm bg-red-light"></i><span>Logout</span><i class="fa fa-angle-right"></i></a></i>
                </a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	function checkPass(){
     	var pass  = document.getElementById("passwordNum").value;
     	var rpass  = document.getElementById("CpasswordNum").value;
        if(pass != rpass){
            document.getElementById("changePassBtn").disabled = true;
            $('.missmatch').html("Entered Password is not matching!! Try Again");
        }else{
            $('.missmatch').html("");
            document.getElementById("changePassBtn").disabled = false;
        }
	}
</script>