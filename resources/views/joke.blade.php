<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profil Siswa</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f0f4f8;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      padding: 30px;
    }

    .header {
      display: flex;
      align-items: center;
      border-bottom: 1px solid #e5e7eb;
      padding-bottom: 20px;
      margin-bottom: 30px;
    }

    .profile-pic {
      width: 140px;
      height: 140px;
      border-radius: 10px;
      object-fit: cover;
      margin-right: 30px;
      border: 2px solid #ccc;
    }

    .student-info {
      line-height: 1.8;
    }

    .student-info h2 {
      margin: 0;
      font-size: 24px;
    }

    .student-info p {
      margin: 4px 0;
      font-size: 16px;
      color: #374151;
    }

    .section-title {
      font-size: 20px;
      margin-bottom: 15px;
      color: #111827;
      border-left: 4px solid #2563eb;
      padding-left: 10px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
    }

    th, td {
      text-align: left;
      padding: 12px;
      border-bottom: 1px solid #e5e7eb;
    }

    th {
      background-color: #f1f5f9;
      color: #374151;
    }

    .notes {
      margin-top: 30px;
      font-style: italic;
      color: #6b7280;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
        <img src="{{ asset('images/programing.jpg') }}" alt="Foto code"
        class="profile-pic">
      <div class="student-info">
        <h2>Programing Joke</h2>
        <p>Nama: Zahadi Rizfy</p>
        <p>Kelas: TRPL 2A</p>
        <p>NIM: 2311082040</p>
        <p>Tugas: UTS Praktek</p>
        <p>Deskripsi: Program ini adalah program dimana sistem akan membuat sebuah joke, joke diambil dari APi yang telah diintegrasikan. Setiap kamu refresh maka joke akan berubah dengan automatis. selamat mencoba:></p>
      </div>
    </div>

    <div>
      <div class="section-title">Jokes Today</div>
      <p>{{ $joke }}</p>
    </div>

    <div>
        <button onclick="location.reload()" style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">
          Refresh Halaman
        </button>
      </div>
      

      <div class="notes">
        diperbarui: <span id="timestamp"></span>
      </div>
      
  </div>

  <script>
    function updateTimestamp() {
      const timestampEl = document.getElementById("timestamp");
  
      const hariList = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
      const bulanList = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
  
      const now = new Date();
  
      const hari = hariList[now.getDay()];
      const tanggal = now.getDate();
      const bulan = bulanList[now.getMonth()];
      const tahun = now.getFullYear();
  
      const jam = String(now.getHours()).padStart(2, '0');
      const menit = String(now.getMinutes()).padStart(2, '0');
  
      const formatted = `${hari}, ${tanggal} ${bulan} ${tahun} - ${jam}:${menit}`;
      timestampEl.textContent = formatted;
    }
  
    updateTimestamp(); // Panggil saat halaman dimuat
  </script>
  
</body>
</html>

