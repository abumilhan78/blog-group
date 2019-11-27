<?php 
	class Frontend extends Database
	{
		
		public function index()
		{
			$blog = mysqli_query($this->koneksi,
				"SELECT artikel.id, artikel.judul, artikel.slug, artikel.foto, artikel.tgl_dibuat, kategori.nama as nama_kategori, kategori.slug as link, users.nama as penulis FROM ((artikel JOIN kategori ON kategori.id = artikel.id_kategori) JOIN users on users.id = artikel.id_user)"
			);
			return $blog;
		}

		public function info($id)
		{
			$blog = mysqli_query($this->koneksi,"SELECT artikel.id, artikel.judul, artikel.slug, artikel.foto, artikel.tgl_dibuat, kategori.nama as nama_kategori, kategori.slug as link, users.nama as penulis FROM ((artikel JOIN kategori ON kategori.id = artikel.id_kategori) JOIN users on users.id = artikel.id_user) WHERE artikel.id=$id"
		);
			return $blog;
		}

	}
 ?>