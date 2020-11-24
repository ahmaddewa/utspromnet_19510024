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
										<h4 class="card-title">Tambah Mahasiswa</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
								<form action="tProses.php" method="post" >
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama" class="form-control" placeholder="Ahmad Dewa Fitrah">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="nim" class="form-control" placeholder="19510024">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" class="form-control" placeholder="ahmad@gmail.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <select name="jk" class="form-control">
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Jurusan</label>
                                            <div class="col-sm-9">
                                                <select name="prodi" class="form-control">
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Teknik Elektro">Teknik Elektro</option>
                                                <option value="Teknik Mesin">Teknik Mesin</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Angkatan</label>
                                            <div class="col-sm-9">
                                                <select name="angkatan" class="form-control">
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                               <textarea name="alamat" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <input type="text" name="online"  value="f" hidden>
                                        <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" >Simpan</button>
                                            </div>
                                    </form>
							</div>
									</div>
								</div>
							</div>
						</div>
					</div>
							
							
				

<?php 
require_once "footer.php";
?>