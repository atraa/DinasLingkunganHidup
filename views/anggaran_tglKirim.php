<?php
$kd_anggaran=$_GET['kd_anggaran'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_anggaran WHERE kd_anggaran ='$kd_anggaran'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tanggal Dikirim Anggaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="IdAnggaran" class="col-sm-3 control-label">ID Anggaran</label>
                            <div class="col-sm-9">
								<input type="text" name="kd_anggaran" value="<?=$data['kd_anggaran']?>" class="form-control" id="inputEmail3" placeholder="ID Anggaran" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="NmPengirim" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengirim" value="<?=$data['nama_pengirim']?>" class="form-control" id="inputEmail3" placeholder="Nama Pengirim" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="TglDikirim" class="col-sm-3 control-label">Tanggal Dikirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_kirim" value="<?=$data['tgl_kirim']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Dikirim" readonly="true">
                            </div>
                        </div> 
						
                        <div class="form-group">
                            <label for="Jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" value="<?=$data['jumlah']?>" class="form-control" id="inputEmail3" placeholder="Jumlah" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputEmail3" placeholder="Keterangan" readonly="true">
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Tanggal</button>
								<a href="?page=anggaran&actions=tampil" class="btn btn-danger"><span class="fa fa-ban"></span> Batal</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	// $tglPinjam =$_POST['tglPinjam'];
	// 	$potTgl = substr($tglPinjam,8,2);
	// 	$potBln = substr($tglPinjam,5,2);
	// 	$potThn = substr($tglPinjam,0,4);
	// $tglKembali=$_POST['tglKembali'];
	// 	$potTglKem = substr($tglKembali,8,2);
	// 	$potBlnKem = substr($tglKembali,5,2);
	// 	$potThnKem = substr($tglKembali,0,4);
	// $lamapinjam = (($potThnKem - $potThn)*360)+(($potBlnKem - $potBln)*30)+($potTglKem - $potTgl);
    //buat sql
    $sql="UPDATE tbl_anggaran SET tgl_kirim='$tgl_kirim' WHERE kd_anggaran='$kd_anggaran'";
	// $sqlArsip="UPDATE arsip SET status='Ada' WHERE kd_anggaran='$kd_anggaran'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
	// $queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=anggaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>