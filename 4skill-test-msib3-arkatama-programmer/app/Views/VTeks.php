<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1 style="text-align: center;">Data Identitas</h1>
	<!-- <center><a href="<?php echo base_url('CDashboard/halamanTambah') ?>">Tambah Data</a></center> -->
	<!-- <br> -->
    
    <form action="<?php echo base_url('CStart/parseTeks') ?>" method = "post" enctype="multipart/form-data">
		<fieldset>
			<legend><h3>Tambah Data</h3></legend>
			<table>
                <h4>Mohon masukkan NAMA, UMUR, dan KOTA secara berurutan</h4>
				<tr>
					<td><input type="text" name="teks" id="teks" size="50" placeholder="JOHN 26 JAKARTA"/></td>
				</tr>

				<tr>
					<td><input type="submit" name="simpan" id="simpan" value="Submit"></td>
				</tr>

			</table>
		</fieldset>
	</form>
    <br><br>

	<table border="1" style="margin: auto;">
		<thead>
        <tr>
                <th>NO</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>CITY</th>
            </tr>

            <?php
                $no = 1;
                foreach ($identitas as $idnt) :
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $idnt->NAME; ?></td>
                    <td><?= $idnt->AGE; ?></td>
                    <td><?= $idnt->CITY; ?></td>
                </tr>
            <?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>