<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_setoran WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Setoran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                        <div class="form-group">
                            <label for="kdSetor" class="col-sm-3 control-label">ID Setoran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kd_setor" value="<?=$data['kd_setor']?>"class="form-control" id="inputEmail3" placeholder="ID Setoran">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nmPetugas" class="col-sm-3 control-label">Nama Petugas</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_pemberi" value="<?=$data['nm_pemberi']?>"class="form-control" id="inputEmail3" placeholder="Nama Petugas">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="lokasiTugas" class="col-sm-3 control-label">Lokasi Tugas</label>
                            <div class="col-sm-9">
                                <input type="text" name="lokasi_tugas" value="<?=$data['lokasi_tugas']?>"class="form-control" id="inputEmail3" placeholder="Lokasi Tugas">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="targetSetoran" class="col-sm-3 control-label">Target Setoran</label>
                            <div class="col-sm-9">
                                <input type="text" name="target_setoran" value="<?=$data['target_setoran']?>"class="form-control" id="inputEmail3" placeholder="Target Setoran">
                            </div>
                        </div>

							<div class="form-group">
                            <label for="setoran" class="col-sm-3 control-label">Setoran</label>
                            <div class="col-sm-9">
                                <input type="text" name="setoran" value="<?=$data['setoran']?>"class="form-control" id="inputEmail3" placeholder="Setoran" >
                            </div>
                        </div>

                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Setoran</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2022;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
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

                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                            

                        </div>
                        <!--end tanggal lahir-->           


                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nmPenerima" class="col-sm-3 control-label">Nama Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_penerima" value="<?=$data['nm_penerima']?>" class="form-control" id="inputPassword3" placeholder="Nama Penerima Setoran">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Setoran</button>
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
    $kdSetor=$_POST['kd_setor'];
    $nmPetugas=$_POST['nm_pemberi'];
	$lokasiTugas=$_POST['lokasi_tugas'];
    $targetSetoran=$_POST['target_setoran'];
	$setoran=$_POST['setoran'];
    $tgl_setor=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
	$ket=$_POST['keterangan'];
    $nmPenerima=$_POST['nm_penerima'];
    //buat sql
    $sql="UPDATE tbl_setoran SET kd_setor='$kdSetor',nm_pemberi='$nmPetugas',lokasi_tugas='$lokasiTugas',target_setoran='$targetSetoran',setoran='$setoran',
	tgl_setor='$tgl_setor',keterangan='$ket',nm_penerima='$nmPenerima' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=setoran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



