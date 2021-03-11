        <!-- Begin page -->

        <div id="layout-wrapper">

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
                                        Ranking
                                    </h6>
                                    <p id="demo"></p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <?php if ($total_weight_fixes != $total_criteria) {?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-1 col-form-label"></label>
                                                <div class="col-md-11">
                                                    <p>Kamu belum menentukan Skala Kepentingan. <a href="<?php echo base_url('my_scale') ?>">Set Sekarang !</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        <?php }else{ ?>
                            <body onload="getLocation()"></body>                        
                            <!-- <h1>Latitude: <span id="latitude"></span></h1> -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="POST", action="<?php echo base_url('ranking') ?>">
                                                <input type="hidden" name="latitude" id="latitude">
                                                <input type="hidden" name="longitude" id="longitude">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="btn_submit">Refresh Location</button><br><br>
                                            </form>
                                            <table id="ranking" class="table table-bordered dt-responsive  nowrap">
                                                <thead>
                                                <tr>
                                                    <th>Ranking</th>
                                                    <th>Kode Alternatif</th>
                                                    <th>Nama Alternatif</th>
                                                    <th>Hasil Perhitungan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <?php foreach ($v_vector as $key => $value) { ?>
                                                    <?php 
                                                        $alternative_id = $value['alternative_id'];
                                                        $sql ="SELECT * FROM alternative WHERE id = $alternative_id";
                                                        $query = $this->db->query($sql); 
                                                    ?>
                                                    <tr>
                                                        <td></td>
                                                        <td><?php echo $query->row()->alternative_code; ?></td>
                                                        <td><?php echo $query->row()->alternative_name; ?></td>
                                                        <td><?php echo $value['v_vector']; ?></td>
                                                        <td><a href="<?php echo base_url('alternative/show/'); echo $query->row()->id; ?>"><i class="far fa-eye" style="margin: 2px"></i></a> </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        <?php } ?>
        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php $this->load->view('components/footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

        <script>
        // var x = document.getElementById("demo");

        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
          } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
          }
        }

        function showPosition(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;

            var elem = document.getElementById("latitude");
            elem.value = latitude;

            var elem = document.getElementById("longitude");
            elem.value = longitude;

        }


        </script>