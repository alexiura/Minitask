<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>


<?php if (! session()->has('user_id')): ?>
        
    <div style="width: 200px; height: 200px; margin: 100px 100px; display: inline">
            <h3>CodeIgniter</h3>
            <div>
                <a class="btn btn-primary" data-toggle="collapse" href="<?= site_url("/signup") ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                Inregistreaza-te
                 </a>

                 <a class="btn btn-primary" data-toggle="collapse" href="<?= site_url("/login") ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                 Autentifica-te
                 </a>
            </div>
        </div>
        
    <?php endif; ?>



<?= $this->endSection() ?>
