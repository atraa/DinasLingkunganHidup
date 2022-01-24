<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Anggaran</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_anggaran WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Anggaran</td>
                            <td><?= $data['kd_anggaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pengirim</td> <td><?= $data['nama_pengirim'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Dikirim</td> <td><?= $data['tgl_kirim'] ?></td>
                        </tr>
						<tr>
                            <td>Jumlah</td> <td><?= $data['jumlah'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=anggaran&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Anggaran </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

