<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Setoran</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_setoran WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>DATA SETORAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>ID Setoran</td> 
                                    <td><?= $data['kd_setor'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Petugas</td> 
                                    <td><?= $data['nm_pemberi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Lokasi Tugas</td> 
                                    <td><?= $data['lokasi_tugas'] ?></td>
                                </tr>
                                <tr>
                                    <td>Target Setoran</td> 
                                    <td><?= $data['target_setoran'] ?></td>
                                </tr>
                                <tr>
                                    <td>Setoran</td> 
                                    <td><?= $data['setoran'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Setoran</td> 
                                    <td><?= $data['tgl_setor'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> 
                                    <td><?= $data['keterangan'] ?></td>
                                </tr>
								<tr>
                                    <td>Staff Penerima Setoran</td> 
                                    <td><?= $data['nm_penerima'] ?></td>
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