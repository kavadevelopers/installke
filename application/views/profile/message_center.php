<div class="page-content">
	<?php foreach ($list as $key => $value) { ?>
		<div class="card card-style mb-2">
	        <div class="content mt-0 mb-0">
	            <div class="list-group list-custom-large">
	                <a href="<?= $value['link'] ?>">
	                    <span><?= $value['title'] ?></span>
	                    <strong><?= getPretyDateTime($value['created_at']) ?></strong>
	                    <i class="fa fa-chevron-right"></i>
	                </a>
	            </div>
	        </div>
	    </div>
	<?php } ?>
</div>