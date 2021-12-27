<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Login.log_in') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title"><?= lang('Login.log_in') ?></h1>
    <div class="container">
    <?= form_open("/login/create") ?>
        <div class="field">
            <label class="label" for="email"><?= lang('Login.email') ?></label>
            <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
        </div>

        <div class="field">
            <label class="label" for="password"><?= lang('Login.password') ?></label>
            <input class="input" type="password" name="password">
        </div>

        <div class="field">
            <label class="cehckbox" for="rememder_me">
                <input type="checkbox" id="remember_me" name="remember_me"
                        <?php if (old('remember_me')):?>checked<?php endif;?>><?= lang('Login.remember_me') ?>
            </label>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('Login.log_in') ?></button>
            </div>
            <a href="<?= site_url("/password/forgot")?>"><?= lang('Login.forgot_password') ?></a>
        </div>
        
    </form>
    </div>
<?= $this->endSection() ?>
