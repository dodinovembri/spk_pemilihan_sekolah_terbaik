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
                        <body onload="getLocation()"></body>
                        <p><?php
                            echo "<script>document.writeln(x);</script>";
                            // $str = '<p id="demo"></p>';
                            // $string_value = strval( $str ) ;
                            // $expl = explode(" ", $string_value);
                            // var_dump($expl);
                            // die();
                            // echo $expl[0];
                        ?></p>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="ranking" class="table table-bordered dt-responsive  nowrap">
                                            <thead>
                                            <tr>
                                                <th>Alternative Code</th>
                                                <th>Alternative Name</th>
                                                <th>V Vector</th>
                                                <th>Ranking</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $no = 0; foreach ($v_vector as $key => $value) { $no++; ?>
                                                <?php 
                                                    $alternative_id = $value['alternative_id'];
                                                    $sql ="SELECT * FROM alternative WHERE id = $alternative_id";
                                                    $query = $this->db->query($sql); 
                                                ?>
                                                <tr>
                                                    <td><?php echo $query->row()->alternative_code; ?></td>
                                                    <td><?php echo $query->row()->alternative_name; ?></td>
                                                    <td><?php echo $value['v_vector']; ?></td>
                                                    <td><?php echo $no; ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php $this->load->view('components/footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <script>
        // var x = document.getElementById("demo");
        x = a;

        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
          } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
          }
        }

        function showPosition(position) {
          a = position.coords.latitude + " " + position.coords.longitude;
        }
        </script>