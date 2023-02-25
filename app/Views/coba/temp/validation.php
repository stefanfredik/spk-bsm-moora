<?php if (isset($errors)) : ?>
    <?php foreach ($errors as $field => $messages) : ?>
        <?php foreach ($messages as $message) : ?>
            <script>
                $('input[name="<?= $field ?>"]').addClass('is-invalid');
                $('input[name="<?= $field ?>"] + .invalid-feedback').append('<div><?= $message ?></div>');
            </script>
        <?php endforeach; ?>
    <?php endforeach; ?>
<?php endif; ?>