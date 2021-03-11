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
                            $lat  = (float)$alternative->latitude;
                            $long = (float)$alternative->longitude;
                            $info = $alternative->alternative_name;
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
                                        <a href="<?php echo base_url('alternative') ?>">Alternatif</a> 
                                        <b>></b> 
                                        <span>Detail Alternatif</span></h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border border-primary">
                                    <div class="card-header bg-transparent border-primary">
                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Informasi Umum</h5>
                                    </div>
                                    <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Kode Alternatif</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php echo $alternative->alternative_code ?></span>
                                                   
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Nama Alternatif</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php echo $alternative->alternative_name ?></span>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Alamat</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php echo $alternative->address ?></span>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Latitude</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php echo $alternative->latitude ?></span>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Longitude</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php echo $alternative->longitude ?></span>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php echo $alternative->email ?></span>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">No Telepon</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php echo $alternative->voice_number ?></span>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Deskripsi</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php echo $alternative->description ?></span>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Gambar</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <img height="150px" src="<?php echo base_url('uploads/alternative/'); echo $alternative->image ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <span ><?php 
                                                    if ($alternative->status == 0) {
                                                         echo "Non Aktif";
                                                     }elseif ($alternative->status == 1) {
                                                         echo "Aktif/ Diverifikasi";
                                                     }elseif ($alternative->status == 2) {
                                                         echo "Belum Diverifikasi";
                                                     } ?></span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border border-primary">
                                    <div class="card-header bg-transparent border-primary">
                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Fasilitas</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Fasilitas</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <ul type="circle">
                                                    <?php foreach ($alternative_facility as $key => $value) { ?>
                                                        <li><?php echo $value->facility; ?></li>
                                                    <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border border-primary">
                                    <div class="card-header bg-transparent border-primary">
                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Ekstrakurikuler</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Ekstrakurikuler</label>
                                                <div class="col-md-10">
                                                    <ul type="circle">
                                                    <?php foreach ($alternative_extracurricular as $key => $value) { ?>
                                                        <li><?php echo $value->extracurricular; ?></li>
                                                    <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row --> 

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border border-primary">
                                    <div class="card-header bg-transparent border-primary">
                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Lokasi</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Lokasi</label>
                                                <div class="col-md-10">
                                                    <ul type="circle">
                                                    <?php foreach ($alternative_location as $key => $value) { ?>
                                                        <li><?php echo $value->location; ?></li>
                                                    <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->                                                

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border border-primary">
                                    <div class="card-header bg-transparent border-primary">
                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Aksesibilitas</h5>
                                    </div>
                                    <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Aksesibilitas</label>
                                                <div class="col-md-10">
                                                    <ul type="circle">
                                                    <?php foreach ($alternative_accessibility as $key => $value) { ?>
                                                        <li><?php echo $value->accessibility; ?></li>
                                                    <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Maps</label>
                                                <div class="col-md-10">
                                                    <div id="googleMap" style="width:100%  ;height:500px;"></div>
                                                </div>
                                            </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->   

                        <a href="<?php echo base_url('alternative') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Kembali ke list</button></a>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php $this->load->view('components/footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->