<?php
include 'header.php';
//BELİRLİ VERİYİ SEÇME İŞLEMİ
$slidersor=$db->prepare("SELECT * FROM slider");
$slidersor->execute();
?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Slider Listeleme
                        <h1>HüSEYİN TEKİN</h1>
                        <small>
                            <?php

                                if(isset($_GET['durum'])=="ok") { ?>
                                <b Style="color:green;">İşlem Başarılı...</b>
                                <?php } elseif(isset($_GET['durum'])=="no") {?>
                                <b style="color:red;">İşlem başarısız...</b>
                                <?php }
                            ?>
                        </small>
                    </h2>
                    <div class="clearfix"></div>
                    </div>
                    <div align="right">
                    <a href="slider-ekle.php"><button class="btn btn-success btn-xs">Yeni Ekle </button></a>
                </div>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Resim</th>
                            <th>Ad</th>
                            <th>Url</th>
                            <th>Sıra</th>
                            <th>Durum</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $say=0;
                        foreach($slidersor->fetchAll(PDO::FETCH_ASSOC) as $slidercek) {  $say++?>
                        <tr>
                            <td width="20"><?php echo $say ?></td>
                            <td> <img widht="200" src="../../<?php echo $slidercek['slider_resimyol'] ?>" width="100px" height="100px"></td>
                            <td><?php echo $slidercek['slider_ad'] ?></td>
                            <td><?php echo $slidercek['slider_link'] ?></td>
                            <td><?php echo $slidercek['slider_sira'] ?></td>
                            <td>
                                <center>
                                <?php 
                                if($slidercek['slider_durum'] == 1) { ?>
                                    <button class="btn btn-success btn-xs">Aktif</button>         
                                <?php } else{ ?>                                                
                                    <button class="btn btn-danger btn-xs">Pasif</button>          
                                <?php }  ?> 
                                </center>
                            </td>
                            <td><center><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>"><button  class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                            <td><center><a href="../netting/islem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok"><button class= "btn btn-danger btn-xs">Sil</button></a></center></td>
                        
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <!-- div bitiş -->
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
  <?php include 'footer.php';  ?>     