<!DOCTYPE html>
<html>
        <?php
            include_once('header.php');
        ?>
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">FORM ADMIN</h1>
                <nav aria-label="breadcrumb animated slideInDown">
				
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
        <?php
	        include_once('running-text.php');
        ?>
		
		<!-- Team Start -->
        <div class="container-fluid py-5 my-5 team">

                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Download File</h5>
                    <h1>Deli Husada - Health Professional Training and Learning Centre</h1>
                </div>

        </div>
        <!-- Team End -->

	<style >
		#wntable {
          border-collapse: collapse;
          width: 50%;
        }
 
        #wntable td, #wntable th {  
          border: 1px solid #ddd;
          padding: 8px;
        }
 
        #wntable tr:nth-child(even){background-color: #f2f2f2;}
 
        #wntable tr:hover {background-color: #ddd;}
 
        #wntable th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #00A8A9;
          color: white;
        }
		btn{border-radius:12px;}
	</style>
	
	<div style="width: 28%;" align="center">
		<button onclick="document.location='halaman_upload.php'"><b>Tambah Data</b></button>
		<h1> </h1>
	</div>

<div>
		<table id="wntable" style="width: 80%; border-collapse: collapse;" align="center">
			<thead>
				<tr>
					<th style="width: 30px">NO</th>
					<th style="width: 100px">KODE</th>
					<th style="width: 500px">JUDUL</th>
					<th style="width: 100px">JENIS FILE</th>
					<th style="width: 100px">UKURAN</th>
					<th style="width: 100px">AKSI</th>
				</tr>
			</thead>
			<tbody style="text-align: left;">
				<?php
					include 'Koneksi.php';
					$nomor_urut = 0;
					$result = selectAllData();
					$countData = mysqli_num_rows($result);

					if ($countData < 1) { 
				?>	
						<tr>
							<td colspan="5" style="text-align: center; font-weight: bold; font-size: 12px; padding: 5px; color: red">TIDAK ADA DATA</td>
						</tr>

				<?php
					} else {
						while ($row = mysqli_fetch_assoc($result)) {
							$nomor_urut = $nomor_urut + 1;
				?>
							<tr>
								<td><?php echo $nomor_urut; ?></td>
								<td><?php echo $row['kode_buku']; ?></td>
								<td><?php echo $row['nama_buku']; ?></td>
								<td><?php echo strtoupper($row['ekstensi']) ?></td>
								<td><?php echo number_format($row['size']/(1024*1024), 2) ?>MB</td>
								<td><a href="DownloadFile.php?url=<?php echo $row['berkas']; ?>">Download</a></td>
							</tr>
				<?php 
						}
					} 
				?>
			</tbody>
		</table>
		<br />
		<br />
		<br />
		<br />
		</div>
	
        <?php
	        include_once('footer.php');
        ?>
    </body>
</html>