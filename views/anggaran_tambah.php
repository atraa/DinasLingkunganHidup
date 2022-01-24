<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Anggaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                       <!--Status-->

                       <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">ID Setoran</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="kd_setor" class="form-control">
                                    <option value="<?=@$kd_setor?>"><?=@$kd_setor?>  </option>
                                    <?php 
                                     include '../config/koneksi.php';

                                     $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_setoran");
                                     while ($data = mysqli_fetch_array($tampil)) :
                                      ?>
                               
                                    <option value="<?=$data['kd_setor'];?>"><?=$data['kd_setor'];?></option>
                                
                                 <?php endwhile;?>
                                </select>
                            </div>
                        </div>

                        <!--Akhir Status-->

                         <div class="form-group">
                            <label for="IdAnggaran" class="col-sm-3 control-label">ID Anggaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kd_anggaran" class="form-control" id="inputEmail3" placeholder="Inputkan ID Anggaran. Example:AGR/001" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="NmPengirim" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengirim" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengirim" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="TglDikirim" class="col-sm-3 control-label">Tanggal Dikirim</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_kirim" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Dikirim" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Anggaran</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=anggaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Anggaran
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
    $kd_anggaran=$_POST['kd_anggaran'];
    $nama_pengirim=$_POST['nama_pengirim'];
    $tgl_kirim=$_POST['tgl_kirim'];
    $jumlah=$_POST['jumlah'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO tbl_anggaran VALUES ('','$kd_setor','$kd_anggaran','$nama_pengirim','$tgl_kirim','$jumlah','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Anggaran Error");
    if ($query){
        echo "<script>window.location.assign('?page=anggaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Anggaran Gagal');<script>";
    }
    }

?>
