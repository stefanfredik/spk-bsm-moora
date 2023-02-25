<?= $this->extend('coba/temp/index') ?>

<?= $this->section('content') ?>
<form id="create-user-form" method="post">
    <h1>Create User</h1>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
        <div class="invalid-feedback"></div>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
        <div class="invalid-feedback"></div>
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone">
        <div class="invalid-feedback"></div>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>

<script>
    $(document).ready(function() {
        $('#create-user-form').on('submit', function(event) {
            event.preventDefault();

            clearValidationErrors();

            var formData = $(this).serialize();

            axios.post('/coba/store', formData)
                .then(function(response) {
                    showAlert(response.data.message, 'success');
                    $('#create-user-form')[0].reset();
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
<?= $this->endSection() ?>