<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Password.title_reset') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1><?= lang('Password.title_reset') ?></h1>
    <p><?= lang('Password.reset_success') ?></p>
    <p><a href="<?= site_url("/login") ?>"><?= lang('Login.title') ?></a></p>
<?= $this->endSection() ?>
