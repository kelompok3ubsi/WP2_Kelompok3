<style>
    .button {
  text-decoration: none;
  line-height: 1;
  border-radius: 1.5rem;
  overflow: hidden;
  position: relative;
  box-shadow: 10px 10px 20px rgba(0,0,0,.05);
  background-color: #fff;
  color: #121212;
  border: none;
  cursor: pointer;
}

.button-decor {
  position: absolute;
  inset: 0;
  background-color: var(--clr);
  transform: translateX(-100%);
  transition: transform .3s;
  z-index: 0;
}

.button-content {
  display: flex;
  align-items: center;
  font-weight: 600;
  position: relative;
  overflow: hidden;
}

.button__icon {
  width: 48px;
  height: 40px;
  background-color: var(--clr);
  display: grid;
  place-items: center;
}

.button__text {
  display: inline-block;
  transition: color .2s;
  padding: 2px 1.5rem 2px;
  padding-left: .75rem;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  max-width: 150px;
}

.button:hover .button__text {
  color: #fff;
}

.button:hover .button-decor {
  transform: translate(0);
}

.voltage-button {
  position: relative;
}

.voltage-button button {
  color: white;
  background: orange;
  padding: 1rem 2rem 1rem 2rem;
  border-radius: 5rem;
  border: 5px solid #5978F3;
  font-size: 14px;
  line-height: 1em;
  letter-spacing: 0.075em;
  transition: background 0.3s;
}

.voltage-button button:hover {
  cursor: pointer;
  background: #0F1C53;
}

.voltage-button button:hover + svg, .voltage-button button:hover + svg + .dots {
  opacity: 1;
}

.voltage-button svg {
  display: block;
  position: absolute;
  top: -0.75em;
  left: -0.25em;
  width: calc(100% + 0.5em);
  height: calc(100% + 1.5em);
  pointer-events: none;
  opacity: 0;
  transition: opacity 0.4s;
  transition-delay: 0.1s;
}

.voltage-button svg path {
  stroke-dasharray: 100;
  filter: url("#glow");
}

.voltage-button svg path.line-1 {
  stroke: #f6de8d;
  stroke-dashoffset: 0;
  animation: spark-1 3s linear infinite;
}

.voltage-button svg path.line-2 {
  stroke: #6bfeff;
  stroke-dashoffset: 500;
  animation: spark-2 3s linear infinite;
}

.voltage-button .dots {
  opacity: 0;
  transition: opacity 0.3s;
  transition-delay: 0.4s;
}

.voltage-button .dots .dot {
  width: 1rem;
  height: 1rem;
  background: white;
  border-radius: 100%;
  position: absolute;
  opacity: 0;
}

.voltage-button .dots .dot-1 {
  top: 0;
  left: 20%;
  animation: fly-up 3s linear infinite;
}

.voltage-button .dots .dot-2 {
  top: 0;
  left: 55%;
  animation: fly-up 3s linear infinite;
  animation-delay: 0.5s;
}

.voltage-button .dots .dot-3 {
  top: 0;
  left: 80%;
  animation: fly-up 3s linear infinite;
  animation-delay: 1s;
}

.voltage-button .dots .dot-4 {
  bottom: 0;
  left: 30%;
  animation: fly-down 3s linear infinite;
  animation-delay: 2.5s;
}

.voltage-button .dots .dot-5 {
  bottom: 0;
  left: 65%;
  animation: fly-down 3s linear infinite;
  animation-delay: 1.5s;
}

@keyframes spark-1 {
  to {
    stroke-dashoffset: -1000;
  }
}

@keyframes spark-2 {
  to {
    stroke-dashoffset: -500;
  }
}

@keyframes fly-up {
  0% {
    opacity: 0;
    transform: translateY(0) scale(0.2);
  }

  5% {
    opacity: 1;
    transform: translateY(-1.5rem) scale(0.4);
  }

  10%, 100% {
    opacity: 0;
    transform: translateY(-3rem) scale(0.2);
  }
}

@keyframes fly-down {
  0% {
    opacity: 0;
    transform: translateY(0) scale(0.2);
  }

  5% {
    opacity: 1;
    transform: translateY(1.5rem) scale(0.4);
  }

  10%, 100% {
    opacity: 0;
    transform: translateY(3rem) scale(0.2);
  }
}

</style>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sales</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item active">Sales</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
	<div class="row">
        <div class="col-lg-4">
        <div id="flash" data-flash="<?=$this->session->flashdata('success');?>"></div>
			<div class="card card-widget">
				<div class="card-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top">
                                <label for="date">Date</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" id="date" value="<?=date('Y-m-d')?>" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="user">Kasir</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" id="user" value="<?=$this->fungsi->user_login()->name?>" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="customer">Customer</label>
                            </td>
                            <td>
                                <div>
                                    <select id="customer" class="form-control">
                                        <option value="">Umum</option>
                                        <?php foreach($customer as $cust => $value) {
                                            echo '<option value="'.$value->customer_id.'">'.$value->name.'</option>';
                                        } ?>
                                    </select>
                                </div>    
                            </td>
                        </tr>
                    </table>
                </div>
			</div>
		</div>

        <div class="col-lg-4">
			<div class="card card-widget">
				<div class="card-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="barcode">Barcode</label>
                            </td>
                            <td>
                                <div class="form-group input-group">
                                    <input type="hidden" id="item_id">
                                    <input type="hidden" id="price">
                                    <input type="hidden" id="stock">
                                    <input type="hidden" id="qty_cart">
                                    <input type="text" id="barcode" class="form-control" autofocus>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="qty">Qty</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="qty" value="1" min="1" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div>
                                    <button type="button" id="add_cart" class="btn btn-primary">
                                        <i class="fa fa-cart-plus"></i> Add
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
			</div>
		</div>

        <div class="col-lg-4">
			<div class="card card-widget">
				<div class="card-body">
                    <div align="right">
                        <h4>Invoice <b><span id="invoice"><?= $invoice ?></span></b></h4>
                        <h1><b><span id="grand_total2" style="font-size:50pt">0</span></b></h1>
                    </div>
                </div>
			</div>
		</div>
	</div>

    <div class="row">
		<div class="col-lg-12">
			<div class="card card-widget">
				<div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barcode</th>
                                <th>Product Item</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th width="10%">Discount Item</th>
                                <th width="15%">Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="cart_table">
                            
                            <?php $this->view('transaction/sale/cart_data') ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
		<div class="col-lg-3">
			<div class="card card-widget">
				<div class="card-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="sub_total">Sub Total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="sub_total" value="" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="discount">Discount</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="discount" value="0" min="0" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="grand_total">Grand Total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="grand_total" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
			</div>
		</div>

        <div class="col-lg-3">
			<div class="card card-widget">
				<div class="card-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="cash">Cash</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="cash" value="0" min="0" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="change">Change</label>
                            </td>
                            <td>
                                <div>
                                    <input type="number" id="change" class="form-control" readonly>
                                </div>    
                            </td>
                        </tr>
                    </table>
                </div>
			</div>
		</div>

        <div class="col-lg-3">
            <div class="card card-widget">
				<div class="card-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top">
                                <label for="note">Note</label>
                            </td>
                            <td>
                                <div>
                                    <textarea id="note" rows="3" class="form-control"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
			</div>
		</div>

        <div class="col-lg-3">
            <div>
                <button class="cancel" id="cancel_payment" class="btn btn-flat btn-warning">
                    <i class="fa fa-refresh"></i> Cancel
                </button><br><br>
                <button class="button" id="process_payment" style="--clr: #00ad54;">
                    <span class="button-decor"></span>
                    <div class="button-content">
                        <div class="button__icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" width="24">
                                <circle opacity="0.5" cx="25" cy="25" r="23" fill="url(#icon-payments-cat_svg__paint0_linear_1141_21101)"></circle>
                                <mask id="icon-payments-cat_svg__a" fill="#fff">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z">
                                    </path>
                                </mask>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z" fill="#fff"></path>
                                <path d="M25.958 20.962l-1.47-1.632 1.47 1.632zm2.067.109l-1.632 1.469 1.632-1.469zm-.109 2.068l-1.469-1.633 1.47 1.633zm-5.154 4.638l-1.469-1.632 1.469 1.632zm-.276 1.841l-1.883 1.13 1.883-1.13zM34.42 15.93l-2.084-.695 2.084.695zm-19.725 6.42l18.568-6.189-1.39-4.167-18.567 6.19 1.389 4.166zm5.265 1.75l-5.12-3.072-2.26 3.766 5.12 3.072 2.26-3.766zm2.072 3.348l5.394-4.854-2.938-3.264-5.394 4.854 2.938 3.264zm5.394-4.854a.732.732 0 01-1.034-.054l3.265-2.938a3.66 3.66 0 00-5.17-.272l2.939 3.265zm-1.034-.054a.732.732 0 01.054-1.034l2.938 3.265a3.66 3.66 0 00.273-5.169l-3.265 2.938zm.054-1.034l-5.154 4.639 2.938 3.264 5.154-4.638-2.938-3.265zm1.023 12.152l-3.101-5.17-3.766 2.26 3.101 5.17 3.766-2.26zm4.867-18.423l-6.189 18.568 4.167 1.389 6.19-18.568-4.168-1.389zm-8.633 20.682c1.61 2.682 5.622 2.241 6.611-.725l-4.167-1.39a.732.732 0 011.322-.144l-3.766 2.26zm-6.003-8.05a3.66 3.66 0 004.332-.419l-2.938-3.264a.732.732 0 01.866-.084l-2.26 3.766zm3.592-1.722a3.66 3.66 0 00-.69 4.603l3.766-2.26c.18.301.122.687-.138.921l-2.938-3.264zm11.97-9.984a.732.732 0 01-.925-.926l4.166 1.389c.954-2.861-1.768-5.583-4.63-4.63l1.39 4.167zm-19.956 2.022c-2.967.99-3.407 5.003-.726 6.611l2.26-3.766a.732.732 0 01-.145 1.322l-1.39-4.167z" fill="#fff" mask="url(#icon-payments-cat_svg__a)"></path>
                                <defs>
                                    <linearGradient id="icon-payments-cat_svg__paint0_linear_1141_21101" x1="25" y1="2" x2="25" y2="48" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff" stop-opacity="0.71"></stop>
                                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <span class="button__text">Payments</span>
                    </div>
                </button>
            </div>
		</div>
	</div>
</section>

<!-- Modal Add Product Item -->

<div class="modal fade" id="modal-item">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Add Product Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($item as $i => $data) { ?>
                        <tr>
                            <td><?=$data->barcode?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->unit_name?></td>
                            <td class="text-right"><?=indo_currency($data->price)?></td>
                            <td class="text-right"><?=$data->stock?></td>
                            <td class="text-right">
                                <button class="btn btn-xs btn-info" id="select"
                                    data-id="<?=$data->item_id?>"
                                    data-barcode="<?=$data->barcode?>"
                                    data-price="<?=$data->price?>"
                                    data-stock="<?=$data->stock?>">
                                    <i class="fa fa-check"></i> Select
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Cart Item -->
<div class="modal fade" id="modal-item-edit">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
            <h4 class="modal-title">Update Product Item</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <input type="hidden" id="cartid_item">
                <div class="form-group">
                    <label for="product_item">Product Item</label>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" id="barcode_item" class="form-control" readonly>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="product_item" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price_item">Price</label>
                    <input type="number" id="price_item" min="0" class="form-control">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-7">
                            <label for="qty_item">Qty</label>
                            <input type="number" id="qty_item" min="1" class="form-control">
                        </div>
                        <div class="col-md-5">
                            <label>Stock Item</label>
                            <input type="number" id="stock_item" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="total_before">Total before Discount</label>
                    <input type="number" id="total_before" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="discount_item">Discount per Item</label>
                    <input type="number" id="discount_item" min="0" class="form-control">
                </div>
                <div class="form-group">
                    <label for="total_item">Total after Discount</label>
                    <input type="number" id="total_item" class="form-control" readonly>
                </div>
			</div>
            <div class="modal-footer">
                <div class="pull-right">
                    <button type="button" id="edit_cart" class="btn btn-flat btn-success">
                        <i class="fa fa-paper-plane"></i> Save
                    </button>
                </div>
            </div>
		</div>
	</div>
</div>

<script>
$(document).on('click', '#select', function() {
    var barcode = $(this).data('barcode')

    $('#item_id').val($(this).data('id'))
    $('#barcode').val(barcode)
    $('#price').val($(this).data('price'))
    $('#stock').val($(this).data('stock'))
    $('#modal-item').modal('hide')

    get_cart_qty(barcode)
})

function get_cart_qty(barcode) {
    $('#cart_table tr').each(function() {
        // var qty_cart = $(this).find("td").eq(4).html()
        var qty_cart = $("#cart_table td.barcode:contains('"+barcode+"')").parent().find("td").eq(4).html()
        if(qty_cart != null) {
            $('#qty_cart').val(qty_cart)
        } else {
            $('#qty_cart').val(0)
        }
    })
}

$(document).on('click', '#add_cart', function() {
    var item_id = $('#item_id').val()
    var price = $('#price').val()
    var stock = $('#stock').val()
    var qty = $('#qty').val()
    var qty_cart = $('#qty_cart').val()
    if(item_id == '') {
        alert('Product belum dipilih')
        $('#barcode').focus()
    } else if(stock < 1 || parseInt(stock) < (parseInt(qty_cart) + parseInt(qty))) {
        alert('Stock tidak mencukupi')
        $('#qty').focus()
    } else {
        $.ajax({
            type: 'POST',
            url: '<?=site_url('sale/process')?>',
            data: {'add_cart' : true, 'item_id' : item_id, 'price' : price, 'qty' : qty},
            dataType: 'json',
            success: function(result) {
                if(result.success == true) {
                    $('#cart_table').load('<?=site_url('sale/cart_data')?>', function() {
                        calculate()
                    })
                    $('#item_id').val('')
                    $('#barcode').val('')
                    $('#qty').val(1)
                    $('#barcode').focus()
                } else {
                    alert('Gagal tambah item cart')
                }
            }
        })
    }
})

$(document).on('click', '#del_cart', function(e) {
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
        title: "Apakah anda yakin lillahi ta'ala?",
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
            var cart_id = $(this).data('cartid');
            $.ajax({
                type: 'POST',
                url: '<?=site_url('sale/cart_del')?>',
                dataType: 'json',
                data: {'cart_id': cart_id},
                success: function(result) {
                    if(result.success == true) {
                        $('#cart_table').load('<?=site_url('sale/cart_data')?>', function() {
                            calculate();
                        });
                        swalWithBootstrapButtons.fire({
                            title: "Deleted!",
                            text: "Data anda berhasil dihapus.",
                            icon: "success"
                        });
                    } else {
                        alert('Gagal hapus item cart');
                    }
                } 
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Alhamdulillah, data masih aman 😊",
                icon: "error"
            });
        }
    });
});



$(document).on('click', '#update_cart', function() {
    $('#cartid_item').val($(this).data('cartid'))
    $('#barcode_item').val($(this).data('barcode'))
    $('#product_item').val($(this).data('product'))
    $('#stock_item').val($(this).data('stock'))
    $('#price_item').val($(this).data('price'))
    $('#qty_item').val($(this).data('qty'))
    $('#total_before').val($(this).data('price') * $(this).data('qty'))
    $('#discount_item').val($(this).data('discount'))
    $('#total_item').val($(this).data('total'))
})
function count_edit_modal() {
    var price = $('#price_item').val()
    var qty = $('#qty_item').val()
    var discount = $('#discount_item').val()

    total_before = price * qty
    $('#total_before').val(total_before)

    total = (price - discount) * qty
    $('#total_item').val(total)

    if(discount == '') {
        $('#discount_item').val(0)
    }
}
$(document).on('keyup mouseup', '#price_item, #qty_item, #discount_item', function() {
    count_edit_modal()
})

$(document).on('click', '#edit_cart', function() {
    var cart_id = $('#cartid_item').val()
    var price = $('#price_item').val()
    var qty = $('#qty_item').val()
    var discount = $('#discount_item').val()
    var total = $('#total_item').val()
    var stock = $('#stock_item').val()
    if(price == '' || price < 1) {
        alert('Harga tidak boleh kosong')
        $('#pice_item').focus()
    } else if(qty == '' || qty < 1) {
        alert('Qty tidak boleh kosong')
        $('#qty_item').focus()
    } else if(parseInt(qty) > parseInt(stock)) {
        alert('Stock tidak mencukupi')
        $('#qty_item').focus()
    } else {
        $.ajax({
            type: 'POST',
            url: '<?=site_url('sale/process')?>',
            data: {'edit_cart' : true, 'cart_id' : cart_id, 'price' : price, 
                    'qty' : qty, 'discount' : discount, 'total' : total},
            dataType: 'json',
            success: function(result) {
                if(result.success) {
                    $('#cart_table').load('<?=site_url('sale/cart_data')?>', function() {
                        calculate();
                    });
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Item keranjang berhasil diperbarui'
                    });
                    $('#modal-item-edit').modal('hide');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Data item keranjang tidak terupdate'
                    });
                    $('#modal-item-edit').modal('hide');
                }
            }
        });
    }
});


function calculate() {
    var subtotal = 0;
    $('#cart_table tr').each(function() {
        subtotal += parseInt($(this).find('#total').text())
    })
    isNaN(subtotal) ? $('#sub_total').val(0) : $('#sub_total').val(subtotal)

    var discount = $('#discount').val()
    var grand_total = subtotal - discount
    if(isNaN(grand_total)) {
        $('#grand_total').val(0)
        $('#grand_total2').text(0)
    } else {
        $('#grand_total').val(grand_total)
        $('#grand_total2').text(grand_total)
    }

    var cash = $('#cash').val();
    cash != 0 ? $('#change').val(cash - grand_total) : $('#change').val(0)

    if(discount == '') {
        $('#discount').val(0)
    }
}
$(document).on('keyup mouseup', '#discount, #cash', function() {
    calculate()
})

$(document).ready(function() {
    calculate()
})

// process payment
$(document).on('click', '#process_payment', function() {
    var customer_id = $('#customer').val();
    var subtotal = parseFloat($('#sub_total').val());
    var discount = parseFloat($('#discount').val());
    var grandtotal = parseFloat($('#grand_total').val());
    var cash = parseFloat($('#cash').val());
    var change = parseFloat($('#change').val());
    var note = $('#note').val();
    var date = $('#date').val();

    if (subtotal < 1) {
        Swal.fire({
            text: 'Belum ada produk yang dipilih.',
            icon: 'error'
        })
        $('#barcode').focus()
    } else if (cash < 1) {
        Swal.fire({
            text: 'Jumlah uang tunai belum dimasukkan.',
            icon: 'error'
        })
        $('#cash').focus()
    } else {
        Swal.fire({
            title: 'Yakin proses transaksi ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '<?=site_url('sale/process')?>',
                    data: {
                        'process_payment': true,
                        'customer_id': customer_id,
                        'subtotal': subtotal,
                        'discount': discount,
                        'grandtotal': grandtotal,
                        'cash': cash,
                        'change': change,
                        'note': note,
                        'date': date
                    },
                    dataType: 'json',
                    success: function(result) {
                        if (result.success) {
                            Swal.fire('Transaksi berhasil', '', 'success');
                            window.open('<?=site_url('sale/cetak/')?>' + result.sale_id, '_blank');
                        } else {
                            Swal.fire('Transaksi gagal', '', 'error');
                        }
                        location.href = '<?=site_url('sale')?>';
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.fire('Error', 'Terjadi kesalahan saat memproses transaksi.', 'error');
                    }
                });
            }
        });
    }
});


$(document).on('click', '#cancel_payment', function() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger mr-3"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Apakah Anda yakin?",
        text: "Pembayaran akan dibatalkan dan data akan direset.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, batalkan pembayaran!",
        cancelButtonText: "Tidak, tetap lanjutkan!",
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: '<?=site_url('sale/cart_del')?>',
                dataType: 'json',
                data: {'cancel_payment': true},
                success: function(result) {
                    if(result.success == true) {
                        $('#cart_table').load('<?=site_url('sale/cart_data')?>', function() {
                            calculate();
                        });
                        $('#discount').val(0);
                        $('#cash').val(0);
                        $('#customer').val('').change();
                        $('#barcode').val('');
                        $('#barcode').focus();
                    }
                }
            });
        }
    });
});

</script>