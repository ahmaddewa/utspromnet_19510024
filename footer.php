	<div class="col-xl-3 col-xxl-4 col-lg-12 col-md-12">
						<div class="card bg-primary text-white">
                            <div class="card-header pb-0 border-0">
                                <h4 class="card-title text-white">Daftar Admin</h4>
                            </div>
                            <div class="card-body"> 
                                <div class="widget-media">
                                    
<?php
		
			$no = 1;
		$data = mysqli_query($koneksi,"select * from admin");
		while($d = mysqli_fetch_array($data)){
			?>
	<ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-info">
                                                        ADM
                                                    </div>
                                                <div class="media-body">
													<h5 class="mb-1 text-white"><?php echo $d['nama']; ?></h5>
													<small class="d-block"><?php echo $d['jabatan']; ?></small>
												</div>
													
												</div>
                                        </li>
                                        
                                    </ul>
                                    <br>
												
					<?php 
		}
		?>

	
											
                                </div>
                            </div>
							<canvas id="lineChart_3Kk"></canvas> 							
                        </div>
							
						<!-- <div class="col-lg-12 col-sm-12">
                                <div class="card bg-primary">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Dual Line Chart</h4>
                                    </div>
                                    <div class="card-body">
                                       
                                    </div>
									 <canvas id="lineChart_3Kk"></canvas>
                                </div>
                            </div> -->
					</div>
			   </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://lms.unigamalang.ac.id/" target="_blank">Ahmad Dewa Fitrah</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
		
        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	
    <!-- Vectormap -->
	<!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>
	
    <!-- Chartist -->
    <script src="./vendor/chartist/js/chartist.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
	<!-- Svganimation scripts -->
	<script src="./vendor/svganimation/vivus.min.js"></script>
    <script src="./vendor/svganimation/svg.animation.js"></script>
    
	<script>
	(function($) {
		"use strict"

		var direction =  getUrlParams('dir');
		if(direction != 'rtl')
		{direction = 'ltr'; }
		
		new dezSettings({
			typography: "roboto",
			version: "light",
			layout: "vertical",
			headerBg: "color_1",
			navheaderBg: "color_3",
			sidebarBg: "color_1",
			sidebarStyle: "full",
			sidebarPosition: "fixed",
			headerPosition: "fixed",
			containerLayout: "wide",
			direction: direction
		}); 

	})(jQuery);	
	</script>

</body>
</html>