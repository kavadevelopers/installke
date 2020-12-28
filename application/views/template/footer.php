			</div>
			<div id="menu-main" class="menu menu-box-left rounded-0" data-menu-width="280" data-menu-active="nav-welcome">
                <div class="card rounded-0 bg-6" style="height:150px">
                    <div class="card-top">
                        <a href="#" class="close-menu float-right mr-2 text-center mt-3 icon-40 notch-clear"><i class="fa fa-times color-white"></i></a>
                    </div>
                    <div class="card-bottom">
                        <h1 class="color-white pl-3 mb-n1 font-28"><?= get_setting()['name'] ?></h1>
                        <p class="mb-2 pl-3 font-12 color-white opacity-50">Welcome to the Future</p>
                    </div>
                    <div class="card-overlay bg-gradient"></div>
                </div>
                <div class="mt-4"></div>
                <h6 class="menu-divider">Library</h6>
                <div class="list-group list-custom-small list-menu">
                	<a href="<?= base_url('login/logout') ?>">
                    	<i class="fa fa-power-off gradient-red color-white"></i>
                    	<span>Logout</span>
                    	<i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
			<div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-height="370">
                <div class="menu-title">
                    <p class="color-highlight">Tap a link to</p>
                    <h1>Share</h1>
                    <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
                </div>
                <div class="divider divider-margins mt-3 mb-0"></div>
                <div class="content mt-0">
                    <div class="list-group list-custom-small list-icon-0">
                        <a href="#" class="shareToFacebook">
                        <i class="fab fa-facebook-f font-12 bg-facebook color-white shadow-l rounded-s"></i>
                        <span>Facebook</span>
                        <i class="fa fa-angle-right pr-1"></i>
                        </a>
                        <a href="#" class="shareToTwitter">
                        <i class="fab fa-twitter font-12 bg-twitter color-white shadow-l rounded-s"></i>
                        <span>Twitter</span>
                        <i class="fa fa-angle-right pr-1"></i>
                        </a>
                        <a href="#" class="shareToLinkedIn">
                        <i class="fab fa-linkedin-in font-12 bg-linkedin color-white shadow-l rounded-s"></i>
                        <span>LinkedIn</span>
                        <i class="fa fa-angle-right pr-1"></i>
                        </a>
                        <a href="#" class="shareToWhatsApp">
                        <i class="fab fa-whatsapp font-12 bg-whatsapp color-white shadow-l rounded-s"></i>
                        <span>WhatsApp</span>
                        <i class="fa fa-angle-right pr-1"></i>
                        </a>
                        <a href="#" class="shareToEmail border-0">
                        <i class="fa fa-envelope font-12 bg-mail color-white shadow-l rounded-s"></i>
                        <span>Email</span>
                        <i class="fa fa-angle-right pr-1"></i>
                        </a>
                    </div>
                </div>
            </div>
		</div>
      	<script type="text/javascript" src="<?= base_url('assets/') ?>scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>scripts/custom.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/kava/') ?>script.js"></script>
   	</body>
</html>