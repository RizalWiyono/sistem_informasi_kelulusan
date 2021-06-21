@extends('template.layout')

@section('title')
    Rules
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary mb-3" style="border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link text-light" href="/main">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link text-light" href="/payment">Cek Pembayaran</a>
            <a class="nav-link text-light" href="/bio">Biodata</a>
            <a class="nav-link text-light font-weight-bold active" href="/rules">Tata Tertib</a>
            <a class="nav-link text-light" href="/information">Informasi Kelulusan</a>
            </div>
        </div>
    </nav>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-3 mt-2">
        <h1 class="display-4 font-weight-bold">Tata Tertib</h1>
        <div class="bg-dark text-left text-light p-3 rounded-sm mt-5">
            <h5 class="font-weight-bold">Perhatikan aturan yang sudah tertera!</h5>
        </div>
    </div>

    <div class="col-md-12 mb-5">
        <div class="col-md-12 border border-dark" style="border-radius: 6px;">
            <h5>TATA TERTIB PESERTA
TES KOMPTENSI DASAR DENGAN
COMPUTER ASSISTED TEST (CAT)



Pengaturan Waktu/Sesi
Setiap kelompok peserta diberikan satu sesi untuk mengikuti TKD selama 120 menit.
Setiap sesi dibagi menjadi 2 proses berurutan sebagai berikut:
30 menit        : pra-tes dan latihan
90 menit        : pelaksanaan TKD (pengerjaan soal)
Verifikasi data dimulai 30 menit sebelum sesi TKD.




Tata Tertib Peserta
Peserta yang dapat menjalani TKD adalah peserta yang namanya tertuang dalam daftar hadir dan terdaftar pada waktu dan Tempat Uji Kompetensi yang telah ditentukan;
Peserta wajib membawa dan menunjukkan Kartu Tanda Peserta Seleksi (KTPS) dan KTP/NIK kepada Pegawas Ujian;
Peserta wajib melakukan verifikasi data sebelum masuk ruangan tes untuk menjalani pra-tes dan latihan;
Peserta yang datang pada saat/sesudah pra-tes berlangsung tidak diperkenankan mengikuti TKD. Peserta wajib memastikan kehadirannya di lokasi tes pada saat proses verifikasi data berlangsung;
Peserta wajib menandatangani daftar hadir;
Peserta wajib menempati kursi yang telah ditentukan panitia;
Peserta wajib meletakkan KTPS dan KTP/NIK di atas meja;
Peserta dilarang:
keluar masuk ruangan ujian selama pelaksanaan TKD;
membuat catatan-catatan di meja, atau bekerja sama dengan peserta yang lain, atau tindakan lain yang dapat dikategorikan sebagai tindakan kecurangan/mengarah kepada kecurangan;
mengaktifkan Handphone selama proses pelaksanaan ujian;
menggunakan kalkulator dan alat hitung lainnya;
mengganggu peserta lain selama sesi berlangsung.
C. Tata Cara Ujian Online

Login pada sistem tes online sesuai dengan nomor peserta pada KTPS.
Latihan menggunakan sistem tes online dilaksanakan selama ± 5-10 menit dengan soal ujicoba atau soal latihan.
Mengikuti tes yang sesungguhnya dengan mengakses soal yang disediakan.
Durasi tes akan berlangsung selama 90 menit. Waktu tes akan tampil di layar komputer dan menghitung mundur saat soal tes mulai diakses. Butir soal akan muncul di layar komputer satu per satu.
Menjawab soal tes dapat dilakukan dengan 2 cara: memilih jawaban benar menggunakan mouse atau memilih jawaban benar dengan menekan keyboard (huruf A atau B atau C atau D).
Jika terjadi salah pilih jawaban, peserta dapat memperbaiki jawaban dengan cara mengganti pilihan dengan jawaban yang dianggap benar. Jawaban Anda otomatis akan diganti dengan pilihan jawaban yang terakhir. Mengganti jawaban beberapa kali dapat dilakukan dan tidak mengurangi nilai peserta, namun harus dipertimbangkan waktunya.
Untuk memudahkan peserta mengidentifikasi kelengkapan jawaban, soal-soal yang belum dijawab ditandai dengan warna merah pada sisi kanan layar. Indikator Soal Ujian tersebut akan otomatis berubah menjadi warna hijau setelah peserta menjawab soal.
Aplikasi CAT akan berhenti secara otomatis ketika waktu tes berakhir (hitungan mundur menjadi angka 0).


D. Sanksi

Panitia berhak menjatuhkan sanksi kepada peserta yang melanggar tata tertib. Sanksi dapat berupa teguran lisan, sampai pembatalan yang bersangkutan sebagai peserta tes.

E. Ketentuan Lain

Apabila terjadi kegagalan dalam pelaksanaan sesi (misalnya karena aliran listrik padam), maka Unit Kerja TUK akan menjadwal ulang sesi yang gagal dilaksanakan dengan tidak menggeser jadwal sesi lain yang telah ditetapkan;
Untuk sesi yang sedang berjalan dan mengalami kegagalan maka sesi tersebut akan diteruskan kembali setelah sistem aplikasi berjalan normal dan sesi berikutnya akan dijadwal ulang. Jawaban peserta akan tersimpan dalam sistem, dan peserta dapat melanjutkan mengerjakan soal-soal tes yang belum dijawab;
Peserta yang dinyatakan Memenuhi Persyaratan TKD akan diumumkan pada alamat web http://cpns.kemdikbud.go.id;
Panitia tidak melakukan komunikasi pribadi dengan peserta. Pengaduan akan ditanggapi hanya jika disampaikan melaluihelpdesk.cpns@kemdikbud.go.id atau Layanan Pengaduan pada alamat web http://cpns.kemdikbud.go.id.
</h5>
        </div>
    </div>

    <footer class="footer mt-5 py-2 bg-primary text-center" style="border-top-left-radius: 6px; border-top-right-radius: 6px;">
        <div class="container">
            <span class="text-light font-weight-bold">Web Informasi Mahasiswa</span>
        </div>
    </footer>
@endsection
