<div class="page-content">
	<div class="card card-style">
        <div class="content">
            <h4>Upload Details</h4>
            <div class="mt-4 mb-3">
                <form method="post" action="<?= base_url('record/save_send') ?>" enctype="multipart/form-data">
                    <div class="input-style input-style-2 mb-3 pb-1">
                        <span class="input-style-1-active">Upload Proof</span>
                        <input type="file" placeholder="" name="file" required>
                    </div>
                    <input type="hidden" name="id" value="<?= $record['id'] ?>">
                    <a href="<?= $task['link'] ?>" class="btn btn-full btn-m gradient-highlight rounded-s font-13 font-600 mt-4">Link</a>
                    <button type="submit" class="btn btn-full btn-m gradient-highlight rounded-s font-13 font-600 mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>