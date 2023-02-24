<?= $this->include("temp/layout/sbscript"); ?>

<script>
    var dataTable = null;

    $(document).ready(function() {
        dataTable = $('#itemTable').DataTable({
            'processing': true,
            'serverSide': true,
            'order': [],
            'ajax': {
                'url': '<?php echo base_url('item/getItems'); ?>',
                'type': 'POST'
            },
            'columnDefs': [{
                'targets': [3],
                'orderable': false,
            }]
        });
    });

    function reloadTable() {
        dataTable.ajax.reload(null, false);
    }

    function createItem() {
        $.ajax({
            url: '<?php echo base_url('item/createItem'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                name: $('#name').val(),
                description: $('#description').val(),
                price: $('#price').val(),
            },
            success: function(data) {
                if (data.success) {
                    $('#createModal').modal('hide');
                    reloadTable();
                } else {
                    alert(data.message);
                }
            }
        });
    }

    function editItem(id) {
        $.ajax({
            url: '<?php echo base_url('item/getItemById'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                id: id,
            },
            success: function(data) {
                if (data.success) {
                    $('#edit_id').val(data.item.id);
                    $('#edit_name').val(data.item.name);
                    $('#edit_description').val(data.item.description);
                    $('#edit_price').val(data.item.price);
                    $('#editModal').modal('show');
                } else {
                    alert(data.message);
                }
            }
        });
    }

    function updateItem() {
        $.ajax({
            url: '<?php echo base_url('item/updateItem'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                id: $('#edit_id').val(),
                name: $('#edit_name').val(),
                description: $('#edit_description').val(),
                price: $('#edit_price').val(),
            },
            success: function(data) {
                if (data.success) {
                    $('#editModal').modal('hide');
                    reloadTable();
                } else {
                    alert(data.message);
                }
            }
        });
    }

    function deleteItem() {
        $.ajax({
            url: '<?php echo base_url('item/deleteItem'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                id: $('#delete_id').val(),
            },
            success: function(data) {
                if (data.success) {
                    $('#deleteModal').modal('hide');
                    reloadTable();
                } else {
                    alert(data.message);
                }
            }
        });
    }
</script>

<?= $this->renderSection("script"); ?>