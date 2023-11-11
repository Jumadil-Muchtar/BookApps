<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'gender' => 'man',
            'password' => Hash::make('123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'andi',
            'email' => 'andi@gmail.com',
            'gender' => 'man',
            'password' => Hash::make('123'),
            'role' => 'non admin'
        ]);
        Book::create([
            'judul' => 'Tentang Jasa dan Perjuangan',
            'penulis' => 'Nur Ridhawati · Bima Maarschal · Rizki Hadi',
            'tahun_terbit' => '2019',
            'jumlah_halaman' => '200',
            'ringkasan' => "Kapan pun dan di mana pun, sebagai seorang 'Pemuda Bangsa' kita akan tetap menjadi seorang anak dari tanah air tercinta. Melakukan yang terbaik untuk ibu pertiwi, dengan salah satunya yaitu 'Mengenang Jasa Pahlawan'. \nAtau mungkin, bercerita tentang bagaimana kamu mencintai Indonesia. Dalam sebuah alur yang mengesankan.\nBuku yang mencakup kumpulan cerita pendek penuh kenangan terhadap Pahlawan Indonesia.",
            'url_gambar' => "https://books.google.com/books/publisher/content/images/frontcover/LTfSDwAAQBAJ?fife=w480-h690",
            'user_id' => 1
        ]);
        Book::create([
            'judul' => 'Ayah',
            'penulis' => 'Andrea Hirata',
            'tahun_terbit' => '2015',
            'jumlah_halaman' => '432',
            'ringkasan' => "Betapa Sabari menyayangi Zorro. Ingin dia memeluknya sepanjang waktu. Dia terpesona melihat makhluk kecil yang sangat indah dan seluruh kebaikan yang terpancar darinya. Diciuminya anak itu dari kepala sampai ke jari-jemari kakinya yang mungil. Kalau malam Sabari susah susah tidur lantaran membayangkan bermacam rencana yang akan dia lalui dengan anaknya jika besar nanti. Dia ingin mengajaknya melihat pawai 17 Agustus, mengunjungi pasar malam,  membelikannya mainan, menggandengnya ke masjid,  mengajarinya berpuasa dan mengaji, dan memboncengnya naik sepeda saban sore ke taman kota.
            [Mizan, Bentang Pustaka, Andrea Hirata, Ayah, Laskar Pelangi, Rainbow Troops, Internasional, Novel, Indonesia]",
    
            'url_gambar' => "https://books.google.com/books/publisher/content/images/frontcover/tBqoCQAAQBAJ?fife=w512-h512",
            'user_id' => 3

        ]);
            
        Book::create([
            'judul' => 'Dilan 2: Dia adalah Dilanku Tahun 1991',
            'penulis' => 'Pidi Baiq',
            'tahun_terbit' => '2015',
            'jumlah_halaman' => '344',
            'ringkasan' => 'Jika aku berkata bahwa aku mencintainya, maka itu adalah sebuah pernyataan yang sudah cukup lengkap."
            -Milea
            "Senakal-nakalnya anak geng motor, Lia, mereka shalat pada waktu ujian praktek Agama."
            -Dilan
            
            @Viny_JKT48 "Aku suka Dilan-nya Kak Pidi Baiq. Baru beli, tapi sudah aku baca dua kali lho~ Buku yang menyenangkan, jadi ingin kenal Dilan XD."
            @renindydevris "Kukira cinta hanya sebatas kenal, bilang, dan jadi. Tetapi ternyata cinta itu bisa dibuat jadi seni yang amat menarik."
            @yusuf_imam29 "Terima kasih, Dilan. Dirimu telah mengajarkanku tentang banyak hal. Terutama tentang mengistimewakan wanita."
            @IanisJanuar "Selama hampir 27 tahun hidup, baru pertama kali baca novel sampe tamat. Thank You, Dilan."
            @rudijatjahja "Hatur nuhun Surayah Pidi Baiq, sudah merawat selera tawa yang dibalut kisah bahagia dua sejoli Dilan dan Milea."
            @alirohman21 "Bukan hanya novel tentang cinta remaja biasa, tapi juga cara mengungkapkan rasa sayang di luar kebiasaan."
            @saljuapi "The greatest love story the world has ever known."
            @Tedy_Pensil "Jika buku ini kumpulan rumus Fisika yang akan diujikan maka banyak pelajar yang membakarnya dan mengonsumsi abunya."
            [Mizan, DAR, Dilan, Milea, Bandung, Remaja, SMA, Indonesia]',
            
            'url_gambar' => "https://books.google.com/books/publisher/content/images/frontcover/CcFNCgAAQBAJ?fife=w480-h690",
            'user_id' => 1

        ]);

        Book::create([
            'judul' => 'Milea: Suara dari Dilan',
            'penulis' => 'Pidi Baiq',
            'tahun_terbit' => '2016',
            'jumlah_halaman' => '360',
            'ringkasan' => 'Dilan memberi penggambaran lain dari sebuah penaklukan cinta & bagaimana indahnya cinta sederhana anak zaman dahulu." @refaniris
            "Cuma satu yang kuinginkan, aku ingin cowok seperti Dilan." @_SLovaFC
            
            "Dilan brengsek! Dia selalu tahu caranya menjadi pusat perhatian, bahkan ketika jadi buku, setiap serinya selalu ditunggu." @Tedy_Pensil
            
            "Membaca Dilan itu seperti jatuh cinta lagi, lagi, dan lagi. Ah, indah, deh. Rasanya gak akan pernah bosan membacanya." @agungwyd
            
            "Bukan cuma sekadar novel, tapi bisa menjadikan yang malas baca jadi mau baca." @cobra_iqq
            
            "Kisah cintanya gak lebay. Dilan tahu bagaimana memperlakukan wanita. Novelnya keren, bahasanya gak bertele-tele." @AH_DILAN
            
            "Terima kasih Dilan telah menginspirasiku lewat ceritamu bersama Milea. Terima kasih Surayah, novelmu seru." @EnciSrifiyani
            
            "Dari Dilan kita belajar mengistimewakan wanita, romantis yang gak kuno, bahkan menjadi ayah & bunda yang hebat :)" @ginaalna
            
            "Kurasa Dilan satu-satunya novel yang aku harap ceritanya terus berlanjut, dan tidak ingin ada akhir." @TriaFitriaN41
            
            [Mizan, Pastel Books, Dilan, Milea, Romance, Remaja, Bandung, 1990, 1991, Novel, Best Seller, Indonesia]',
            
            'url_gambar' => "https://books.google.com/books/publisher/content/images/frontcover/CXkRDQAAQBAJ?fife=w512-h512",
            'user_id' => 3,

        ]);

        Book::create([
            'judul' => "'Selamat Tinggal': (unedited version)",
            'penulis' => 'Tere Liye',
            'tahun_terbit' => '2020',
            'jumlah_halaman' => "503",
            'ringkasan' => "'Selamat Tinggal'


            Tidak ada sinopsis. Anggap saja surprise saat membacanya.
            
            
            
            Buku sebaiknya tidak dibaca oleh:
            
            1. Kalian yang sedang patah hati
            
            2. Kalian yang cinta pertamanya ambyar
            
            3. Kalian yang tertipu kepalsuan.
            
            
            
            **Novel ini adalah naskah awal (asli) dari penulis; tanpa sentuhan editing, layout serta cover dari penerbit, dengan demikian, naskah ini berbeda dengan versi cetak, pun memiliki kelebihan dan kelemahan masing-masing.**",
            
            'url_gambar' => "https://books.google.com/books/publisher/content/images/frontcover/hJjiDwAAQBAJ?fife=w512-h512",
            'user_id' => 1

            ]);
    }
}
