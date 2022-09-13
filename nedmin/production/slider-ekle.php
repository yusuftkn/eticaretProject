<?php include 'header.php';  

?>
           <!-- page content -->

        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Slider Ekleme <small>

                    </small></h2>
                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    


                    <form action= "../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="firs-name">Resim Seç <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="file" id="firs-name" name="slider_resimyol" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_ad">slider Ad <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="slider_ad" name="slider_ad"  required="required" placeholder= "slider Adınızı Giriniz" class="form-control col-md-7 col-xs-12">
                          </div>
                      </div>
                  
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_ad">slider Link<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="slider_link" name="slider_link"  required="required" placeholder= "slider Link Giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_sira">slider Sıra<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="slider_sira" name="slider_sira" required="required" placeholder= "slider Sıra Giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_durum">slider Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="heard" class="slider_durum" name="slider_durum" required >

                          <!-- kısa if Kullanımı -->
                          <option value="1" >Aktif</option>
                          <option value="0">Pasif</option>


                          <!-- <?php

                          if($kullanicicek['kullanici_durum']==0){?>
                            <option value="0">Pasif</option>
                            <option value="1">Aktif</option> 
                          

                          <?php } else {?>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>

                          <?php }

                          ?> -->
                          </select>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align= "right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">           
                          <button type="submit" name="sliderkaydet" class="btn btn-success">Kaydet</button>
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