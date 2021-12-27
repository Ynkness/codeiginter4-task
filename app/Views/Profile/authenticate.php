<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Profile.title_edit') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title"><?= lang('Profile.title_edit') ?></h1>
    <p><?= lang('Profile.enter_password') ?></p>
    <?= form_open("/profile/processauthenticate")?>
    <div>
        <label for="password"><?= lang('Profile.password') ?></label>
        <input type="password" name="password">
    </div>

    <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('Profile.send') ?></button>
                <a class="button" href="<?= site_url('/profile/show')?>"><?= lang('Profile.cancel') ?></a>
            </div>
        </div>
<?= $this->endSection() ?>