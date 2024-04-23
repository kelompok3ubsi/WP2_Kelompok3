<section class="content-header">
      
    <h2>User
        <small style="color: gray;">Pengguna</small>
    </h2>     
</section>

   
<!-- Main Content -->
<section class="content">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px; margin-left: 10px;" >
                    <h2 class="box-title">Edit User</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat" style="margin-top: 20px;">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div>
                <div class="col-md-4 mx-auto">
                
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="hidden" name="user_id" value="<?=$row->user_id?>">
                            <input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->name?>" class="form-control">
                            <?=form_error('fullname')?>
                        </div>
                        <div class="form-group">
                            <label>Username *</label>
                            <input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control">
                            <?=form_error('username')?>
                        </div>
                        <div class="form-group">
                            <label>Password</label> <small>(Biarkan kosong jika tidak diganti)</small>
                            <input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control">
                            <?=form_error('password')?>
                        </div>
                        <div class="form-group">
                            <label>Password Confirmation</label>
                            <input type="password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control">
                            <?=form_error('passconf')?>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?=$this->input->post('address') ?? $row->address?></textarea>
                            <?=form_error('address')?>
                        </div>
                        <div class="form-group">
                            <label>Level *</label>
                            <select name="level" class="form-control">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <option value="1">Admin</option>
                                <option value="2" <?=$level == 2 ? 'selected' : null?>>Kasir</option>
                            </select>
                            <?=form_error('level')?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
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
