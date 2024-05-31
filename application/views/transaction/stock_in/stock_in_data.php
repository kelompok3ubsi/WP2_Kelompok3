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
                <h2>Stock In</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item active">Data Stock In</li>
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
        <div class="card-header" >
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px; margin-left: 10px;">
                    <h3 class="box-title">Data Stock In</h3>
                </div>
                <button class="create" onclick="window.location.href='<?=site_url('stock/in/add')?>'">
                    <i class="fa fa-plus"></i> Add Stock In
                </button>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped" style="background-color: white;" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Product Item</th>
                        <th>Qty</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            <tbody>
            <?php $no = 1;
                foreach($row as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?= $no++?>.</td>
                        <td><?= $data->barcode ?></td>
                        <td><?= $data->item_name ?></td>
                        <td class="text-right"><?= $data->qty ?></td>
                        <td class="text-right"><?=indo_date($data->date)?></td>
                        <td class="text-center" width="160px">
                            <a id="set_dtl" class="btn btn-default btn-xs" 
                                data-toggle="modal" data-target="#modal-detail"
                                data-barcode="<?=$data->barcode?>"
                                data-itemname="<?=$data->item_name?>"
                                data-detail="<?=$data->detail?>"
                                data-suppliername="<?=$data->supplier_name?>"
                                data-qty="<?=$data->qty?>"
                                data-date="<?=indo_date($data->date)?>">
                                <i class="fa fa-eye"></i> Detail
                            </a>
                            <a href="<?=site_url('stock/in/del/'.$data->stock_id.'/'.$data->item_id)?>" id="btn-hapus" class="btn btn-danger btn-xs">
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


<div class="modal fade" id="modal-detail">
        <div class="modal-dialog" style="margin: 10; max-width: 40%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Stock In Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 <div class="modal-body table-responsive">
                    <table class="table table-bordered no-margin">
                        <tbody>
                            <tr>
                                <th style="width:50%">Barcode</th>
                                <td><span id="barcode"></span></td>
                            </tr>
                            <tr>
                                <th>Item Name</th>
                                <td><span id="item_name"></span></td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td><span id="detail"></span></td>
                            </tr>
                            <tr>
                                <th>Supplier Name</th>
                                <td><span id="supplier_name"></span></td>
                            </tr>
                            <tr>
                                <th>Qty</th>
                                <td><span id="qty"></span></td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td><span id="date"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(document).on('click', '#set_dtl', function(){
                var barcode = $(this).data('barcode');
                var itemname = $(this).data('itemname');
                var detail = $(this).data('detail');
                var suppliername = $(this).data('suppliername');
                var qty = $(this).data('qty');
                var date = $(this).data('date');
                $('#barcode').text(barcode);
                $('#item_name').text(itemname);
                $('#detail').text(detail);
                $('#supplier_name').text(suppliername);
                $('#qty').text(qty);
                $('#date').text(date);
                $('#detail').text(detail);
            })
        })
    </script>