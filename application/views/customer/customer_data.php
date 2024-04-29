<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>Customers
                    <small style="color: gray;">Pelanggan</small>
                </h2> 
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item active">Customer</li>
                </ol>
            </div>
        </div>
    </div>
</section>

   
<!-- Main Content -->
<section class="content">
    <?php 
        // $this->view('messages') 
    ?>
    <div id="flash" data-flash="<?=$this->session->flashdata('success');?>"></div>

    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px; margin-left: 10px;">
                    <h3 class="box-title">Data Customers</h3>
                </div>
                <div class="col-md-6 text-right" style="margin-top: 10px; margin-right: 10px;">
                    <a href="<?=site_url('customer/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Create
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped" style="background-color: white;"  id="table1" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?= $no++?>.</td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->gender ?></td>
                        <td><?= $data->phone ?></td>
                        <td><?= $data->address ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('customer/edit/'.$data->customer_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil-alt"></i> Update
                            </a>
                            <a href="<?=site_url('customer/del/'.$data->customer_id)?>" id="btn-hapus" class="btn btn-danger btn-xs">
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
