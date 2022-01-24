<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Setoran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">  

						 <div class="form-group">
                            <label for="kd_setor" class="col-sm-3 control-label">ID Setoran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kd_setor" class="form-control" id="inputEmail3" placeholder="Inputkan ID Setoran" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="nm_pemberi" class="col-sm-3 control-label">Nama Petugas</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_pemberi" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Petugas" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="lokasi_tugas" class="col-sm-3 control-label">Lokasi Tugas</label>
                            <div class="col-sm-9">
                                <input type="text" name="lokasi_tugas" class="form-control" id="inputEmail3" placeholder="Inputkan Lokasi Tugas" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="target_setoran" class="col-sm-3 control-label">Target Setoran</label>
                            <div class="col-sm-9">
                                <input type="text" name="target_setoran" class="form-control" id="inputEmail3" placeholder="Inputkan Target Setoran" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="setoran" class="col-sm-3 control-label">Setoran</label>
                            <div class="col-sm-9">
                                <input type="text" name="setoran"class="form-control" id="inputEmail3" placeholder="Inputkan Setoran" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_setor" class="col-sm-3 control-label">Tanggal Setoran</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_setor" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Setoran" required>
                            </div>
                        </div>
                        
						<div class="form-group">
                            <label for="nm_penerima" class="col-sm-3 control-label">Nama Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Penerima Setoran" required>
                            </div>
                        </div>


                        <!--Status-->

                    <!--    <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Dipinjam">Dipinjam</option>
									<option value="Penghapusan">Penghapusan</option>
								</select>
                            </div>
                        </div> -->

                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Setoran</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=setoran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Setoran
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
 
	$kd_setor=$_POST['kd_setor'];
	$nm_pemberi=$_POST['nm_pemberi'];
	$lokasi_tugas=$_POST['lokasi_tugas'];
  $target_setoran=$_POST['target_setoran'];
	$setoran=$_POST['setoran'];
  $tgl_setor=$_POST['tgl_setor'];
	$nama_penerima=$_POST['nm_penerima'];
	$ket=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO tbl_setoran VALUES ('','$kd_setor','$nm_pemberi','$lokasi_tugas','$target_setoran','$setoran','$tgl_setor','$ket','$nama_penerima')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Setoran Error");
    if ($query){
        echo "<script>window.location.assign('?page=setoran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
