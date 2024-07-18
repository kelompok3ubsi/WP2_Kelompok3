<section class="content-header">
  
    <h2>Items
        <small style="color: gray;">Data Barang</small>
    </h2>   
      
</section>
 
<!-- Main content -->
<section class="content">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div class="pull-right" style="margin-top: 15px; margin-left: 10px;" >
                    <h2 class="box-title">Barcode Generator <i class="fa fa-barcode"></i></h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat" style="margin-top: 20px;">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
        <?php
        $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->item_id, $generator::TYPE_CODE_128)) . '" style="width:200px">';
        ?>
        <br>
        <?=$row->barcode?>
        <br><br>
        <a href="<?=site_url('item/barcode_print/'.$row->item_id)?>" target="_blank" class="btn btn-default btn-sm">
            <i class="fa fa-print"></i> Print
         </a>
        <p>
        </div>
    </div>

<div class="card card-outline card-primary">
    <div class="card-header">
        <div class="pull-right" style="margin-top: 15px; margin-left: 10px;" >
            <h3 class="box-title">QR-Code Generator <i class="fa fa-qrcode"></i></h3>
        </div>
    </div>
        <div class="card-body">
            <?php
            // Membuat QR code dengan menggunakan ID unik dari setiap item
            use Endroid\QrCode\Builder\Builder;
            use Endroid\QrCode\Encoding\Encoding;
            use Endroid\QrCode\ErrorCorrectionLevel;
            use Endroid\QrCode\Label\LabelAlignment;
            use Endroid\QrCode\Label\Font\NotoSans;
            use Endroid\QrCode\RoundBlockSizeMode;
            use Endroid\QrCode\Writer\PngWriter;
        
            $result = Builder::create()
                ->writer(new PngWriter())
                ->writerOptions([])
                ->data($row->item_id)
                ->encoding(new Encoding('UTF-8'))
                ->errorCorrectionLevel(ErrorCorrectionLevel::High)
                ->size(300)
                ->margin(10)
                ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
                ->validateResult(false)
                ->build();
        
             // Menyimpan QR code ke file
            $result->saveToFile('uploads/qr-code/item-'.$row->barcode.'.png');
            ?>
            <img src="<?=base_url('uploads/qr-code/item-'.$row->barcode.'.png')?>" style="width:200px">
            <br>
            <?=$row->barcode?>
            <br><br>
            <a href="<?=site_url('item/qrcode_print/'.$row->item_id)?>" target="_blank" class="btn btn-default btn-sm">
                <i class="fa fa-print"></i> Print
            </a>
            <br>
            <p>
                -
            </p>
        </div>
    </div>
</section>