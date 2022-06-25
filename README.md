# Lab11Web

| Nama      | Anggun Rendra |
| ----------- | ----------- |
| NIM     | 312010022       |
| Kelas   | TI.20.D.1    |

### 1. Buat folder baru dengan nama lab11_php_ci pada docroot webserver (htdocs)

![11](https://user-images.githubusercontent.com/101658076/173844854-9bebc630-ccc8-48ba-8ddc-6ae06f093c20.png)

### 2. Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini

![image](https://user-images.githubusercontent.com/101658076/173845119-1b800f19-80ad-449b-b527-1e825ecbcfbe.png)

### 3. Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![image](https://user-images.githubusercontent.com/101658076/173845717-6d2118f3-aeda-4df6-b2fc-867a0242dfec.png)

### 4. Instalasi Codeigniter 4

Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.

- Unduh Codeigniter dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
- Ubah nama direktory framework-4.x.xx menjadi ci4.
- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

![image](https://user-images.githubusercontent.com/101658076/173849333-33afcd14-5c2a-48ea-bba0-857ea62464a0.png)

### 5. Menjalankan CLI (Command Line Interface)

![1](https://user-images.githubusercontent.com/101658076/173846989-069ae0d0-e8aa-42f6-b64b-2d1214f1b048.png)

### 6. Mengaktifkan Mode Debugging

Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

![image](https://user-images.githubusercontent.com/101658076/173849014-e22a14a8-61fb-45de-9eb4-d73cc8103b3d.png)

- Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. Kemudian mengubah nama file env menjadi .env lalu setelah itu buka file tersebut dan ubah nilai variable CI_ENVORNMENT menjadi development. Setelah itu hapus tanda tagar (#) pada awal baris CI_ENVIRONMENT, ubah kode pada file app/Controller/Home.php hilangkan titik koma (;) pada akhir kode seperti berikut.

![image](https://user-images.githubusercontent.com/101658076/173849991-163a7560-0a9e-43e2-a9ce-914efd1f347f.png)

![4](https://user-images.githubusercontent.com/101658076/173850181-ec03043a-dbc9-4ce2-8f2b-9ad41641c073.png)

- Maka hasilnya akan terjadi error seperti berikut.

![image](https://user-images.githubusercontent.com/101658076/173850608-8bcc1080-43cb-48d6-98fb-224f1adc3a64.png)

### 7. Routing dan Controller

Router terletak pada file app/config/Routes.php. Pada file tersebut kita dapat mendefinisikan route untuk aplikasi yang kita buat.
Contoh: ```$routes->get('/', 'Home::index'); Kode tersebut akan mengarahkan rute untuk halaman home.

### 8. Membuat Route Baru.

![image](https://user-images.githubusercontent.com/101658076/173852365-04c17190-120a-4bb4-9048-866f7d801213.png)

- Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut. php spark routes

![6](https://user-images.githubusercontent.com/101658076/173852893-579dc1db-12d3-4d6d-8824-073a65f2d58d.png)

- Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about

![image](https://user-images.githubusercontent.com/101658076/173853219-99e9dfec-6c27-4ce3-8745-b03c23230949.png)

Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

### 9. Membuat Controller

Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101658076/173853694-94006532-8372-480b-8eb2-2dcc1e83e0a7.png)

- Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaitu halaman sudah dapat diakses.

![image](https://user-images.githubusercontent.com/101658076/173853898-c76c97d3-18a6-4f68-84dd-cee805e2374c.png)

### 10. Auto Routing

Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.

Tambahkan method baru pada Controller Page seperti berikut

![image](https://user-images.githubusercontent.com/101658076/173854100-e6ea7818-4724-45d2-8ea3-29fb0b30296f.png)

- Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos

![image](https://user-images.githubusercontent.com/101658076/173854294-a0f55a6f-c3c9-48ad-8c75-53f71113e91d.png)

### 11. Membuat View

Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101658076/173855451-c76d7ac5-891b-4fa1-b70e-bc5d5c5b8ffd.png)

- Ubah method about pada class Controller Page menjadi seperti berikut:

![image](https://user-images.githubusercontent.com/101658076/173860665-b9e28b2a-a375-4919-913c-8b289de49995.png)

- Kemudian lakukan refresh pada halaman tersebut.

![image](https://user-images.githubusercontent.com/101658076/173860869-8d345288-c6db-4eb3-aa95-943d0144661c.png)

### 12. Membuat Layout Web dengan CSS

Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![image](https://user-images.githubusercontent.com/101658076/173861298-37d10ee0-b723-4bf2-b6d1-a501dc3e7ff9.png)

 ### Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

- File app/view/template/header.php

![image](https://user-images.githubusercontent.com/101658076/173861535-a4629df7-0a6f-4451-a934-d7e778644fea.png)

- File app/view/template/footer.php

![image](https://user-images.githubusercontent.com/101658076/173861851-e0810c5f-55c4-4500-be8f-cefd69052fb8.png)

### Kemudian ubah file app/view/about.php seperti berikut.

![image](https://user-images.githubusercontent.com/101658076/173862184-2bce2306-c633-4f49-b154-701ccf6ef98a.png)

- Selanjutnya refresh tampilan pada alamat http://localhost:8080/about

![image](https://user-images.githubusercontent.com/101658076/173862425-eda7d13e-6656-41a7-937f-85d04a6713e3.png)

### Pertanyaan dan Tugas !
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

- About 

![image](https://user-images.githubusercontent.com/101658076/173862746-12355701-a237-49ef-88e2-c8a77f6b3fd8.png)

![image](https://user-images.githubusercontent.com/101658076/173862866-0db89ce0-411e-437e-8640-f6c515fa1956.png)

- Hasil Browser

![image](https://user-images.githubusercontent.com/101658076/173862997-54a110e5-3a58-43cd-afe9-19a23f7d28dd.png)

- Contact

![image](https://user-images.githubusercontent.com/101658076/173863161-db936bca-87b7-445b-8a0f-5b5d05e10185.png)

- Hasil Browser

![image](https://user-images.githubusercontent.com/101658076/173863290-27942d01-144f-4eed-af15-b84a914f70d6.png)



### *PRAKTIKUM 12: FRAMEWORK LANJUTAN (CRUD)*

### Langkah-langkah Praktikum

### 1. Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

![image](https://user-images.githubusercontent.com/101658076/174344170-7f87798b-2356-4839-9ffa-6b99bd058f73.png)

### 2. Konfigurasi Koneksi Database

Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan dua cara, yaitu pada file app/config/database.php atau menggunakan file `.env.` Pada praktikum ini kita gunakan konfigurasi pada file .env. Konfigurasi dapat dilakukan dengan cara mengubah beberapa kode pada file `htdocs\lab11_ci\ci4\.env.` Dan hilangkan tanda pagar `#` didepan

![image](https://user-images.githubusercontent.com/101658076/174345046-02a9e764-eb2c-40df-bd10-5b8c93ca71c4.png)

### 3. Membuat Model

Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori `app/Models` dengan nama `ArtikelModel.php`

![image](https://user-images.githubusercontent.com/101658076/174345187-94346939-3be0-4928-80eb-0af86417e59b.png)

### 4. Membuat Controller

Buat Controller baru dengan nama `Artikel.php` pada direktori `app/Controllers.`

![image](https://user-images.githubusercontent.com/101658076/174345317-f751a8a2-f0e8-442b-933f-d3b1ea64d054.png)

### 5. Membuat View

Buat direktori baru dengan nama `artikel` pada direktori `app/views`, kemudian buat file baru dengan nama `index.php`

![image](https://user-images.githubusercontent.com/101658076/174345491-0a48103f-b75b-47cf-8185-6382e9750db6.png)

- Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![image](https://user-images.githubusercontent.com/101658076/174345595-9f28a7ef-b6ae-4b8d-8d74-22282f10abbf.png)

- jika Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.

![image](https://user-images.githubusercontent.com/101658076/174345691-30f7d631-011a-4959-8fc6-b2c9e8e5294f.png)

- Refresh kembali browser, sehingga akan ditampilkan hasilnya.

![image](https://user-images.githubusercontent.com/101658076/174345763-72cb759d-d856-4a71-ab4c-82be3f803acf.png)

### 6. Membuat Tampilan Detail Artikel

Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada `Controller Artikel` dengan nama `view()`.

![image](https://user-images.githubusercontent.com/101658076/174346098-e826cd04-54d9-49b1-b60b-d4347b709c68.png)

### 7. Membuat View Detail

Buat view baru untuk halaman detail dengan nama `app/views/artikel/detail.php`.

![image](https://user-images.githubusercontent.com/101658076/174346247-2a16dfc3-df56-433a-9ea1-a70a4cb4931e.png)

### 8. Membuat Routing untuk artikel detail

Buka Kembali `file app/config/Routes.php`, kemudian tambahkan routing untuk `artikel detail`.

![image](https://user-images.githubusercontent.com/101658076/174346362-0ef49951-9a9c-4b6e-84ee-6658c83cd8ed.png)

- Kemudian Refresh kembali

![image](https://user-images.githubusercontent.com/101658076/174346426-edd4e2dc-b217-48d9-8bd3-ca4c4828bd98.png)

### 9. Membuat Menu Admin

- Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada `Controller Artikel` dengan nama `admin_index()`.

![image](https://user-images.githubusercontent.com/101658076/174346644-0565ca52-32e7-4c4a-b150-64b45ed6a687.png)

- Selanjutnya buat view untuk tampilan admin dengan nama `admin_index.php`

![image](https://user-images.githubusercontent.com/101658076/174346741-22e8279b-92ba-4cdc-8874-d82cfa136768.png)

- membuat file `admin_header.php`

![image](https://user-images.githubusercontent.com/101658076/174346838-c3c1cc9d-3040-4d46-bba9-edd657ddade3.png)

- Membuat file `admin_footer.php`

![image](https://user-images.githubusercontent.com/101658076/174346976-db18a5b1-277d-4672-9f1a-40d2c2f672bf.png)

- Membuat `admin.css`

![image](https://user-images.githubusercontent.com/101658076/174347133-3c121c30-1859-4daa-be5f-afe9e1f0b3a7.png)

![image](https://user-images.githubusercontent.com/101658076/174347147-a1302b33-a5ae-4fe6-98f2-41eb5d9e6bd9.png)

![image](https://user-images.githubusercontent.com/101658076/174347165-e79720a9-c4b3-4ad2-8f92-effbecfd0ccb.png)

![image](https://user-images.githubusercontent.com/101658076/174347188-e505206f-1574-4813-8bb3-e58b2906690d.png)

- Refresh browser

![image](https://user-images.githubusercontent.com/101658076/174347287-75cc611a-4407-4b13-bd6f-d1007c617d81.png)

- Tambahkan `routing` untuk menu admin seperti berikut:

![image](https://user-images.githubusercontent.com/101658076/174347368-2e3f1b20-a094-48f4-aaf6-f0f0c2bd57d1.png)

- Akses menu admin dengan url http://localhost:8080/admin/artikel

![image](https://user-images.githubusercontent.com/101658076/174347464-3e8e34d5-d496-4709-9250-5f21f57666b4.png)

### 10. Menambah Data Artikel

- Tambahkan `fungsi/method` baru pada `Controller Artikel` dengan nama `add()`.

![image](https://user-images.githubusercontent.com/101658076/174347870-883d4319-7c41-44ac-9e67-1ddf2f4de185.png)

- Kemudian buat view untuk form tambah dengan nama `form_add.php`

![image](https://user-images.githubusercontent.com/101658076/174347999-58b3f757-a781-46be-b637-de25697e72d5.png)

- Setelah itu klik `tambah artikel` maka tampilan nya seperti berikut.

![image](https://user-images.githubusercontent.com/101658076/174348094-cf5afacd-dc49-4f06-a16e-abaf9acf57f2.png)

### 12. Mengubah Data

- Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `edit()`.

![image](https://user-images.githubusercontent.com/101658076/174348562-acc89494-0cb5-4308-a822-e74a5d6142d0.png)

- Kemudian buat `view` untuk form tambah dengan `nama form_edit.php`

![image](https://user-images.githubusercontent.com/101658076/174348360-1cbb864e-c523-4ead-ac2a-461a5c857de4.png)

- Hasil Browser

![image](https://user-images.githubusercontent.com/101658076/174348514-c94e9969-3222-4eae-bd49-cd0a85993517.png) 

### 13. Menghapus Data

Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `delete()`.

![image](https://user-images.githubusercontent.com/101658076/174348967-6e87aef9-3725-4a46-8d87-895157db910b.png)

### *Praktikum 13 : FrameWork Lanjutan (Modul Login)*

### 1. Membuat Tabel User

![image](https://user-images.githubusercontent.com/101658076/175776069-7e5c44bf-6365-4d3b-92c4-b1017c277722.png)

### 2. Membuat Model User

- Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori `app/Models` dengan nama `UserModel.php`

![image](https://user-images.githubusercontent.com/101658076/175776150-edb3039b-7e39-447c-b3f9-f6919972faa9.png)

### 3. Membuat Controller User

- Buat Controller baru dengan nama `User.php` pada direktori `app/Controllers`. Kemudian tambahkan `method index()` untuk menampilkan daftar `user`, dan method login() untuk proses `login`.

![image](https://user-images.githubusercontent.com/101658076/175777690-6859cc7d-17d1-4743-ae30-cb57a65498f1.png)
![image](https://user-images.githubusercontent.com/101658076/175777699-c62dc500-4c7c-4f6e-8122-d4f5f6e43b62.png)

### 4. Membuat View Login

- Buat direktori baru dengan nama `user` pada direktori `app/views`, kemudian buat file baru dengan nama `login.php`.

![image](https://user-images.githubusercontent.com/101658076/175776384-41d2923a-8cdc-4db3-87bc-4039dea29249.png)

### 5. Membuat Database Seeder

- Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![image](https://user-images.githubusercontent.com/101658076/175776479-e4f5db2f-c475-475c-b9ef-036ea8f552f8.png)

- Selanjutnya, buka file `UserSeeder.php` yang berada di lokasi direktori `/app/Database/Seeds/UserSeeder.php` kemudian isi dengan kode berikut:

![image](https://user-images.githubusercontent.com/101658076/175776582-1d950031-df30-4b80-bb62-20168a19be98.png)

- Selanjutnya buka kembali `CLI` dan ketik perintah berikut:

![image](https://user-images.githubusercontent.com/101658076/175776764-7a55423c-9ec8-4228-a42d-d91aaac5b7d1.png)

### 6. Refresh Web

Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![image](https://user-images.githubusercontent.com/101658076/175777787-09dc36f3-c50d-47ee-9dd6-e8dafd5f3536.png)

### 7. Menambahkan Auth Filter

- Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama `Auth.php` pada direktori `app/Filters`.

![image](https://user-images.githubusercontent.com/101658076/175776941-f5c7323f-8254-4ce8-8f03-b1234688a5db.png)

-  Selanjutnya buka file `app/Config/Filters.php` tambahkan kode berikut:

![image](https://user-images.githubusercontent.com/101658076/175777317-f96a931a-88bd-4fa4-b6ba-381d3c994ce6.png)

- Selanjutnya buka file `app/Config/Routes.php` dan sesuaikan kodenya.

![image](https://user-images.githubusercontent.com/101658076/175777389-45bc14b3-0902-49a0-927d-63ca84699124.png)

### 8. Percobaan Akses Menu Admin

- Buka url dengan alamat http://localhost:8080/user/login ketika alamat tersebut diakses maka, akan dimuculkan halaman login.

![image](https://user-images.githubusercontent.com/101658076/175777494-9ea66dc9-02f3-4596-b0ff-b4a446c1540f.png)

### 9. Fungsi Logout

- Tambahkan method logout pada Controller User seperti berikut:

![image](https://user-images.githubusercontent.com/101658076/175777598-3d900084-e451-45d4-9d11-4ec2b0b48cfe.png)
