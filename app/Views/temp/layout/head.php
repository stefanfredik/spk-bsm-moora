<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= @$meta['title'] . " | " . APP_NAME; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= LOGO_IMG ?>" />

    <?= $this->include("temp/layout/sbstyles"); ?>
    <?= $this->renderSection("styles"); ?>
</head>