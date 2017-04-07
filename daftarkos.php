<!DOCTYPE html>
<html>
<head>
	<title>Daftar Qost</title>
	<link rel="stylesheet" type="text/css" href="daftarkos.css">
</head>
<body>
	<header></header>

	<content>
		<fieldset>
		<legend>Qost Details</legend>
			<form>
				<div>
					<label >Nama Qost</label>
					<input type="text" name="nama" placeholder="Nama Qost" id="nama"><br>

					<label>Desa</label>

					<label>Gender</label>
					<select>
						<option value="0">Laki-Laki</option>
						<option value="1">Perempuan</option>
						<option value="2">Campur</option>
					</select><br>
					<select>
						<optgroup label="Banda Aceh" value="banda_aceh">
							<option value="0">Beurawe</option>
							<option value="1">Lambhuk</option>
							<option value="2">Peurada</option>
							<option value="3">Pineung</option>
							</optgroup>
						<optgroup label="Aceh Besar" value="aceh_besar">
							<option value="4">Lamgugop</option>
							<option value="5">Blang Krueng</option>
							<option value="6">Rukoh</option>
							<option value="7">Darussalam</option>
						</optgroup>
					</select><br>
				</div>

				<div>
					<fieldset>
						<legend>Fasilitas</legend>
						<label>Jumlah Kamar</label>
						<input type="number" min="0" max="20" step="1" value="0" name="unit"><br>

						<!--<label>Tempat Tidur</label>
						<input type="number" min="0" max="2" value="0" name="jml_bed"><br>-->

						<label>Kamar Mandi</label>
						<select>
							<option value="0">Umum</option>
							<option value="1">Pribadi</option>
						</select><br>
						<input type="checkbox" name="fasilitas" value="0">AC
						<input type="checkbox" name="fasilitas" value="1">Wi-fi
						<input type="checkbox" name="fasilitas" value="2">Lemari
						<input type="checkbox" name="fasilitas" value="3">TV
						<input type="checkbox" name="fasilitas" value="4">Tempat tidur
						<input type="checkbox" name="fasilitas" value="5">Meja Belajar
						<input type="checkbox" name="fasilitas" value="6">Jemuran
						<input type="checkbox" name="fasilitas" value="7">Kulkas
					</fieldset>
				</div>

				<div>
					<label>Deskripsi</label>
					<textarea cols="100" rows="7"></textarea>
				</div>

				<div>
					<label>Harga</label>
					<input type="text" name="harga" placeholder="Rp">
					<select>
						<option>Perbulan</option>
						<option>Per 6 bulan</option>
						<option>Pertahun</option>
					</select>
				</div>

				<!--
				<label>Kota/Kab.</label>
				<select>
					<option>Banda Aceh</option>
					<option>Aceh Besar</option>
				</select>-->
			</form>
		</fieldset>

		<fieldset>
			<legend>Contact Details</legend>
			<form>	
				<input type="text" name="pemilik" placeholder="Nama Pemilik">
				<input type="email" name="email" placeholder="Email">
				<input type="tel" name="no_hp" placeholder="Contact Number">
			</form>
		</fieldset>
	</content>

	<footer></footer>
</body>
</html>
