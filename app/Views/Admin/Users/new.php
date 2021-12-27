<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('AdminUsers.new') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title"><?= lang('AdminUsers.new') ?></h1>
    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif ?>

    <?= form_open("/admin/users/create") ?>
        <?= $this->include('Admin/Users/form') ?>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('AdminUsers.save') ?></button>
            </div>
        <a href="<?= site_url("/admin/users") ?>"><?= lang('AdminUsers.cancel') ?></a>
        </div>
    </form>
<?= $this->endSection() ?>
