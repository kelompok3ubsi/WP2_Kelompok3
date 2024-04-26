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
                    <li class="breadcrumb-item"><a href="<?= site_url('item') ?>">Items</a></li>
                    <li class="breadcrumb-item active">Data Items</li>
                </ol>
            </div>
        </div>
    </div>
</section>

   
<!-- Main Content -->
<section class="content">
    <?php $this->view('messages') ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px; margin-left: 10px;" >
                    <h2 class="box-title"><?=ucfirst($page)?> Item</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat" style="margin-top: 20px;">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div>
                <div class="col-md-4 mx-auto">
                    <?php echo form_open_multipart('item/process') ?>
                        <div class="form-group">
                            <label>Barcode *</label>
                            <input type="hidden" name="id" value="<?=$row->item_id?>">
                            <input type="text" name="barcode" value="<?=$row->barcode?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_name">Product Name *</label>
                            <input type="text" name="product_name" value="<?=$row->name?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Category *</label>
                            <select name="category" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach($category->result() as $key => $data) { ?>
                                <option value="<?=$data->category_id?>" <?=$data->category_id == $row->category_id ? "selected" : null?>><?=$data->name?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unit *</label>
                            <?php echo form_dropdown('unit', $unit, $selectedunit, 
                                ['class' => 'form-control', 'required' => 'required']); ?>
                        </div>
                        <div class="form-group">
                            <label>Price *</label>
                            <input type="number" name="price" value="<?=$row->price?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <?php if($page == 'edit') {
                                if($row->image != null) { ?>
                                    <div style="margin-bottom:5px;">
                                        <img src="<?=base_url('uploads/product/'.$row->image)?>" style="width:80%">
                                    </div>
                                <?php
                                }
                            } ?>
                            <input type="file" name="image" class="form-control">
                            <small>
                                (Biarkan kosong jika tidak <?=$page == 'edit' ? 'diganti' : 'ada'?>)
                            </small>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                               <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="reset" class="btn btn-flat" style="background-color: #c4c2bb;">Reset</button>
                        </div>
                    <?php echo form_close() ?>
                </div>

            </div>
            <br></br>
        </div>
    </div>


    </section>