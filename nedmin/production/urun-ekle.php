<?php include 'header.php';
$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
$urunsor->execute(array(
  'id'=> $_GET['urun_id']
));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);


?>


        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürün Düzenleme <small>

                    <?php
                            if(isset($_GET['durum'])){
                                if($_GET['durum']== "ok") { ?>
                                <b Style="color:green;">İşlem Başarılı...</b>
                                <?php } elseif($_GET['durum'] =="no") {?>
                                <b style="color:red;">İşlem başarısız...</b>
                            <?php }
                            }
                        ?>
                    </small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <br />
                    <form action= "../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                           <!-- kategori seçme başlangıç -->
                      < <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first name">Kategori Seç <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <?php

                          $urun_id=$uruncek['kategori_id'];

                          $kategorisor=$db->prepare("SELECT * FROM kategori WHERE kategori_ust=:kategori_ust order by kategori_sira");
                          $kategorisor->execute(array(
                            'kategori_ust'=> 0
                          ));

                          ?>
                          <select class="select2_multiple form-control" name="kategori_id" required="">

                          <?php

                          while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)){
                            $kategori_id=$kategoricek['kategori_id'];

                            ?>

                            <option value=" <?php echo $kategoricek['kategori_id']; ?>"><?php echo $kategoricek['kategori_ad']; ?></option>

                          <?php } ?>
          
                          </select>
                        </div>
                      </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Ad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <input type="text" id="first-name" name="urun_ad" placeholder="ürün adını giriniz" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Detay<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="ckeditor" id="editör1" name="urun_detay"></textarea>
                        </div>
                      </div>
                       <script type="text/javascript">
                         CEKİDİTOR.replace( 'editor1',
                         {
                           filebrowserBrowseUrl :'ckfinder/ckfinder.html',
                           filebrowserImageBrowseUrl :'ckfinder/ckfinder.html?type=Images',
                           filebrowserFlashBrowseUrl :'ckfinder/ckfinder.html?type=Flash',
                           filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                           filebrowserImageBrowseUrl :'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                           filebrowserFlashBrowseUrl :'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                           forcaPasteAsplainText :true
                         }

                         );

                       </script>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Fiyat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_fiyat" placeholder="ürün fiyatı giriniz"   class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Video<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_video"placeholder="ürün video giriniz"  class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün keyword<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_keyword" placeholder="ürün keyword giriniz" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Stok<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_stok" placeholder="ürün stok giriniz"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" class="urun_durum" name="urun_durum" required >

                          <!-- kısa if Kullanımı -->
                          <option >Aktif</option>
                          <option >Pasif</option>


                          </select>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align= "right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="urunekle" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

  <?php include 'footer.php';  ?>