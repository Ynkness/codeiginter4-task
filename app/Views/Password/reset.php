<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Password.title_reset') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1><?= lang('Password.title_reset') ?></h1>
    <?php if(session()->has('errors')) : ?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

    <?= form_open("/password/processreset/$token") ?>
        <div>
            <label for="password"><?= lang('Password.password') ?></label>
            <input type="password" name="password">
        </div>

        <div>
            <label for="password_confirmation"><?= lang('Password.repeat_password') ?></label>
            <input type="password" name="password_confirmation">
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('Password.reset_password') ?></button>
            </div>
        </div>
    </form>
<?= $this->endSection() ?>
