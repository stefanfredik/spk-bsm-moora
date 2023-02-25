<?= $this->extend('index') ?>

<?= $this->section('content') ?>
<h1>Show User</h1>
<p><strong>Name:</strong> <?= $user['name'] ?></p>
<p><strong>Email:</strong> <?= $user['email'] ?></p>
<p><strong>Phone:</strong> <?= $user['phone'] ?></p>
<a href="<?= base_url('/users') ?>" class="btn btn-primary">Back</a>
<?= $this->endSection() ?>