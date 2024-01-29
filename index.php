<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Undangan Pernikahan</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playball&family=Tangerine&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playball&family=Tangerine&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" />
  <style>
    /* Formulir Tamu */
    #guestForm {
      margin-top: 38px;
      text-align: center;
    }

    #guestForm label {
      display: block;
      /* margin-bottom: 5px; */
    }

    #guestForm input[type="text"],
    #guestForm textarea,
    #guestForm select {
      width: 90%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      resize: vertical;
    }

    #guestForm input[type="text"] {
      margin-bottom: 6px;
    }

    #guestForm select {
      width: 90%;
      margin-bottom: 10px;
    }

    #guestForm input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 40%;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      /* Efek shadow */
      transition: background-color 0.3s ease;
      /* Transisi untuk perubahan warna */
      font-family: Arial, sans-serif;
      /* Pilihan font yang lebih modern */
    }

    #guestForm input[type="submit"]:hover {
      background-color: #45a049;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      /* Efek shadow yang lebih besar saat hover */
    }

    /* Gaya Umum */
    .ucapanSesuatu {
      padding-bottom: 100%;
      background-size: cover;
      background-image: url(img/TEMA-01-NEW-live-atas.jpg);
    }

    .ucapanSesuatu h1 {
      text-align: center;
      color: white;
      font-size: 48px;
      font-family: 'Tangerine', cursive;
      padding-top: 14px;
      transform: translate(0%, 70%);
    }

    .ucapanSesuatu p {
      padding-right: 10px;
      padding-left: 10px;
      margin-top: 56px;
      font-size: 13px;
      color: black;
      font-weight: 3700;
      text-align: left;
      margin-left: 10px;
      margin-right: 10px;
    }


    table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
      color: white;
      /* Set warna teks menjadi putih */

    }

    table,
    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
      color: #333;
    }

    .lowongan-item {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 16px;
      margin-bottom: 16px;
    }

    .lowongan-item h2 {
      font-size: 18px;
      margin-bottom: 8px;
      color: #333;
    }

    .lowongan-item p {
      font-size: 14px;
      color: #666;
    }

    .lowongan-item .hubungi-admin {
      background-color: #1d3c45;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      margin-top: 10px;
      transition: background-color 0.3s;
    }

    .lowongan-item .hubungi-admin:hover {
      background-color: #147e8e;
    }

    /* Tambahkan gaya untuk tombol "Hapus Lowongan" */
    .hapus-lowongan {
      background-color: #1d3c45;
      /* Warna latar belakang */
      color: #fff;
      /* Warna teks */
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      margin-top: 10px;
      transition: background-color 0.3s;
    }

    .hapus-lowongan:hover {
      background-color: #147e8e;
      /* Warna latar belakang saat dihover */
    }

    /* Sesuaikan warna dan ukuran tombol sesuai preferensi Anda */


    /* CSS untuk modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.7);
    }

    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 600px;
      position: relative;
      text-align: left;
      /* Ubah tata letak teks ke kiri */
    }

    .modal-content h1 {
      margin-bottom: 10px;
      font-size: 30px;
    }

    .modal-content hr {
      border: 1px solid #ccc;
      /* Warna dan lebar garis */
      margin: 10px 0;
      /* Atur jarak atas dan bawah */
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover {
      color: #000;
    }

    /* Formulir dalam modal */
    #contactForm {
      display: flex;
      flex-direction: column;
      gap: 0px;
      /* Jarak antara elemen dalam kolom direduksi menjadi 0px */
    }

    #contactForm label {
      margin-bottom: 4px;
      /* Jarak bawah yang lebih kecil */
    }

    #contactForm input[type="text"],
    #contactForm input[type="email"],
    #contactForm textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      margin-bottom: 6px;
      width: 100%;
      box-sizing: border-box;
      background-color: transparent;
      /* Menambahkan properti ini untuk menghapuskan warna latar belakang */
    }

    #contactForm textarea {
      height: 100px;
      margin-bottom: 6px;
      /* Jarak bawah yang lebih kecil */
    }

    #contactForm button {
      background-color: #1d3c45;
      color: #fff;
      padding: 20px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 20px;
      transition: background-color 0.3s;
      margin-top: 10px;
      /* Menambahkan jarak ke atas */
    }

    #contactForm button:hover {
      background-color: #147e8e;
    }

    @media screen and (max-width: 768px) {
      .nav-links {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-links li {
        margin: 10px 0;
      }

      .container {
        padding: 10px;
      }

      table {
        font-size: 14px;
      }

      table th,
      table td {
        padding: 8px;
      }
    }

    /* CSS Styling */
    .ucapan-tamu {
      background-color: #f4f4f4;
      padding: 8px;
      border-radius: 5px;
      margin-top: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align: left;
      margin-right: 10px;
      margin-left: 10px;
      /* Menjadikan konten rata kiri */
    }

    .ucapan-tamu-item {
      border-bottom: 1px solid #ccc;
      margin-bottom: 15px;
      padding-bottom: 15px;
    }

    .ucapan-tamu-item p {
      margin: 2px 0;
    }

    #tanggalPembuatan {
      margin-bottom: 8px;
      font-size: 18px;
      color: #555;
      padding-bottom: 4px;
      padding-top: 4px;
      width: 90%;
      /* Menyesuaikan lebar dengan input lain */
      box-sizing: border-box;
      /* Memastikan lebar termasuk padding dan border */
      margin-top: 10px;
      /* Menambahkan jarak ke atas */
      border-radius: 4px;
      border-left-width: 0px;
      border-bottom-width: 0px;
      border-top-width: 0px;
      border-right-width: 0px;
    }
  </style>
</head>

<body>
  <div class="lamanUtama">
    <p class="wedding" style="color: black; margin-bottom: 10px">THE WEDDING OF</p>
    <div class="container">
      <div class="lingkaran-lonjong"></div>
      <div class="name">
        <h1 style="font-family: 'Playball', cursive">Adiba & Habib</h1>
        <p style="color: black; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
          Kami Berharap Anda Menjadi Bagian Dari Hari Istimewa Kami!
        </p>
      </div>
      <div class="information">
        <div class="info-item">
          <h6>50+</h6>
          <p>Hari</p>
        </div>
        <div class="info-item">
          <h6>100+</h6>
          <p>Jam</p>
        </div>
        <div class="info-item">
          <h6>700+</h6>
          <p>Menit</p>
        </div>
      </div>
      <p style="color: black; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
        Rabu, 27 Desember 2023</p>
      <button class="saveButton">Save to Date</button>
    </div>
  </div>

  <!-- Bio Laki -->
  <div class="biografiLaki">
    <div class="ucapan">
      <img src="img/bismillah.svg" alt="" />
      <p>Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta Kerabat sekalian untuk menghadiri acara
        pernikahan kami:</p>
    </div>
    <div class="lingkaranLaki"></div>
    <p style="font-family: 'Tangerine', cursive; font-size: 48px; margin-bottom: 4px; margin-top: 20px">Habib Yulianto
    </p>
    <p style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 14px; text-align: center">
      Putra Pertama Bapak Habib <br />& Ibu Adiba
    </p>
    <!-- Menambahkan lingkaran di bawah paragraf -->
    <div class="lingkaranBawah"></div>

    <!-- Tombol menuju media sosial -->
    <div class="mediaSosial">
      <a href="https://www.facebook.com/link_anda" target="_blank">
        <i class="bi bi-facebook" style="font-size: 30px"></i>
      </a>
      <a href="https://www.instagram.com/link_anda" target="_blank" style="margin-left: 10px">
        <i class="bi bi-instagram" style="font-size: 30px"></i>
      </a>
    </div>
    <h1 style="font-family: 'Great Vibes', cursive; font-size: 36px; margin-top: 40px">&</h1>
  </div>

  <!-- Bio Perempuan -->
  <div class="biografiPerempuan">
    <div class="lingkaranPerempuan"></div>
    <p style="font-family: 'Tangerine', cursive; font-size: 48px; margin-bottom: 4px; margin-top: 20px">Adiba Putri
      Syakila</p>
    <p style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 14px; text-align: center">
      Putra Pertama Bapak Habib <br />& Ibu Adiba
    </p>
    <!-- Menambahkan lingkaran di bawah paragraf -->
    <div class="lingkaranBawah"></div>

    <!-- Tombol menuju media sosial -->
    <div class="mediaSosial">
      <a href="https://www.facebook.com/link_anda" target="_blank">
        <i class="bi bi-facebook" style="font-size: 30px"></i>
      </a>
      <a href="https://www.instagram.com/link_anda" target="_blank" style="margin-left: 10px">
        <i class="bi bi-instagram" style="font-size: 30px"></i>
      </a>
    </div>
  </div>

  <div class="loveStory">
    <p style="font-family: 'Tangerine', cursive; font-size: 48px; margin-bottom: 4px; text-align: center">Love Story</p>
    <div class="loveIcon">
      <i class="bi bi-heart-fill" style="font-size: 20px; color: white"></i>
    </div>
    <div class="loveStoryContent">
      <div class="loveContent">
        <h2>Awal Cerita</h2>
        <img src="img/berdua.jpg" alt="Deskripsi Gambar" />
        <p>Berawal dari teman kuliah bersama-sama memperjuangkan S1 Teknik Sipil, bertemu pada tahun 2016 hingga selalu
          bertemu untuk sesekali makan bersama, lalu menjalin hubungan pacaran 11-11-2017.</p>
      </div>
    </div>
  </div>

  <div class="loveStory">
    <div class="loveIconPernikahan">
      <i class="bi bi-heart-fill" style="font-size: 20px; color: white"></i>
    </div>
    <div class="loveStoryContent">
      <div class="loveContent">
        <h2>Lamaran</h2>
        <img src="img/pernikahan.jpg" alt="Deskripsi Gambar" />
        <p>Pada tanggal 23-03-2019 kami mengikat diri pada pertunangan dan pada tanggal 29-10-2020 kami pun mengadakan
          akad nikah. Alhamdulillah perjalanan ini sampai pada akhirnya,</p>
      </div>
    </div>
  </div>

  <div class="loveStory">
    <div class="loveIconResepsi">
      <i class="bi bi-heart-fill" style="font-size: 20px; color: white"></i>
    </div>
    <div class="loveStoryContent">
      <div class="loveContent">
        <h2>Resepsi Pernikahan</h2>
        <img src="img/resepsi.jpg" alt="Deskripsi Gambar" />
        <p>Kami bisa melakukan acara resepsi yang insyAllah diadakan pada Minggu, 05 Juni 2022.</p>
      </div>
    </div>
  </div>

  <div class="saveTheDate">
    <h1>Save The Date</h1>
    <p>"Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah).“</p>
    <p>(QS. Az Zariyat: 49)</p>
    <div class="cover"></div>
    <!-- Tambahkan div baru untuk menutupi -->
  </div>
  <div class="lihatLokasi">
    <div class="infoAkadNikah">
      <!-- Informasi akad nikah -->
      <h1>Akad Nikah</h1>
      <p style="font-weight: 500; font-style: italic">Kamis, 09 September 2023</p>
      <p style="font-style: italic; font-weight: 360">Pukul 10.00 WIB</p>
      <p style="font-style: italic; font-weight: 360">Alamat : Sumberejo Rt.05 Rw.01 Sidoarjo</p>
    </div>

    <div class="infoResepsi">
      <!-- Informasi akad nikah -->
      <h1>Resepsi</h1>
      <p style="font-weight: 500; font-style: italic">Kamis, 09 September 2023</p>
      <p style="font-style: italic; font-weight: 360">Pukul 10.00 WIB</p>
      <p style="font-style: italic; font-weight: 360">Alamat : Sumberejo Rt.05 Rw.01 Sidoarjo</p>
    </div>

    <div class="button-container">
      <!-- Tombol Lihat Lokasi dengan Ikon Bootstrap -->
      <button id="lihatLokasiButton" onclick="lihatLokasi()"><span class="bi bi-map"></span> Lihat Lokasi</button>
    </div>
  </div>
  <div class="liveStreaming">
    <div class="content">
      <h1>Live Streaming</h1>
      <p>Kami mengundang Bapak/Ibu/Saudara/i untuk menyaksikan Pernikahan
        kami secara Virtual yang disiarkan langsung
        melalui Sosial Media di bawah ini</p>
      <p>Tanggal : Minggu, 28 Juli 2024 - Pukul : 09.00 WIB</p>
      <div class="button-container">
        <a href="https://www.instagram.com/link_anda" target="_blank" class="liveStreaming-button">
          <i class="bi bi-instagram" style="font-size: 18px; margin-right: 8px;"></i>
          Klik Disini
        </a>
      </div>
      <h1 style="margin-top: 20px;">Amplop Digital</h1>
      <p>Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.
      </p>
      <p>Dan jika memberi adalah ungkapan tanda kasih
        Anda, Anda dapat memberi kado secara cashless.</p>
      <div class="button-container Gift">
        <button id="giftButton" class="liveStreaming-button"><i class="bi bi-gift"></i>GIFT</button>
        <div id="giftInfoContainer">
          <div class="giftInfoBox">
            <p>Informasi ATM:</p>
            <ul>
              <li>Bank: Bank XYZ</li>
              <li>Nomor Rekening: 1234567890</li>
              <li>Atas Nama: Nama Anda</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="amplopDigital"></div> -->
  <div class="galleryPhoto">
    <h1>Gallery Photo</h1>
    <p>Tidak ada yang spesial dalam cerita kami. Tapi kami sangat spesial untuk satu sama lain. Dan Kami bersyukur,
      dipertemukan Allah diwaktu terbaik, Kini kami menanti hari istimewa kami.</p>
    <div class="photo-container">
      <img src="img/Mini-1-scaled-1-1.jpg" alt="" class="photo">
      <img src="img/pernikahan.jpg" alt="" class="photo">
      <img src="img/Mini-edit-3-elmy-1-2.jpg" alt="" class="photo">
      <img src="img/Mini-edit-4-elmy-1-2.jpg" alt="" class="photo">
      <img src="img/Mini-edit-5-elmy-1-2.jpg" alt="" class="photo">
      <img src="img/berdua.jpg" alt="" class="photo">
    </div>
  </div>
  <div class="ucapanSesuatu">
    <h1>Ucapan Sesuatu</h1>
    <p style="color: white; text-align:center;">Berikan Ucapan & Doa Restu</p>

    <form id="guestForm" method="POST" action="php/simpanData.php">
      <input type="text" id="nama" name="nama" placeholder="Nama"><br>

      <textarea id="ucapan" name="ucapan" placeholder="Ucapan"></textarea><br>

      <select id="konfirmasi" name="konfirmasi" placeholder="Konfirmasi Kedatangan">
        <option value="Hadir">Hadir</option>
        <option value="Tidak Hadir">Tidak Hadir</option>
      </select><br>

      <label for="tanggalPembuatan" style="color:white;font-weight: 300;">Tanggal Publikasi:</label>
      <input type="date" id="tanggalPembuatan" name="tanggalPembuatan" required /><br />

      <input type="submit" value="KIRIM">
    </form>

    <h2 style="text-align: center; color: white; font-size: 40px; font-family: 'Tangerine', cursive; margin-top: 20px; transform: translate(0%, 30%);">Ucapan Tamu:</h2>

    <div class="ucapan-tamu">
      <?php
      // Koneksi ke database
      include_once 'php/koneksi.php';

      // Query untuk mengambil data tamu
      $query = "SELECT nama, ucapan, konfirmasi, tanggal_pembuatan FROM tamu";

      // Eksekusi query
      $result = mysqli_query($koneksi, $query);

      // Periksa apakah query berhasil dieksekusi
      if (!$result) {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        exit();
      }

      $nomor = 1;

      // Cek apakah ada data lowongan pekerjaan
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // Tampilkan data lowongan pekerjaan dalam div .lowongan-item
          echo "<div class='ucapan-tamu-item'>";
          // echo "<h1>{$row['judul']}</h1>";
          echo "<p>Ucapan ke : " . $nomor . "</p>"; // Menampilkan nomor
          echo "<p>Nama : {$row['nama']}</p>";
          echo "<p>Ucapan : {$row['ucapan']}</p>";
          echo "<p>Kehadiran : {$row['konfirmasi']}</p>";
          echo "<p>Tanggal Publikasi : {$row['tanggal_pembuatan']}</p>";

          echo "</div>";

          // Tambahkan 1 ke nomor
          $nomor++;
        }
      } else {
        // Tampilkan pesan jika tidak ada lowongan pekerjaan
        echo "<p style='margin-top: 10px;'>Maaf, tidak ada ucapan saat ini.</p>";
      }

      // Tutup koneksi
      mysqli_close($koneksi);
      ?>
    </div>
  </div>
  <div class="penutup"></div>
  <script>
    // Fungsi untuk menangani klik tombol "Lihat Lokasi"
    function lihatLokasi() {
      // Gantilah URL_Lokasi dengan URL yang sesuai dengan lokasi Anda
      var lokasiURL = 'URL_Lokasi';

      // Buka lokasi dalam tab atau jendela baru
      window.open(lokasiURL, '_blank');
    }

    document.addEventListener('DOMContentLoaded', function() {
      var giftButton = document.getElementById('giftButton');
      var giftInfoContainer = document.getElementById('giftInfoContainer');
      var giftInfoBox = document.querySelector('.giftInfoBox');

      giftButton.addEventListener('click', function() {
        giftInfoBox.classList.toggle('hidden');
      });
    });

    // Mencegah pengiriman jam saat formulir disubmit
    document.getElementById('guestForm').addEventListener('submit', function(event) {
      // Mendapatkan nilai dari input tanggalPembuatan
      var tanggalPembuatan = document.getElementById('tanggalPembuatan').value;

      // Memisahkan nilai tanggal, bulan, dan tahun
      var tanggal = new Date(tanggalPembuatan);
      var tahun = tanggal.getFullYear();
      var bulan = ('0' + (tanggal.getMonth() + 1)).slice(-2); // Menambahkan 0 di depan jika bulan kurang dari 10
      var tanggal = ('0' + tanggal.getDate()).slice(-2); // Menambahkan 0 di depan jika tanggal kurang dari 10

      // Menggabungkan nilai tahun, bulan, dan tanggal menjadi format YYYY-MM-DD
      var tanggalFormatted = tahun + '-' + bulan + '-' + tanggal;

      // Memperbarui nilai input tanggalPembuatan dengan format yang baru
      document.getElementById('tanggalPembuatan').value = tanggalFormatted;
    });

    document.addEventListener("DOMContentLoaded", function() {
      // Menghitung jumlah entri ucapan tamu
      var jumlahUcapanTamu = document.querySelectorAll('.ucapan-tamu-item').length;

      // Memeriksa apakah jumlah entri lebih dari 5
      if (jumlahUcapanTamu > 5) {
        // Jika iya, tambahkan gaya CSS untuk membuatnya scrollable
        document.querySelector('.ucapan-tamu').style.overflowY = 'scroll';
        document.querySelector('.ucapan-tamu').style.maxHeight = '300px'; // Tinggi maksimum yang diinginkan
      } else {
        // Jika tidak, hilangkan gaya CSS yang membuatnya scrollable
        document.querySelector('.ucapan-tamu').style.overflowY = 'initial';
        document.querySelector('.ucapan-tamu').style.maxHeight = 'none';
      }
    });
  </script>
</body>

</html>