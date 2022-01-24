<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_anggaran WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Anggaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_anggaran" class="col-sm-3 control-label">ID Anggaran</label>
                             <div class="col-sm-9">
								<input type="text" name="kd_anggaran" value="<?=$data['kd_anggaran']?>"class="form-control" id="inputEmail3" placeholder="ID Anggaran" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengirim" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengirim" value="<?=$data['nama_pengirim']?>"class="form-control" id="inputEmail3" placeholder="Nama Pengirim">
                            </div>
                        </div>
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Dikirim</label>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>
                            </div>
                            
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            
                            <!--untuk tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2022;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal--> 
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <!-- <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Kembali</label> -->
                            <!--untuk tahun-->
                            <!-- <div class="col-sm-2 col-xs-9">
                                <select name="tahun_kem" class="form-control">
                                    ?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="?=$i?>"> ?=$i?> </option>
                                    ?php }?>
                                    
                                </select>

                            </div> -->
                            <!--Untuk Bulan-->
                            <!-- <div class="col-sm-2 col-xs-9">
                                <select name="bulan_kem" class="form-control">
                                    ?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="?=$j?>"> ?=$bulan[$j]?> </option>
                                    ?php }?>
                                    
                                </select>

                            </div> -->
                            <!--Untuk Tanggal-->
     <!--                        <div class="col-sm-2 col-xs-9">
                                <select name="tanggal_kem" class="form-control">
                                    ?php for($k=31;$k>0;$k--) {?>
                                    <option value="?=$k?>"> ?=$k?> </option>
                                    ?php }?>
                                    
                                </select>

                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" value="<?=$data['jumlah']?>" class="form-control" id="inputPassword3" placeholder="Jumlah">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Anggaran</button>
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
    $kd_anggaran=$_POST['kd_anggaran'];
	$nama_pengirim=$_POST['nama_pengirim'];
	$tglKirim=$_POST['tanggal']."-".$_POST['bulan']."-".$_POST['tahun'];
	// $tglKembali=$_POST['tahun_kem']."-".$_POST['bulan_kem']."-".$_POST['tanggal_kem'];
		// $thnKem =$_POST['tahun_kem'];
        // $blnKem =$_POST['bulan_kem'];
        // $tglKem =$_POST['tanggal_kem'];
    	// 	$thnpin =$_POST['tahun'];
    	// 	$blnpin =$_POST['bulan'];
    	// 	$tglpin =$_POST['tanggal'];
    	// $lamapinjam= (($thnKem - $thnpin)*365)+(($blnKem - $blnpin)*30)+($tglKem - $tglpin);
    $jumlah=$_POST['jumlah'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE tbl_anggaran SET kd_anggaran = '$kd_anggaran', nama_pengirim='$nama_pengirim', tgl_kirim='$tglKirim', jumlah='$jumlah',
	ket='$ket' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Anggaran Error");
    if ($query){
        echo "<script>window.location.assign('?page=anggaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Anggaran Gagal');<script>";
    }
    }

?>



