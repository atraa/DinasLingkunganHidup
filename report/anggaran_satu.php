<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Anggaran</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_anggaran WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center"> 
                        <h2>Sistem Informasi<br><b>Dinas Lingkungan Hidup</b><br>Tanjungbalai </h2>
                        <h4>Jl. Gaharu No.14 Sirantau, Datuk Bandar, Kota Tanjung Balai, Sumatera Utara 21332, Indonesia</h4>
                        <hr>
                        <h3>DATA ANGGARAN</h3> 
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>ID Anggaran</td> 
                                    <td><?= $data['kd_anggaran'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pengirim</td> 
                                    <td><?= $data['nama_pengirim'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Dikirim</td> 
                                    <td><?= $data['tgl_kirim'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td> 
                                    <td><?= $data['jumlah'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> 
                                    <td><?= $data['ket'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
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
