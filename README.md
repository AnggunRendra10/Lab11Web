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

