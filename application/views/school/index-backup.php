        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php clearstatcache(); header("Cache-Control: no-cache, must-revalidate"); ?>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALNbmorugOm3RIAold_BxvMcKVLCauPqc&callback=initialize" async defer></script>
            <script type="text/javascript">   
                var marker;
                function initialize(){
                    // Variabel untuk menyimpan informasi lokasi
                    var infoWindow = new google.maps.InfoWindow;
                    //  Variabel berisi properti tipe peta
                    var mapOptions = {
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    } 
                    // Pembuatan peta
                    var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);      
                    // Variabel untuk menyimpan batas kordinat
                    var bounds = new google.maps.LatLngBounds();
                    // Pengambilan data dari database MySQL
                           <?php 
                            $lat  = (float)$school->latitude;
                            $long = (float)$school->longitude;
                            $info = $school->alternative_name;
                            echo "addMarker($lat, $long, '$info');";
                         ?>         
                    // Proses membuat marker 
                    function addMarker(lat, lng, info){
                        var lokasi = new google.maps.LatLng(lat, lng);
                        bounds.extend(lokasi);
                        var marker = new google.maps.Marker({
                            map: peta,
                            position: lokasi
                        });       
                        peta.setOptions({ minZoom: 5, maxZoom: 15 });                        
                        peta.fitBounds(bounds);
                        bindInfoWindow(marker, peta, infoWindow, info);
                     }
                    // Menampilkan informasi pada masing-masing marker yang diklik
                    function bindInfoWindow(marker, peta, infoWindow, html){
                        google.maps.event.addListener(marker, 'click', function() {
                        infoWindow.setContent(html);
                        infoWindow.open(peta, marker);
                      });
                    }
                }
            </script>


            <?php $this->load->view('components/sidebar'); ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h6 class="mb-sm-0">
                                        <a href="<?php echo base_url('school') ?>">Sekolah</a> 
                                        <b>></b> 
                                        <span>Detail Sekolah</span></h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Kode Sekolah</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="school_code" value="<?php echo $school->alternative_code ?>" placeholder="Masukkan kode alternatif" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Nama Sekolah</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="school_name" value="<?php echo $school->alternative_name ?>" placeholder="Masukkan nama alternatif" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="3" name="address" placeholder="Masukkan alamat" required=""><?php echo $school->address ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Latitude</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="latitude" value="<?php echo $school->latitude ?>" placeholder="Masukkan latitude" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Longitude</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="longitude" value="<?php echo $school->longitude ?>" placeholder="Masukkan longitude" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" name="email" value="<?php echo $school->email ?>" placeholder="Masukkan email" required="" >
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">No Telepon</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="voice_number" value="<?php echo $school->voice_number ?>" placeholder="Masukkan no telepon" required=""   >
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Deskripsi</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="5" name="description" placeholder="Masukkan deskripsi" required=""><?php echo $school->description ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Gambar</label>
                                                <div class="col-md-10">
                                                    <img height="150px" src="<?php echo base_url('uploads/school/'); echo $school->image ?>">
                                                </div>
                                            </div>
                                             <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Akreditasi</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="accreditation" value="<?php echo $school->accreditation ?>" placeholder="Masukkan akreditasi" required="">
                                                </div>
                                            </div>
                                             <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Lama Berdiri</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="age" value="<?php echo $school->age ?>" placeholder="Masukkan lama berdiri" required="">
                                                </div>
                                            </div>
                                             <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Biaya SPP</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="spp_cost" value="<?php echo $school->spp_cost ?>" placeholder="Masukkan biaya spp" required="">
                                                </div>
                                            </div>
                                             <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Biaya Masuk</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="entry_fee" value="<?php echo $school->entry_fee ?>" placeholder="Masukkan biaya masuk" required="">
                                                </div>
                                            </div>
                                             <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Jarak</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="distance" value="<?php echo $school->distance ?>" placeholder="Masukkan jarak" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="status">
                                                        <option value="<?php echo $school->status; ?>"><?php echo $school->status == 1 ? "Aktif" : "Non Aktif" ?></option>
                                                        <?php if ($school->status == 1) {?>
                                                            <option value="0">Non Aktif</option>
                                                        <?php }else{ ?>
                                                            <option value="1">Aktif</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Peta Lokasi Sekolah</label>
                                                <div class="col-md-10">
                                                     <div id="googleMap" style="width:100%  ;height:500px;"></div>
                                                </div>
                                            </div><br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <a href="<?php echo base_url('school') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Kembali</button></a>
                                                </div>
                                            </div>

                                            
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <?php $this->load->view('components/footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->