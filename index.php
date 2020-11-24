<?php
require_once "header.php";
?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-9 col-xxl-12">
						<div class="row">
							<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0 px-4 pt-4">
										<div class="row">
											<div class="col">
												<?php
                $result = mysqli_query($koneksi,"SELECT * FROM mahasiswa ");
                $num_rows = mysqli_num_rows($result);
                 echo '<h5 class="mb-1"> ' .$num_rows. '</h5>';
                
												echo '<span class="text-success">Mahasiswa Terdaftar</span>
											</div>
										</div>
									</div>
									<div class="chart-wrapper">
										<canvas id="areaChart_2" class="chartjs-render-monitor" height=" '.$num_rows. '"></canvas>';?>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
								<div class="card bg-primary overflow-hidden">
									<div class="card-body pb-0 px-4 pt-4">
										<div class="row">
											<div class="col text-white">
												<?php

                $result2 = mysqli_query($koneksi,"SELECT online FROM mahasiswa WHERE online='t'");
                $num_rows2 = mysqli_num_rows($result2);
                 echo '<h5 class="text-white mb-1"> ' .$num_rows2. '</h5> <span>Mahasiswa Online</span>
											</div>
										</div>
									</div>
									<div class="chart-wrapper px-2">
										<canvas id="chart_widget_2" height="'.$num_rows2.'"></canvas>';
                ?>
												
									</div>
								</div>
							</div>


							
							
							<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Daftar Mahasiswa</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-responsive-sm mb-0">
												<thead>
													<tr>
														<th style="width:20px;">
														</th>
														<th><strong>NO*</strong></th>
														<th><strong>NIM</strong></th>
														<th><strong>NAMA</strong></th>
														<th><strong>EMAIL</strong></th>
														<th><strong>JENIS KELAMIN</strong></th>
														<th><strong>PRODI</strong></th>
														<th><strong>ALAMAT</strong></th>
														<th><strong>ANGKATAN</strong></th>
														<th><strong>TANGGAL BERGABUNG</strong></th>
														<th style="width:85px;"><strong>Aksi</strong></th>
														<th><strong>STATUS</strong></th>
													</tr>
												</thead>
												<?php
			$batas = 10;
			$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
			$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
			$previous = $halaman - 1;
			$next = $halaman + 1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			$jumlah_data = mysqli_num_rows($data);
			$total_halaman = ceil($jumlah_data / $batas);
			$data_mhs = mysqli_query($koneksi,"select * from mahasiswa limit $halaman_awal, $batas");
			$nomor = $halaman_awal+1;
			$no = 1;
			while ($d = mysqli_fetch_array($data_mhs)) {
					?>
												<tbody>
													<tr>
														<td>
														</td>
														<td><b><?php echo $no++;?></b></td>
														<td><?php echo $d['nim'];?></td>
														<td><?php echo $d['nama'];?></td>
														<td><?php echo $d['email'];?></td>
														<td><?php echo $d['jk'];?></td>
														<td><?php echo $d['prodi'];?></td>
														<td><?php echo $d['alamat'];?></td>
														<td><?php echo $d['angkatan'];?></td>
														<td><?php echo $d['tanggal_input'];?></td>
														<td><a href="edit.php?id=<?php echo  $d['id']; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
															<a href="hapus.php?id=<?php echo $d['id']; ?>"  class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></td>
			 <?php
            if ($d['online'] == 't') {    
                echo '<td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i>Online</td>';
        	}else if ($d['online'] == 'f') {
        		echo '<td class="recent-stats d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i>Offline</td>';
        	}else{
				echo '
													
													</tr>
												</tbody>';}				
		}?>	
			
			
			
															

											</table>
						<nav aria-label="Page navigation example">					
			<ul class="pagination pg-blue">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item "><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul></nav>
	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
<?php 
require_once "footer.php";
?>