<?= $this->extend('index') ?>

<?= $this->section('content') ?>
<form id="edit-user-form" method="post">
    <h1>Edit User</h1>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>">
        <div class="invalid-feedback"></div>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>">
        <div class="invalid-feedback"></div>
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" value="<?= $user['phone'] ?>">
        <div class="invalid-feedback"></div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        $('#edit-user-form').on('submit', function(event) {
            event.preventDefault();

            clearValidationErrors();

            var formData = $(this).serialize();
            var id = <?= $user['id'] ?>;

            axios.put('/users/update/' + id, formData)
                .then(function(response) {
                    showAlert(response.data.message, 'success');
                })
                .catch(function(error) {
                    if (error.response.status == 422) {
                        showValidationErrors(error.response.data);
                    } else {
                        showAlert(error.response.data.message, 'error');
                    }
                });
        });
    });
</script>