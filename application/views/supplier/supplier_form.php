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
                <div class="pull-right" style="margin-top: 15px; margin-left: 10px;" >
                    <h2 class="box-title"><?=ucfirst($page)?> Supplier</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat" style="margin-top: 20px;">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div>
                <div class="col-md-4 mx-auto">
                    <form action="<?=site_url('supplier/process')?>" method="post">
                        <div class="form-group">
                            <label>Supplier Name *</label>
                            <input type="hidden" name="id" value="<?=$row->supplier_id?>">
                            <input type="text" name="supplier_name" value="<?=$row->name?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="phone" value="<?=$row->phone?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address *</label>
                            <textarea name="addr" class="form-control" required><?=$row->address?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="desc" class="form-control"><?=$row->description?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                               <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="reset" class="btn btn-flat" style="background-color: #c4c2bb;">Reset</button>
                        </div>
                    </form>

                </div>

            </div>
            <br></br>
        </div>
    </div>


    </section>
