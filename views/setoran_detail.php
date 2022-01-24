<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Setoran</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_setoran WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>ID Setoran</td> <td><?= $data['kd_setor'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Petugas</td> <td><?= $data['nm_pemberi'] ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi Tugas</td> <td><?= $data['lokasi_tugas'] ?></td>
                        </tr>
						<tr>
                            <td>Target Setoran</td> <td><?= $data['target_setoran'] ?></td>
                        </tr>
                        <tr>
                            <td>Setoran</td> <td><?= $data['setoran'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Setoran</td> <td><?= $data['tgl_setor'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>						
						<tr>
                            <td>Staff Penerima Setoran</td> <td><?= $data['nm_penerima'] ?></td>
                        </tr>
												
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=setoran&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Setoran </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

