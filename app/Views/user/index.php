<?= $this->extend('temp/index'); ?>
<?= $this->section('content'); ?>
<div class="px-4 mt-n10">
    <div class="card card-icon mb-4">
        <div class="row g-0">
            <div class="col-auto card-icon-aside bg-primary"><i class="me-1 text-white-50" data-feather="users"></i></div>
            <div class="col">
                <div class="card-body py-5">
                    <h5 class="card-title"><?= $title; ?></h5>
                    <p class="card-text">Jumlah User : </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Table User</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><i class="me-1 text-primary rounded" data-feather="user"></td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>
                                <div class="badge bg-primary text-white rounded-pill">Full-time</div>
                            </td>
                            <td>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></button>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<!-- script -->
<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
<?= $this->endSection(); ?>