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
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Items</li>
                </ol>
            </div>
        </div>
    </div>
</section>

   
<!-- Main Content -->
<section class="content">
    <?php $this->view('messages') ?>
    <div class="card card-outline card-primary">
        <div class="card-header" >
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px;">
                    <h3 class="box-title">Data Product Items</h3>
                </div>
                <div class="col-md-6 text-right" style="margin-top: 10px;">
                    <a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Create Product Item
                    </a>
                </div>
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
                            <a href="<?=site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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
</script>
