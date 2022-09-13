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
                    <h2>Menü Ekleme <small>

                    </small></h2>
                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action= "../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_id">Üst Menu <span>*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" name="menu_id" id="menu_id">
                                  <option value="0" selected>Ust Menu Yok</option>
                                  <?php 
                                    $menulist = $db->prepare('select * from menu'); $menulist->execute();
                                    while($menucek=$menulist->fetch(PDO::FETCH_ASSOC)){ ?>
                                      <option value="<?php echo $menucek['menu_id']; ?>"><?php echo $menucek['menu_ad'];  ?></option>
                                  <?php } ?>
                              </select>
                          </div>   
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_ad">Menü Ad <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="menu_ad" name="menu_ad"  required="required" placeholder= "Menü Adınızı Giriniz" class="form-control col-md-7 col-xs-12">
                          </div>
                      </div>
                  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_detay">Menü Detay<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="ckeditor" id="menu_detay" name="menu_detay"></textarea>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_url">Menü Url<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="menu_url" name="menu_url"  required="required" placeholder= "Menü Url Giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_sira">Menü Sıra<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="menu_sira" name="menu_sira" required="required" placeholder= "Menü Sıra Giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_durum">Menü Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="heard" class="menu_durum" name="menu_durum" required >

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
                          <button type="submit" name="menukaydet" class="btn btn-success">Kaydet</button>
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