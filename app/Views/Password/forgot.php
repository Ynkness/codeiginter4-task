<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Password.title') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title"><?= lang('Password.title') ?></h1>
    <?= form_open("/password/processforgot") ?>
        <div>
            <label for="email"><?= lang('Password.email') ?></label>
            <input type="text" name="email" id="email" value="<?= old('email')?>">
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('Password.send') ?></button>
            </div>
        </div>
    </form>
<?= $this->endSection() ?>
