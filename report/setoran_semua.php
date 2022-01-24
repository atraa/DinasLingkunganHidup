<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Setoran</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi<br><b>Dinas Lingkungan Hidup</b><br>Tanjungbalai </h2>
                        <h4>Jl. Gaharu No.14 Sirantau, Datuk Bandar, Kota Tanjung Balai, Sumatera Utara 21332, Indonesia</h4>
                        <hr>
                        <h3>DATA SELURUH SETORAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
								<th>No.</th>
                                <th width="15%">ID Setoran</th>
                                <th width="17%">Nama Petugas</th>
                                <th width="14%"><center>Lokasi Tugas</center></th>
                                <th width="15%">Target Setoran</th>
                                <th width="15%">Setoran</th>
                                <th width="10%">Tgl. Setor</th>
                                <th>Keterangan</th>
                                <th>Staff Penerima Setoran</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_setoran";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                     <td><?= $nomor ?></td>
                                    <td><?= $data['kd_setor'] ?></td>
                                    <td><?= $data['nm_pemberi'] ?></td>
                                    <td><?= $data['lokasi_tugas'] ?></td>
                                    <td><?= $data['target_setoran'] ?></td>
                                    <td><?= $data['setoran'] ?></td>
                                    <td><?= $data['tgl_setor'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                    <td><?= $data['nm_penerima'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="9" class="text-right">
                                        Tanjungbalai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Program<strong></u><br>
                                        NIP.
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>