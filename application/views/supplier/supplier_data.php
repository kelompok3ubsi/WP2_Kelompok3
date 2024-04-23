<section class="content-header">
  
    <h2>Suppliers
        <small style="color: gray;">Pemasok Barang</small>
    </h2>   
      
</section>

   
<!-- Main Content -->
<section class="content">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px; margin-left: 10px;">
                    <h3 class="box-title">Data Suppliers</h3>
                </div>
                <div class="col-md-6 text-right" style="margin-top: 10px; margin-right: 10px;">
                    <a href="<?=site_url('supplier/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Create
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped" style="background-color: white;" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?= $no++?>.</td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->phone ?></td>
                        <td><?= $data->address ?></td>
                        <td><?= $data->description?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('supplier/edit/'.$data->supplier_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil-alt"></i> Update
                            </a>
                            <a href="<?=site_url('supplier/del/'.$data->supplier_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php 
                } ?>
            </tbody>
        </table>
    </div>
</div>


    </section>
