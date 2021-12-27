<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Tasks.delete_task') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1><?= lang('Tasks.delete_task') ?></h1>

    <p><?= lang('Tasks.are_you_sure') ?></p>

    <?= form_open("/tasks/delete/" . $task->id) ?>
        <button>Yes</button>
        <a href="<?= site_url('/tasks/show/' . $task->id) ?>"><?= lang('Tasks.cancel') ?></a>
        
    </form>
<?= $this->endSection() ?>
