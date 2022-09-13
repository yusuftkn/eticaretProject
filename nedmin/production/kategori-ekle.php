<?php include 'header.php'; ?>



        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kullanici Düzenleme <small>

                    <?php
                       if(isset($_GET['durum'])=="ok"){ ?>

                        <b Style="color:green;">İşlem Başarılı...</b>

                        <?php } elseif(isset($_GET['durum'])=="no") {?>

                        <b style="color:red;">İşlem başarısız...</b>

                        <?php }
                    ?>
                    </small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action= "../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">kategori Ad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kategori_ad" placeholder= "Kategori adını giriniz" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>
                       
                       

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">kategori Sıra<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="kategori_sira" placeholder="Sıra giriniz" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">kategori Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" class="form_control" name="kategori_durum" required >

                          <!-- kısa if Kullanımı -->
                          <option value="1">Aktif</option>
                          <option value="0">Pasif</option>


                          
                          </select>

                          <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id']  ?>">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align= "right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="kategoriekle" class="btn btn-success">Kaydet</button>
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