# bookapp

##### Chandra Wira Hadikusuma
##### 185150700111015
### PENJELASAN
#### TUJUAN
Tujuan dari praktikum ini adalah membuat projek bookapp menggunakan framework lumen untuk dihubungkan ke database mysql dengan mengimplementasikan metode MVC(tanpa view), migration, dan seeder. Projek yang telah dibuat kemudian di push ke repository github dengan dengan nama bookapp.
##### LUMEN
Lumen merupakan micro framework yang digunakan untuk membuat aplikasi yang lebih kecil dari framework laravel
##### CONTROLLER
Controller merupakan logika berupa fungsi yang berguna untuk menjadi penghubung antara request user ke model
##### MODEL
Model adalah bagian dimana seluruh data ditentukan definisinya yang akan berkomunikasi dengan database
##### MIGRATION
Migration merupakan salah satu fitur didalam laravel yang berfungsi sebagai control didalam sistem database
##### SEEDER
Seeder adalah sebuah fitur untuk mengisi data pada database dengan random data

### PENJELASAN CHALLANGE
#### TUJUAN
Tujuan dari challange ini adalah membuat CRUD untuk endpoint authors pada project bookapp
##### CREATE
Create merupakan proses pembuatan data baru. Menggunakan HTTP method POST untuk mengirimkan data masukan pengguna ke server dan endpoint authors
##### READ
Read merupakan proses pengambilan data dari database. Menggunakan HTTP method GET untuk meminta data dari server serta endpoint authors dan authors/{id} untuk data tertentu
##### UPDATE
Update adalah proses mengubah data yang berada di dalam database. Menggunakan HTTP method PUT untuk menuliskan data pada server dengan endpoint authors/{id} untuk menentukan datanya
##### DELETE
Delete adalah proses untuk menghapus data yang ada di database. Menggunakan HTTP method DELETE untuk menghapus data yang ada pada server dengan endpoint authors/{id} untuk memilih data yang ingin dihapus
