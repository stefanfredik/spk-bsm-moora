<?= $this->extend('index') ?>

<?= $this->section('content') ?>
<form id="delete-user-form" method="post">
    <h1>Delete User</h1>
    <p>Are you sure you want to delete this user?</p>
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">Yes</button>
    <a href="<?= base_url('/coba') ?>" class="btn btn-primary">No</a>
</form>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        $('#delete-user-form').on('submit', function(event) {
            event.preventDefault();

            var id = <?= $user['id'] ?>;

            axios.delete('/coba/delete/' + id)
                .then(function(response) {
                    showAlert(response.data.message, 'success');
                    window.location.href = '/users';
                })
                .catch(function(error) {
                    showAlert(error.response.data.message, 'error');
                });
        });
    });
</script>
<?= $this->endSection() ?>