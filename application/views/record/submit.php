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

    <div class="card card-style mt-3 mb-3">
        <div class="content">
            <h1 class="mb-1">How It Works</h1>
            <p class="mt-1 mb-2">
                1. Click link to open facebook than share post take a screenshot.
            </p>
            <p class="mt-1 mb-2">
                2. upload screenshot to this app.
            </p>
            <p class="mt-1 mb-2">
                3. Click submit to save data.
            </p>
        </div>
    </div>
</div>