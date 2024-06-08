<style>
    .create {
  font-size: 15px;
  padding: 0rem 1.2rem;
  border: none;
  outline: none;
  border-radius: 0.4rem;
  cursor: pointer;
  text-transform: uppercase;
  background-color: rgb(14, 14, 26);
  color: rgb(234, 234, 234);
  font-weight: 700;
  transition: 0.6s;
  box-shadow: 0px 0px 60px #1f4c65;
}

.create:active {
  scale: 0.92;
}

.create:hover {
  background: rgb(2,29,78);
  background: linear-gradient(270deg, rgba(2, 29, 78, 0.681) 0%, rgba(31, 215, 232, 0.873) 60%);
  color: rgb(4, 4, 38);
}
</style>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>Items
                    <small style="color: gray;">Data Barang</small>
                </h2>  
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item active">Items</li>
                </ol>
            </div>
        </div>
    </div>
</section>

   
<!-- Main Content -->
<section class="content">
    <?php
    //  $this->view('messages') 
    ?>
        <div id="flash" data-flash="<?=$this->session->flashdata('success');?>"></div>
    <div class="card card-outline card-primary">
        <div class="card-header" >
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px;">
                    <h3 class="box-title">Data Product Items</h3>
                </div>
                <button class="create" onclick="window.location.href='<?=site_url('item/add')?>'">
                    <i class="fa fa-plus"></i> Create Product Item
                </button>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped" style="background-color: white;" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                <!-- <?php $no = 1;
                foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?= $no++?>.</td>
                        <td>
                            <?= $data->barcode?><br>
                            <a href="<?=site_url('item/barcode_qrcode/'.$data->item_id)?>" class="btn btn-default btn-xs">
                                Generate <i class="fa fa-barcode"></i>
                            </a>
                        </td>
                        <td><?= $data->name?></td>
                        <td><?= $data->category_name?></td>
                        <td><?= $data->unit_name?></td>
                        <td class="text-right"><?=$data->price?></td>
                        <td class="text-right"><?=$data->stock?></td>
                        <td>
                            <?php if($data->image != null) { ?>
                            <img src="<?=base_url('uploads/product/'.$data->image)?>" style="width:100px">
                            <?php } ?>
                        </td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('item/edit/'.$data->item_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil-alt"></i> Update
                            </a>
                            <a href="<?=site_url('item/del/'.$data->item_id)?>" id="btn-hapus" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php 
                } ?>  -->
            </tbody>
        </table>
    </div>
</div>
</section>

<script>
  $(document).ready(function() {
    $('#table1').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?=site_url('item/get_ajax')?>",
            "type": "POST"
        },
        "columnDefs": [
            {
                "targets": [5, 6],
                "className": 'text-right'
            },
            {
                "targets": [7, -1],
                "className": 'text-center'
            },
            {
                "targets": [0, 7, -1],
                "orderable": false
            }
        ],
        "order": []
    });
  });

  $(document).on('click', '#btn-hapus', function(e) {
    e.preventDefault();
    var link = $(this).attr('href');

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger mr-3"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Apakah Anda yakin?",
        text: "Data akan dihapus loh ges!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Cancel",
        reverseButtons: true,
        showClass: {
            popup: `
                animate__animated
                animate__bounceInDown
            `
        },
    }).then((result) => {
        if (result.isConfirmed) {
            // Menggunakan AJAX untuk menghapus item
            $.ajax({
                type: 'GET',
                url: link,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Jika penghapusan berhasil, tampilkan alert sukses
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Item berhasil dihapus!'
                        }).then(() => {
                            // Refresh halaman setelah menutup alert
                            window.location.reload();
                        });
                    } else {
                        // Jika terjadi kesalahan, tampilkan alert gagal
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Terjadi kesalahan saat menghapus item.'
                        });
                    }
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // Tampilkan alert bahwa penghapusan dibatalkan
            swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Alhamdulillah, data masih aman 😊",
                icon: "error"
            });
        }
    });
});

</script>