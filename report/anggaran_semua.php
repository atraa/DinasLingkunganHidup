<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Anggaran</title>
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
                        <h3>DATA SELURUH ANGGARAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
                                    <th width="18%">ID Anggaran</th>
                                    <th>Nama Pengirim</th>
                                    <th>Tanggal Dikirim</th>
                                    <th>Jumlah</th>
                                    <th>Keterangan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_anggaran";
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
                                    <td><?= $data['kd_anggaran'] ?></td>
                                    <td><?= $data['nama_pengirim'] ?></td>
                                    <td><?= $data['tgl_kirim'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                    <td><?= $data['ket'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Tanjungbalai,  <?= date("d-m-Y") ?>
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
