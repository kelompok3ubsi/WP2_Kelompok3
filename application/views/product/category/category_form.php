<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>Categories
                    <small style="color: gray;">Kategori Barang</small>
                </h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('category') ?>">Categories</a></li>
                    <li class="breadcrumb-item active">Data Categories</li>
                </ol>
            </div>
        </div>
    </div>
</section>

   
<!-- Main Content -->
<section class="content">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px; margin-left: 10px;" >
                    <h2 class="box-title"><?=ucfirst($page)?> Category</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?=site_url('category')?>" class="btn btn-warning btn-flat" style="margin-top: 20px;">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div>
                <div class="col-md-4 mx-auto">
                    <form action="<?=site_url('category/process')?>" method="post">
                        <div class="form-group">
                            <label>Category Name *</label>
                            <input type="hidden" name="id" value="<?=$row->category_id?>">
                            <input type="text" name="category_name" value="<?=$row->name?>" class="form-control" required>
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