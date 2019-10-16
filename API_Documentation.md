# Dokumentasi API dan contoh

### Daftar Isi

   1. POST [Login SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#1--login-skp "Dokumentasi Login")
   2. POST [Logout SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#2--logout-skp "Dokumentasi Logout")
   3. GET [Profil SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#3--get-profil-skp "Dokumentasi Profil SKP")
   4. PUT [Profil SKP (Data)](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#4--profil-skp-data-pribadi-update "Dokumentasi Profil SKP")
   5. PUT [Profil SKP (Foto)](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#5--profil-skp-foto-update "Dokumentasi Profil SKP")
   6. GET [Log Aktifitas Default](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#6--get-log-aktifitas-default "Dokumentasi Log Aktivitas")
   7. GET [Log Aktifitas Before](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#7--log-aktifitas-before "Dokumentasi Log Aktivitas")
   8. GET [Log Aktifitas After](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#8--log-aktifitas-after "Dokumentasi Log Aktivitas")
   9. GET [Log Aktifitas Between](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#9--log-aktifitas-between "Dokumentasi Log Aktivitas")
   10. POST [Tambah Log Aktifitas](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#10--tambah-log-aktifitas "Dokumentasi Log Aktivitas")
   11. GET [Log Aktifitas Search](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#11--log-aktifitas-search "Dokumentasi Log Aktivitas")
   12. PUT [Log Aktivitas Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#12--log-aktivitas-update "Dokumentasi Log Aktivitas")
   13. DELETE [Log Aktivitas Delete](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#13--log-aktivitas-delete "Dokumentasi Log Aktivitas")
   14. GET [Dashboard Default](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#14--dashboard-default "Dokumentasi Dashboard")
   15. GET [Dashboard Lihat Bawahan](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#15--dashboard-lihat-bawahan "Dokumentasi Dokumentasi Dashboard")
   16. GET [Target SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#16--get-target-skp "Dokumentasi Target SKP")
   17.  POST [Tambah Target SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#17--tambah-target-skp "Dokumentasi Target SKP")
   18.  PUT [Target SKP Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#18--target-skp-update "Dokumentasi Target SKP")
   19.  DELETE[Target SKP Delete](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#19--target-skp-delete "Dokumentasi Target SKP")
   20.  GET [Realisasi SKP Tugas Pokok](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#20--get-realisasi-skp-tugas-pokok "Dokumentasi Realisasi SKP")
   21.  PUT [Realisasi SKP Tugas Pokok Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#21--realisasi-skp-tugas-pokok-update "Dokumentasi Realisasi SKP")
   22.  GET [Realisasi Tugas Tambahan SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#22--get-realisasi-tugas-tambahan-skp "Dokumentasi Realisasi SKP")
   23.  POST [Tambah Realisasi Tugas Tambahan SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#23--tambah-realisasi-tugas-tambahan-skp "Dokumentasi Realisasi SKP")
   24.  PUT [Realisasi Tugas Tambahan SKP Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#24--realisasi-tugas-tambahan-skp-update "Dokumentasi Realisasi SKP")
   25.  DELETE[Realisasi SKP Tugas Pokok Delete](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#25--realisasi-skp-tugas-pokok-delete "Dokumentasi Realisasi SKP")
   26.  GET [Realisasi SKP Kreatifitas](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#26--get-realisasi-skp-kreatifitas "Dokumentasi Realisasi SKP")
   27.  POST [Tambah Realisasi SKP Kreatifitas](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#27--tambah-realisasi-skp-kreatifitas "Dokumentasi Realisasi SKP")
   28.  PUT [Realisasi SKP Kreatifitas Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#28--realisasi-skp-kreatifitas-update "Dokumentasi Realisasi SKP")
   29.  DELETE [Realisasi SKP Kreatifitas Delete](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#29--realisasi-skp-kreatifitas-delete "Dokumentasi Realisasi SKP")
   30.  GET [Penilaian Target SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#30--get-penilaian-target-skp "Dokumentasi Penilaian Target SKP")
   31.  GET [Penilaian Target SKP Search](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#31--penilaian-target-skp-search "Dokumentasi Penilaian Target SKP")
   32.  PUT [Penilaian Target SKP Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#32--penilaian-target-skp-update "Dokumentasi Penilaian Target SKP")
   33.  GET [Penilaian Realisasi SKP (Tugas Pokok)](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#33--get-penilaian-realisasi-skp-tugas-pokok "Dokumentasi Penilaian Realisasi SKP")
   34.  PUT [Penilaian Realisasi SKP (Tugas Pokok) Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#34--penilaian-realisasi-skp-tugas-pokok-update "Dokumentasi Penilaian Realisasi SKP")
   35.  GET [Penilaian Realisasi SKP (Tugas Tambahan)](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#35--get-penilaian-realisasi-skp-tugas-tambahan "Dokumentasi Penilaian Realisasi SKP")
   36.  PUT [Penilaian Realisasi SKP (Tugas Tambahan) Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#36--penilaian-realisasi-skp-tugas-tambahan-update "Dokumentasi Penilaian Realisasi SKP")
   37.  DELETE [Penilaian Realisasi SKP (Tugas Tambahan) Delete](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#37--penilaian-realisasi-skp-tugas-tambahan-delete "Dokumentasi Penilaian Realisasi SKP")
   38.  GET [Penilaian Realisasi SKP (Kreatifitas)](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#38--get-penilaian-realisasi-skp-kreatifitas "Dokumentasi Penilaian Realisasi SKP")
   39.  PUT [Penilaian Realisasi SKP (Kreatifitas) Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#39--penilaian-realisasi-skp-kreatifitas-update "Dokumentasi Penilaian Realisasi SKP")
   40.  DELETE [Penilaian Realisasi SKP (Kreatifitas) Delete](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#40--penilaian-realisasi-skp-kreatifitas-delete "Dokumentasi Penilaian Realisasi SKP")
   41.  GET [Penilaian Aktivitas SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#41--get-penilaian-aktivitas-skp "Dokumentasi Penilaian Aktivitas SKP")
   42.  GET [Penilaian Aktivitas SKP Search](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#42--penilaian-aktivitas-skp-search "Dokumentasi Penilaian Aktivitas SKP")
   43.  PUT [Penilaian Aktivitas SKP Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#43--penilaian-aktivitas-skp-update "Dokumentasi Penilaian Aktivitas SKP")
   44.  DELETE [Penilaian Aktivitas SKP Delete](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#44--penilaian-aktivitas-skp-delete "Dokumentasi Penilaian Aktivitas SKP")
   45.  GET [Penilaian Perilaku SKP](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#45--get-penilaian-perilaku-skp "Dokumentasi Penilaian Perilaku SKP")
   46.  PUT [Penilaian Perilaku SKP Update](https://github.com/airln99a/API-MAGANG/blob/master/API_Documentation.md#46--penilaian-perilaku-skp-update "Dokumentasi Penilaian Perilaku SKP")


### 1.  Login SKP

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/auth/login
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| username   | required	  	| `username` dari pegawai yang ingin login|
| password         | required      | `password` dari pegawai yang ingin login (md5) |

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `200` Jika `Username` & `Password` benar. `204` Jika `Username` & `Password` tidak ditemukan|
|message| Bernilai `Successfully login.` jika `Username` & `Password` benar / ditemukan, dan `Username not found.` jika sebaliknya |
|nip| `NIP` dari user |
|kode_jabatan| Kode Jabatan dari user |
|nama_jabatan| Jabatan user|
|jabatan| Jabatan fungsional user|
|token| `token` kode unik untuk melakukan berbagai aksi|

#### Example
```json
curl --location --request POST "http://localhost/API-MAGANG/api/auth/login" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --data "{
	\"username\":\"greace\",
	\"password\":\"greace\"
}"
```
```json
{
    "status": 200,
    "message": "Successfully login.",
    "nip": "198512052015032001",
    "kode_jabatan": "92.01.305.1.2.3.14.48",
    "nama_jabatan": "PENGOLAH DATA",
    "jabatan": "Jabatan Fungsional Umum",
    "token": "5a97e"
}
```

### 2.  Logout SKP

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/auth/logout
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| token   | required	  	| `token` dari pegawai yang ingin logout|

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `200` Jika `token` yang bersangkutan benar-benar ada. `204` Jika `token` tidak ditemukan|
|message| Bernilai `Successfully logout & deleted token` jika `token` benar / ditemukan, dan `Token not found.` jika sebaliknya |

#### Example
```json
curl --location --request POST "http://localhost/API-MAGANG/api/auth/logout" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
}"
```
```json
{
    "status": 200,
    "message": "Successfully logout & deleted token",
}
```

### 3.  GET Profil SKP
	Untuk mengambil nilai Profil berdasarkan nip.

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Profil_SKP/?nip=198512052015032001
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|image_profil| `Foto Profil` dari pegawai yang diambil datanya |
|nama| `Nama` dari pegawai yang diambil datanya |
|nama_jabatan| `Jabatan Pegawai` dari pegawai yang diambil datanya |
|nip| `NIP` dari pegawai yang diambil datanya |
|ttl| `Tempat Tanggal Lahir` dari pegawai yang diambil datanya |
|notelp| `No telp` dari pegawai yang diambil datanya |
|email| `Email` dari pegawai yang diambil datanya |
|alamat| `Alamat` dari pegawai yang diambil datanya |
|nama_golongan| `Golongan Pegawai` dari pegawai yang diambil datanya |
|jabatan_penilai| `Jabatan Penilai / Atasan` dari pegawai yang diambil datanya |
|nama_penilai| `Nama Penilai / Atasan` dari pegawai yang diambil datanya |

#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Profil_SKP/?nip=198512052015032001" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "image_profil": "pf_198512052015032001_.JPG",
            "nama": "GREACE CYNTHIA MOBILALA",
            "nama_jabatan": "PENGOLAH DATA",
            "nip": "198512052015032001",
            "ttl": "SORONG, 1985-12-05",
            "notelp": "",
            "email": null,
            "alamat": "RUFEI",
            "nama_golongan": "II/a",
            "jabatan_penilai": "KEPALA SUB BIDANG DATA DAN INFORMASI",
            "nama_penilai": "RONALD YUNUS NOYA, S.SI."
        }
    ]
}
```

### 4.  Profil SKP (Data Pribadi) Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Profil_SKP/
```

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Profil_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"nip\":\"199402072017082001\",
	\"tempat_lahir\":\"Malang\"
	\"tanggal_lahir\":\"1994-02-07\"
	\"alamat\":\"Jl. Bunga Cengkeh no. 4\"
	\"notelp\":\"081222076389\"
  \"email\":\"dollykonjol@gmail.com\"  
}"
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 5.  Profil SKP (Foto) Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Profil_SKP/foto/
```

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Profil_SKP/foto//" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"nip\":\"199402072017082001\",
  \"image_profil\":\"dollykonjol.jpeg\"  
}"
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 6.  GET Log Aktifitas Default
	Log Aktifitas tanpa ada parameter sebelum, sesudah atau diantara.

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Log_Aktivitas/?nip=198512052015032001
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya |

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|log_id| `id` dari aktivitas |
|akt_tanggal| `tanggal` kegiatan mulai aktifitas |
|bk_id| `bk_id` dari pegawai yang diambil datanya |
|bk_nama_kegiatan| `bk_nama_kegiatan` dari pegawai yang diambil datanya |
|akt_catatan| `Catatan` dari kegiatan |
|akt_output| `Output` atau `Hasil` dari kegiatan tersebut |
|akt_start| `Waktu Mulai` dari kegiatan tersebut |
|akt_end| `Waktu Salesai` dari kegiatan tersebut |
|akt_satuan| `Satuan` hasil keluaran akhir dari kegiatan tersebut |
|akt_waktu| `Durasi` dari mulai kegiatan sampai selesai |
|akt_keterangan| `Keterangan` tambahan dari kegiatan tersebut |
|id_tkerja| `id tenaga kerja` dari pegawai yang diambil datanya |
|akt_status| `Status Penyelesaian` aktivitas tersebut |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Log_Aktivitas/?nip=198512052015032001" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "log_id": "198512052015032001.190130132052.483",
            "akt_tanggal": "2019-01-18",
            "bk_id": "9208",
            "bk_nama_kegiatan": "Mengolah data",
            "akt_catatan": "Membuat profil KGB",
            "akt_output": "2",
            "akt_start": "09:00:00",
            "akt_end": "09:30:00",
            "akt_satuan": "Data",
            "akt_waktu": "30",
            "akt_keterangan": null,
            "id_tkerja": "47687",
            "akt_status": "1"
        }
```

### 7.  Log Aktifitas Before
	Log Aktifitas dengan parameter sebelum.

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Log_Aktivitas/before/?before=2019-02-01&nip=198512052015032001
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| before   | required	  	| `tanggal` sebelum tanggal yang diinginkan |


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|log_id| `id` dari aktivitas |
|akt_tanggal| `tanggal` kegiatan mulai aktifitas |
|bk_id| `bk_id` dari pegawai yang diambil datanya |
|bk_nama_kegiatan| `bk_nama_kegiatan` dari pegawai yang diambil datanya |
|akt_catatan| `Catatan` dari kegiatan |
|akt_output| `Output` atau `Hasil` dari kegiatan tersebut |
|akt_start| `Waktu Mulai` dari kegiatan tersebut |
|akt_end| `Waktu Salesai` dari kegiatan tersebut |
|akt_satuan| `Satuan` hasil keluaran akhir dari kegiatan tersebut |
|akt_waktu| `Durasi` dari mulai kegiatan sampai selesai |
|akt_keterangan| `Keterangan` tambahan dari kegiatan tersebut |
|id_tkerja| `id tenaga kerja` dari pegawai yang diambil datanya |
|akt_status| `Status Penyelesaian` aktivitas tersebut |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Log_Aktivitas/before/?before=2019-02-01&nip=198512052015032001" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "log_id": "198512052015032001.190130132052.483",
            "akt_tanggal": "2019-01-18",
            "bk_id": "9208",
            "bk_nama_kegiatan": "Mengolah data",
            "akt_catatan": "Membuat profil KGB",
            "akt_output": "2",
            "akt_start": "09:00:00",
            "akt_end": "09:30:00",
            "akt_satuan": "Data",
            "akt_waktu": "30",
            "akt_keterangan": null,
            "id_tkerja": "47687",
            "akt_status": "1"
        }
```

### 8.  Log Aktifitas After
	Log Aktifitas dengan parameter setelah.

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Log_Aktivitas/after/?after=2019-02-01&nip=198512052015032001
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| after   | required	  	| `tanggal` setelah tanggal yang diinginkan |


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|log_id| `id` dari aktivitas |
|akt_tanggal| `tanggal` kegiatan mulai aktifitas |
|bk_id| `bk_id` dari pegawai yang diambil datanya |
|bk_nama_kegiatan| `bk_nama_kegiatan` dari pegawai yang diambil datanya |
|akt_catatan| `Catatan` dari kegiatan |
|akt_output| `Output` atau `Hasil` dari kegiatan tersebut |
|akt_start| `Waktu Mulai` dari kegiatan tersebut |
|akt_end| `Waktu Salesai` dari kegiatan tersebut |
|akt_satuan| `Satuan` hasil keluaran akhir dari kegiatan tersebut |
|akt_waktu| `Durasi` dari mulai kegiatan sampai selesai |
|akt_keterangan| `Keterangan` tambahan dari kegiatan tersebut |
|id_tkerja| `id tenaga kerja` dari pegawai yang diambil datanya |
|akt_status| `Status Penyelesaian` aktivitas tersebut |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Log_Aktivitas/after/?after=2019-02-01&nip=198512052015032001" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "log_id": "198512052015032001.190201131824.617",
            "akt_tanggal": "2019-02-01",
            "bk_nama_kegiatan": "Scanning dokumen kepegawaian kedalam media komputer",
            "akt_output": "22",
            "akt_start": "09:00:00",
            "akt_end": "15:15:00",
            "akt_waktu": "375",
            "akt_status": "1"
        }
```

### 9.  Log Aktifitas Between
	Log Aktifitas dengan parameter diantara.

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Log_Aktivitas/between/?after=2019-02-01&nip=198512052015032001&before=2019-03-01
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| after   | required	  	| `tanggal` setelah tanggal yang diinginkan |
| before   | required	  	| `tanggal` sebelum tanggal yang diinginkan |


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|log_id| `id` dari aktivitas |
|akt_tanggal| `tanggal` kegiatan mulai aktifitas |
|bk_id| `bk_id` dari pegawai yang diambil datanya |
|bk_nama_kegiatan| `bk_nama_kegiatan` dari pegawai yang diambil datanya |
|akt_catatan| `Catatan` dari kegiatan |
|akt_output| `Output` atau `Hasil` dari kegiatan tersebut |
|akt_start| `Waktu Mulai` dari kegiatan tersebut |
|akt_end| `Waktu Salesai` dari kegiatan tersebut |
|akt_satuan| `Satuan` hasil keluaran akhir dari kegiatan tersebut |
|akt_waktu| `Durasi` dari mulai kegiatan sampai selesai |
|akt_keterangan| `Keterangan` tambahan dari kegiatan tersebut |
|id_tkerja| `id tenaga kerja` dari pegawai yang diambil datanya |
|akt_status| `Status Penyelesaian` aktivitas tersebut |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Log_Aktivitas/between/?after=2019-02-01&nip=198512052015032001&before=2019-03-01" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "log_id": "198512052015032001.190207132839.9906",
            "akt_tanggal": "2019-02-07",
            "bk_nama_kegiatan": "Scanning dokumen kepegawaian kedalam media komputer",
            "akt_output": "9",
            "akt_start": "13:45:00",
            "akt_end": "15:15:00",
            "akt_waktu": "90",
            "akt_status": "1"
        }
```

### 10.  Tambah Log Aktifitas

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Log_Aktivitas/
```

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `log_id` yang bersangkutan belum ada. `false` Jika `log_id` sudah terdaftar|
|message| Bernilai `Success !` jika `log_id` benar & data berhasil ditambah dan `Maaf, Data baru gagal dibuat !` jika sebaliknya |

#### Example
```json
curl --location --request POST "http://localhost/API-MAGANG/api/Log_Aktivitas/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"log_id\":\"1\",
	\"akt_tanggal\":\"2019-10-05\"
	\"akt_idkegiatan\":\"9208\"
	\"akt_catatan\":\"Membuat profil Media Sosial\"
	\"akt_output\":\"2\"
  \"akt_start\":\"09:00:00\"
  \"akt_end\":\"14:00:00\"
	\"nip\":\"198512052015032001\"
	\"id_tkerja\":\"47687\"
  \"akt_kodeja\":\"92.01.305.1.2.3.14.48\"  
}"

```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 11.  Log Aktifitas Search
	Log Aktifitas dengan parameter search.

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Log_Aktivitas/search/?nip=198512052015032001&masukan=MENGOLAH DATA
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| masukan   | required	  	| untuk pencarian `bk_nama_kegiatan`  |

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|log_id| `id` dari aktivitas |
|akt_tanggal| `tanggal` kegiatan mulai aktifitas |
|bk_id| `bk_id` dari pegawai yang diambil datanya |
|bk_nama_kegiatan| `bk_nama_kegiatan` dari pegawai yang diambil datanya |
|akt_catatan| `Catatan` dari kegiatan |
|akt_output| `Output` atau `Hasil` dari kegiatan tersebut |
|akt_start| `Waktu Mulai` dari kegiatan tersebut |
|akt_end| `Waktu Salesai` dari kegiatan tersebut |
|akt_satuan| `Satuan` hasil keluaran akhir dari kegiatan tersebut |
|akt_waktu| `Durasi` dari mulai kegiatan sampai selesai |
|akt_keterangan| `Keterangan` tambahan dari kegiatan tersebut |
|id_tkerja| `id tenaga kerja` dari pegawai yang diambil datanya |
|akt_status| `Status Penyelesaian` aktivitas tersebut |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Log_Aktivitas/search/?nip=198512052015032001&masukan=MENGOLAH DATA" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "log_id": "198512052015032001.190130131615.3482",
            "akt_tanggal": "2019-01-15",
            "bk_id": "9208",
            "bk_nama_kegiatan": "Mengolah data",
            "akt_catatan": "Membuat Profil KGB",
            "akt_output": "4",
            "akt_start": "10:00:00",
            "akt_end": "10:30:00",
            "akt_satuan": "Data",
            "akt_waktu": "30",
            "akt_keterangan": null,
            "id_tkerja": "47687",
            "akt_status": "1"
        }
```

### 12.  Log Aktivitas Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Log_Aktivitas/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| log_id   | required	  	| `log_id` dari pegawai yang ingin ubah datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `log_id` yang bersangkutan benar-benar ada. `false` Jika `log_id` tidak ditemukan|
|message| Bernilai `Success !` jika `log_id` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Log_Aktivitas/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"log_id\":\"1\",
	\"akt_tanggal\":\"2019-10-05\"
	\"akt_idkegiatan\":\"9208\"
	\"akt_catatan\":\"Mengubah profil Instagram\"
	\"akt_output\":\"2\"
  \"akt_start\":\"09:00:00\"
  \"akt_end\":\"14:00:00\"
	\"nip\":\"198512052015032001\"
	\"id_tkerja\":\"47687\"
  \"akt_kodeja\":\"92.01.305.1.2.3.14.48\"  
}"
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 13.  Log Aktivitas Delete

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Log_Aktivitas/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| log_id   | required	  	| `log_id` dari pegawai yang ingin dihapus datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `log_id` yang bersangkutan benar-benar ada. `false` Jika `log_id` tidak ditemukan|
|message| Bernilai `Success !` jika `log_id` benar & data berhasil dihapus dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|log_id|  | `log_id` yang dihapus |

#### Example
```json
curl --location --request DELETE "http://localhost/API-MAGANG/api/Log_Aktivitas/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"log_id\":\"1\",
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "log_id": "1"
}
```

### 14.  Dashboard Default
	Dashboard untuk menampilkan Profil pribadi pelaku login.

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Dashboard/target?nip=198512052015032001
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `success` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|image_profil| `Foto Profil` dari pegawai yang diambil datanya |
|nama| `Nama` dari pegawai yang diambil datanya |
|nama_jabatan| `Jabatan Pegawai` dari pegawai yang diambil datanya |
|nip| `NIP` dari pegawai yang diambil datanya |
|ttl| `Tempat Tanggal Lahir` dari pegawai yang diambil datanya |
|notelp| `No telp` dari pegawai yang diambil datanya |
|email| `Email` dari pegawai yang diambil datanya |
|alamat| `Alamat` dari pegawai yang diambil datanya |
|nama_golongan| `Golongan Pegawai` dari pegawai yang diambil datanya |
|jabatan_penilai| `Jabatan Penilai / Atasan` dari pegawai yang diambil datanya |
|nama_penilai| `Nama Penilai / Atasan` dari pegawai yang diambil datanya |
|target| `jumlah target` dari pegawai yang diambil datanya |
|realisasi| `jumlah realisasi` dari pegawai yang diambil datanya  |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Dashboard/target?nip=198512052015032001" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "success",
    "data": [
        {
            "image_profil": "pf_198512052015032001_.JPG",
            "nama": "GREACE CYNTHIA MOBILALA",
            "nama_jabatan": "PENGOLAH DATA",
            "nip": "198512052015032001",
            "ttl": "SORONG, 1985-12-05",
            "notelp": "",
            "email": null,
            "alamat": "RUFEI",
            "nama_golongan": "II/a",
            "jabatan_penilai": "KEPALA SUB BIDANG DATA DAN INFORMASI",
            "nama_penilai": "RONALD YUNUS NOYA, S.SI.",
            "target": "7",
            "realisasi": "0"
        }
    ]
}
```

### 15.  Dashboard Lihat Bawahan
	Fungsi lihat bawahan yang ada di dashboard.

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Dashboard/bawahan/?parent=92.01.305.1.2.3
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| parent   | required	  	| `parent` adalah kode jabatan atasan masing-masing pegawai |


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `parent` yang bersangkutan benar-benar ada. `false` Jika `parent` tidak ditemukan|
|message| Bernilai `success` jika `parent` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|image_profil| `Foto Profil` dari pegawai yang diambil datanya |
|nama| `Nama` dari pegawai yang diambil datanya |
|nip| `NIP` dari pegawai yang diambil datanya |
|nama_jabatan| `Jabatan Pegawai` dari pegawai yang diambil datanya |
|parent| `Kode Penilai` dari pegawai yang diambil datanya |
|nama_penilai| `Nama Penilai / Atasan` dari pegawai yang diambil datanya |
|target| `jumlah target` dari pegawai yang diambil datanya |



#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Dashboard/bawahan/?parent=92.01.305.1.2.3" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "success",
    "data": [
        {
            "image_profil": "pf_198512052015032001_.JPG",
            "nama": "GREACE CYNTHIA MOBILALA",
            "nip": "198512052015032001",
            "nama_jabatan": "PENGOLAH DATA",
            "parent": "92.01.305.1.2.3",
            "nama_penilai": "RONALD YUNUS NOYA, S.SI.",
            "target": "7"
        }
```

### 16.  GET Target SKP
	 
#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Target_SKP/?nip=198512052015032001
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|id_tkerja| `Id Tenaga Kerja` dari pegawai yang diambil datanya |
|nip| `NIP` dari pegawai yang diambil datanya |
|uraian| `Detail informasi target` dari pegawai yang diambil datanya |
|output| `Output / hasil` dari target SKP |
|satuan_output| `Satuan hasil` dari target SKP |
|mutu| `kualitas` dari pengerjaan target |
|waktu| `lama` penyelesaian target |
|satuan_waktu| `satuan waktu` dari penyelesaian target |
|biaya| `biaya` yang digunakan penyelesaian target|
|is_aktif| `cek status` konfirmasi dari atasan mengenai target tersebut |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Target_SKP/?nip=198512052015032001" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "id_tkerja": "47686",
            "nip": "198512052015032001",
            "kode_jabatan": "92.01.305.1.2.3.14.48",
            "uraian": "Mengelola Data SAPK",
            "output": "350",
            "satuan_output": "Data",
            "mutu": "100",
            "waktu": "12",
            "satuan_waktu": "Bulan",
            "biaya": null,
            "is_aktif": "1"
        }
```

### 17.  Tambah Target SKP

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Target_SKP/
```

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_tkerja` yang bersangkutan belum ada. `false` Jika `id_tkerja` sudah terdaftar|
|message| Bernilai `Success !` jika `id_tkerja` benar & data berhasil ditambah dan `Maaf, Data baru gagal dibuat !` jika sebaliknya |

#### Example
```json
curl --location --request POST "http://localhost/API-MAGANG/api/Target_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_tkerja\":\"201031\",
	\"id_skp\":\"2823\"
	\"uraian\":\"Mencari hidayah\"
	\"output\":\"100\"
	\"satuan_output\":\"Data\"
  \"mutu\":\"100\"
  \"waktu\":\"5\"
	\"satuan_waktu\":\"Bulan\"  
}"

```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 18.  Target SKP Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Target_SKP/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_tkerja   | required	  	| `id_tkerja` dari pegawai yang ingin ubah datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_tkerja` yang bersangkutan benar-benar ada. `false` Jika `id_tkerja` tidak ditemukan|
|message| Bernilai `Success !` jika `id_tkerja` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Target_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_tkerja\":\"201031\",
	\"id_skp\":\"2823\"
	\"uraian\":\"Mencari Surat Kelakuan Baik\"
	\"output\":\"100\"
	\"satuan_output\":\"Data\"
  \"mutu\":\"100\"
  \"waktu\":\"5\"
	\"satuan_waktu\":\"Bulan\"  
}"
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 19.  Target SKP Delete

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Target_SKP/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_tkerja   | required	  	| `id_tkerja` dari pegawai yang ingin dihapus datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_tkerja` yang bersangkutan benar-benar ada. `false` Jika `id_tkerja` tidak ditemukan|
|message| Bernilai `Success !` jika `id_tkerja` benar & data berhasil dihapus dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|id_tkerja|  | `id_tkerja` yang dihapus |

#### Example
```json
curl --location --request DELETE "http://localhost/API-MAGANG/api/Target_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_tkerja\":\"47691\",
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "id_tkerja": 47691
}
```

### 20.  GET Realisasi SKP Tugas Pokok

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Realisasi_SKP/?nip=198602232015032003
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|id_realisasi| `Id Tenaga Kerja` dari pegawai yang diambil datanya |
|uraian| `Detail informasi Realisasi SKP` dari pegawai yang diambil datanya |
|r_output| `Output / hasil` dari Realisasi SKP |
|r_mutu| `kualitas` dari pengerjaan Realisasi |
|r_waktu| `lama` penyelesaian Realisasi |
|r_biaya| `biaya` yang digunakan penyelesaian Realisasi|
|r_perhitungan| `perhitungan` dari atasan mengenai Realisasi tersebut |
|r_capaian| `nilai capaian` dari atasan mengenai Realisasi tersebut |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Realisasi_SKP/?nip=198602232015032003" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "id_realisasi": "200",
            "uraian": "Mengelola Data Arsip",
            "r_output": "150",
            "r_mutu": "100",
            "r_waktu": "12",
            "r_biaya": "0",
            "r_perhitungan": "251",
            "r_capaian": "83.67"
        }
```

### 21.  Realisasi SKP Tugas Pokok Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Realisasi_SKP/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_realisasi   | required	  	| `id_realisasi` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_realisasi` yang bersangkutan benar-benar ada. `false` Jika `id_realisasi` tidak ditemukan|
|message| Bernilai `Success !` jika `id_realisasi` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Realisasi_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_realisasi\":\"200\",
	\"r_output\":\"150\"
	\"r_mutu\":\"100\"
	\"r_waktu\":\"12\"
	\"r_perhitungan\":\"251\"
	\"r_capaian\":\"83.67\"
}"

```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 22.  GET Realisasi Tugas Tambahan SKP

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Tugas_Tambahan_SKP/?id_skp=2999
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_skp   | required	  	| `id_skp` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_skp` yang bersangkutan benar-benar ada. `false` Jika `id_skp` tidak ditemukan|
|message| Bernilai `Success !` jika `id_skp` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|id_skp| `id_skp` dari pegawai yang diambil datanya |
|id_uraian_tambahan| `idkreatifitas` dari pegawai yang diambil datanya |
|uraian_tambahan| detail tentang kegiatan |
|tgl_uraiantambahan|  tanggal dimulainya kegiatan |

#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Tugas_Tambahan_SKP/?id_skp=2999" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "id_skp": "2999",
            "id_uraian_tambahan": "2000",
            "uraian_tambahan": "Penyuluhan kepada Warga",
            "tgl_uraiantambahan": "2019-08-13"
        }
    ]
}
```

### 23.  Tambah Realisasi Tugas Tambahan SKP

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Tugas_Tambahan_SKP/
```

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `idkreatifitas` yang bersangkutan belum ada. `false` Jika `idkreatifitas` sudah terdaftar|
|message| Bernilai `Success !` jika `idkreatifitas` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request POST "http://localhost/API-MAGANG/api/Tugas_Tambahan_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_uraian_tambahan\":\"32\",
	\"id_skp\":\"2999\"
	\"uraian_tambahan\":\"Menyapu Halaman\"
	\"tgl_uraiantambahan\":\"\"
}"
  
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 24.  Realisasi Tugas Tambahan SKP Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Tugas_Tambahan_SKP/
```

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_uraian_tambahan` yang bersangkutan benar-benar ada. `false` Jika `id_uraian_tambahan` tidak ditemukan|
|message| Bernilai `Success !` jika `id_uraian_tambahan` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Tugas_Tambahan_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_uraian_tambahan\":\"2000\",
	\"id_skp\":\"2999\"
	\"uraian_tambahan\":\"Membersihkan kantor\"
	\"tgl_uraiantambahan\":\"\"
}"
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 25.  Realisasi SKP Tugas Pokok Delete

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Tugas_Tambahan_SKP/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_uraian_tambahan   | required	  	| `id_uraian_tambahan` dari pegawai yang ingin dihapus datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_uraian_tambahan` yang bersangkutan benar-benar ada. `false` Jika `id_uraian_tambahan` tidak ditemukan|
|message| Bernilai `Success !` jika `id_uraian_tambahan` benar & data berhasil dihapus dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|id_uraian_tambahan|  | `id_uraian_tambahan` yang dihapus |

#### Example
```json
curl --location --request DELETE "http://localhost/API-MAGANG/api/Tugas_Tambahan_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_uraian_tambahan\":\"2000\",
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "id_uraian_tambahan": "2000"
}
```

### 26.  GET Realisasi SKP Kreatifitas

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Kreatifitas_SKP/?id_skp=1197
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_skp   | required	  	| `id_skp` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_skp` yang bersangkutan benar-benar ada. `false` Jika `id_skp` tidak ditemukan|
|message| Bernilai `Success !` jika `id_skp` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|id_skp| `id_skp` dari pegawai yang diambil datanya |
|idkreatifitas| `idkreatifitas` dari pegawai yang diambil datanya |
|uraiankreatifitas| detail tentang kegiatan |
|tgl_kreatifitas|  tanggal dimulainya kegiatan |
|dok_kreatifitas| informasi tambahan berbentuk dokumen |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Kreatifitas_SKP/?id_skp=1197" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "id_skp": "1197",
            "idkreatifitas": "4",
            "uraiankreatifitas": "Membuat SIMPEGDA",
            "tgl_kreatifitas": "2018-11-25",
            "dok_kreatifitas": null
        }
```

### 27.  Tambah Realisasi SKP Kreatifitas

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Kreatifitas_SKP/
```

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `idkreatifitas` yang bersangkutan belum ada. `false` Jika `idkreatifitas` sudah terdaftar|
|message| Bernilai `Success !` jika `idkreatifitas` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request POST "http://localhost/API-MAGANG/api/Kreatifitas_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"idkreatifitas\":\"6\",
	\"id_skp\":\"1197\"
	\"uraiankreatifitas\":\"Mencuci Mobil Kepala\"
	\"tgl_kreatifitas\":\"\"
	\"dok_kreatifitas\":\"cucimobil.jpg\"
}"

```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 28.  Realisasi SKP Kreatifitas Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Kreatifitas_SKP/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| idkreatifitas   | required	  	| `idkreatifitas` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `idkreatifitas` yang bersangkutan benar-benar ada. `false` Jika `idkreatifitas` tidak ditemukan|
|message| Bernilai `Success !` jika `idkreatifitas` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Kreatifitas_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"idkreatifitas\":\"5\",
	\"id_skp\":\"1197\"
	\"uraiankreatifitas\":\"Membersihkan kantor\"
	\"tgl_kreatifitas\":\"\"
	\"dok_kreatifitas\":\"bersih.jpeg\"
}"
  
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 29.  Realisasi SKP Kreatifitas Delete

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Kreatifitas_SKP/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| idkreatifitas   | required	  	| `idkreatifitas` dari pegawai yang ingin dihapus datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `idkreatifitas` yang bersangkutan benar-benar ada. `false` Jika `idkreatifitas` tidak ditemukan|
|message| Bernilai `Success !` jika `idkreatifitas` benar & data berhasil dihapus dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|idkreatifitas|  | `idkreatifitas` yang dihapus |

#### Example
```json
curl --location --request DELETE "http://localhost/API-MAGANG/api/Kreatifitas_SKP/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"idkreatifitas\":\"6\",
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "idkreatifitas": "6"
}
```

### 30.  GET Penilaian Target SKP

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Target/?nip=198512052015032001&year=2019
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| year   | required	  	| `tahun` target skp yang diinginkan |



#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|nip| `nip` dari pegawai yang diambil datanya |
|kode_jabatan| `kode_jabatan` dari pegawai yang diambil datanya |
|uraian| kegiatan yang dilakukan |
|output| hasil dari kegiatan |
|satuan_output| satuan hasil dari kegiatan |
|mutu| kualitas penyelesaian kegiatan |
|waktu| waktu penyelesaian kegiatan |
|satuan_waktu| satuan waktu penyelesaian kegiatan |
|biaya| biaya yang di keluarkan untuk kegiatan |
|is_aktif| status konfirmasi target |


#### Example
```json
curl --location --request GET "localhost/API-MAGANG/api/Pen_Target/?nip=198512052015032001&year=2019" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "nip": "198512052015032001",
            "kode_jabatan": "92.01.305.1.2.3.14.48",
            "uraian": "Mengelola Data SAPK",
            "output": "350",
            "satuan_output": "Data",
            "mutu": "100",
            "waktu": "12",
            "satuan_waktu": "Bulan",
            "biaya": null,
            "is_aktif": "1"
        }
    ]
}
```

### 31.  Penilaian Target SKP Search

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Target/search?nip=198512052015032001&year=2019&masukan=sapk
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| year   | required	  	| `tahun` target skp yang diinginkan |
| masukan   | required	  	| `kata` dari target skp yang diinginkan |


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|nip| `nip` dari pegawai yang diambil datanya |
|kode_jabatan| `kode_jabatan` dari pegawai yang diambil datanya |
|uraian| kegiatan yang dilakukan |
|output| hasil dari kegiatan |
|satuan_output| satuan hasil dari kegiatan |
|mutu| kualitas penyelesaian kegiatan |
|waktu| waktu penyelesaian kegiatan |
|satuan_waktu| satuan waktu penyelesaian kegiatan |
|biaya| biaya yang di keluarkan untuk kegiatan |
|is_aktif| status konfirmasi target |


#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Pen_Target/search?nip=198512052015032001&year=2019&masukan=sapk" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "nip": "198512052015032001",
            "kode_jabatan": "92.01.305.1.2.3.14.48",
            "uraian": "Mengelola Data SAPK",
            "output": "350",
            "satuan_output": "Data",
            "mutu": "100",
            "waktu": "12",
            "satuan_waktu": "Bulan",
            "biaya": null,
            "is_aktif": "1"
        }
    ]
}
```

### 32.  Penilaian Target SKP Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Target/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_tkerja   | required	  	| `id_tkerja` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_tkerja` yang bersangkutan benar-benar ada. `false` Jika `id_tkerja` tidak ditemukan|
|message| Bernilai `Success !` jika `id_tkerja` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Pen_Target/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_tkerja\":\"2\",
	\"id_skp\":\"1\",
	\"uraian\":\"Mencari Data Pegawai\",
	\"output\":\"100\",
	\"satuan_output\":\"Dokumen\",
	\"mutu\":\"100\"
	\"waktu\":\"1\"
	\"satuan_waktu\":\"Bulan\"
	\"biaya\":\"0\"
}"
  
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 33.  GET Penilaian Realisasi SKP (Tugas Pokok)

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Realisasi/pokok/?nip=198602232015032003&year=2018
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| year   | required	  	| `tahun` penetapan realisasi skp yang diinginkan |


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|id_realisasi| `id_realisasi` dari pegawai yang diambil datanya |
|uraian| kegiatan yang dilakukan |
|r_output| hasil dari kegiatan |
|r_mutu| kualitas penyelesaian kegiatan |
|r_waktu| waktu penyelesaian kegiatan |
|r_biaya| biaya penyelesaian kegiatan |
|r_perhitungan| perhitungan penyelesaian kegiatan |
|r_capaian| capaian penyelesaian kegiatan |

#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Pen_Realisasi/pokok/?nip=198602232015032003&year=2018" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "id_realisasi": "202",
            "uraian": "Mengelola Data SIMPEGDA",
            "r_output": "485",
            "r_mutu": "100",
            "r_waktu": "12",
            "r_biaya": "0",
            "r_perhitungan": "273",
            "r_capaian": "91"
        }
    ]
}
```

### 34.  Penilaian Realisasi SKP (Tugas Pokok) Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Realisasi/pokok/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_realisasi   | required	  	| `id_realisasi` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_realisasi` yang bersangkutan benar-benar ada. `false` Jika `id_realisasi` tidak ditemukan|
|message| Bernilai `Success !` jika `id_realisasi` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Pen_Realisasi/pokok/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_realisasi\":\"202\",
	\"uraian\":\"Mengelola Data SIMPEGDA\",
	\"r_output\":\"485\",
	\"r_mutu\":\"100\",
	\"r_waktu\":\"12\",
	\"r_biaya\":\"0\",
	\"r_perhitungan\":\"273\",
	\"r_capaian\":\"91\"
}"
  
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 35.  GET Penilaian Realisasi SKP (Tugas Tambahan)

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Realisasi/tambahan/?id_skp=1234
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_skp   | required	  	| `id_skp` dari pegawai yang ingin di ambil datanya|

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_skp` yang bersangkutan benar-benar ada. `false` Jika `id_skp` tidak ditemukan|
|message| Bernilai `Success !` jika `id_skp` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|id_skp| `id_skp` dari pegawai yang diambil datanya |
|id_uraian_tambahan| `id` kegiatan yang dilakukan |
|uraian_tambahan| uraian kegiatan yang dilakukan |
|tgl_uraiantambahan| tanggal dilakukannya kegiatan |

#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Pen_Realisasi/tambahan/?id_skp=1234" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "id_skp": "1234",
            "id_uraian_tambahan": "1999",
            "uraian_tambahan": "Anjay Mabar ",
            "tgl_uraiantambahan": "2019-07-14"
        }
    ]
}
```

### 36.  Penilaian Realisasi SKP (Tugas Tambahan) Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Realisasi/tambahan/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_uraian_tambahan   | required	  	| `id_uraian_tambahan` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_uraian_tambahan` yang bersangkutan benar-benar ada. `false` Jika `id_uraian_tambahan` tidak ditemukan|
|message| Bernilai `Success !` jika `id_uraian_tambahan` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Pen_Realisasi/tambahan/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_skp\":\"1234\",
	\"id_uraian_tambahan\":\"25\",
	\"uraian_tambahan\":\"Mencuci Kendaraan Dinas\",
	\"tgl_uraiantambahan\":\"\"
}"
  
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 37.  Penilaian Realisasi SKP (Tugas Tambahan) Delete

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Realisasi/tambahan/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_uraian_tambahan   | required	  	| `id_uraian_tambahan` dari pegawai yang ingin dihapus datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_uraian_tambahan` yang bersangkutan benar-benar ada. `false` Jika `id_uraian_tambahan` tidak ditemukan|
|message| Bernilai `Success !` jika `id_uraian_tambahan` benar & data berhasil dihapus dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|id_uraian_tambahan|  | `id_uraian_tambahan` yang dihapus |

#### Example
```json
curl --location --request DELETE "http://localhost/API-MAGANG/api/Pen_Realisasi/tambahan/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_uraian_tambahan\":\"25\",
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "id_uraian_tambahan": "25"
}
```

### 38.  GET Penilaian Realisasi SKP (Kreatifitas)

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Realisasi/kreatifitas/?id_skp=294
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_skp   | required	  	| `id_skp` dari pegawai yang ingin di ambil datanya|

#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_skp` yang bersangkutan benar-benar ada. `false` Jika `id_skp` tidak ditemukan|
|message| Bernilai `Success !` jika `id_skp` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|id_skp| `id_skp` dari pegawai yang diambil datanya |
|idkreatifitas| `id` kegiatan yang dilakukan |
|uraiankreatifitas| uraian kegiatan yang dilakukan |
|nilai| nilai keberhasilan kegiatan |
|tgl_kreatifitas| tanggal dilakukannya kegiatan |
|dok_kreatifitas| dokumentasi kegiatan |

#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Pen_Realisasi/kreatifitas/?id_skp=294" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	
  
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "id_skp": "294",
            "idkreatifitas": "1",
            "uraiankreatifitas": "Membuat Tim Aplikasi G-Kinerja",
            "nilai": "0",
            "tgl_kreatifitas": "2018-08-28",
            "dok_kreatifitas": null
        }
    ]
}
```

### 39.  Penilaian Realisasi SKP (Kreatifitas) Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Realisasi/kreatifitas/?id_skp=294
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| idkreatifitas   | required	  	| `idkreatifitas` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `idkreatifitas` yang bersangkutan benar-benar ada. `false` Jika `idkreatifitas` tidak ditemukan|
|message| Bernilai `Success !` jika `idkreatifitas` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Pen_Realisasi/kreatifitas/?id_skp=294" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_skp\":\"294\",
	\"idkreatifitas\":\"1\",
	\"uraiankreatifitas\":\"Membuat Aplikasi G-Kinerja\",
	\"nilai\":\"\",
	\"tgl_kreatifitas\":\"\",
	\"dok_kreatifitas\":\"\"
}"
  
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 40.  Penilaian Realisasi SKP (Kreatifitas) Delete

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Realisasi/kreatifitas/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| idkreatifitas   | required	  	| `idkreatifitas` dari pegawai yang ingin dihapus datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `idkreatifitas` yang bersangkutan benar-benar ada. `false` Jika `idkreatifitas` tidak ditemukan|
|message| Bernilai `Success !` jika `idkreatifitas` benar & data berhasil dihapus dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|idkreatifitas|  | `idkreatifitas` yang dihapus |

#### Example
```json
curl --location --request DELETE "http://localhost/API-MAGANG/api/Pen_Realisasi/kreatifitas/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"idkreatifitas\":\"1\",
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "idkreatifitas": "6"
}
```

### 41.  GET Penilaian Aktivitas SKP

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Aktivitas/search?nip=198512052015032001&year=2019&month=7&masukan=membuat
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| year   | required	  	| tahun yang ingin di ambil datanya|
| month   | required	  	| bulan yang ingin di ambil datanya|
| masukan   | required	  	| masukan yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|log_id| `log_id` dari pegawai yang diambil datanya |
|akt_tanggal| tanggal dilakukannya kegiatan |
|bk_nama_kegiatan| uraian kegiatan yang dilakukan |
|akt_output| hasil kegiatan |
|akt_start| waktu dimulainya kegiatan |
|akt_end| waktu berakhirnya kegiatan |
|akt_waktu| durasi kegiatan berlangsung |
|akt_status| status konfirmasi kegiatan |

#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Pen_Aktivitas/search?nip=198512052015032001&year=2019&month=7&masukan=membuat" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "log_id": "198512052015032001.190701122925.0327",
            "akt_tanggal": "2019-07-01",
            "bk_nama_kegiatan": "Membuat Rekomendasi",
            "akt_output": "1",
            "akt_start": "13:00:00",
            "akt_end": "14:00:00",
            "akt_waktu": "60",
            "akt_status": "1"
        }
    ]
}
```

### 42.  Penilaian Aktivitas SKP Search

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Target/search?nip=198512052015032001&year=2019&masukan=sapk
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|
| year   | required	  	| `tahun` target skp yang diinginkan |
| masukan   | required	  	| `kata` dari target skp yang diinginkan |


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|log_id| `log_id` dari pegawai yang diambil datanya |
|akt_tanggal| tanggal dilakukannya kegiatan |
|bk_nama_kegiatan| uraian kegiatan yang dilakukan |
|akt_output| hasil kegiatan |
|akt_start| waktu dimulainya kegiatan |
|akt_end| waktu berakhirnya kegiatan |
|akt_waktu| durasi kegiatan berlangsung |
|akt_status| status konfirmasi kegiatan |

#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Pen_Target/search?nip=198512052015032001&year=2019&masukan=sapk" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \	

```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "nip": "198512052015032001",
            "kode_jabatan": "92.01.305.1.2.3.14.48",
            "uraian": "Mengelola Data SAPK",
            "output": "350",
            "satuan_output": "Data",
            "mutu": "100",
            "waktu": "12",
            "satuan_waktu": "Bulan",
            "biaya": null,
            "is_aktif": "1"
        }
    ]
}
```

### 43.  Penilaian Aktivitas SKP Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Aktivitas/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| log_id   | required	  	| `log_id` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `log_id` yang bersangkutan benar-benar ada. `false` Jika `log_id` tidak ditemukan|
|message| Bernilai `Success !` jika `log_id` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Pen_Aktivitas/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"log_id\":\"198512052015032001.190701122925.0327\",
	\"akt_status\":\"0\",
	\"akt_tgl_confirm\":\"\"
}"
  
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 44.  Penilaian Aktivitas SKP Delete

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Aktivitas/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| log_id   | required	  	| `log_id` dari pegawai yang ingin dihapus datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `log_id` yang bersangkutan benar-benar ada. `false` Jika `log_id` tidak ditemukan|
|message| Bernilai `Success !` jika `log_id` benar & data berhasil dihapus dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|log_id|  | `log_id` yang dihapus |

#### Example
```json
curl --location --request DELETE "http://localhost/API-MAGANG/api/Pen_Realisasi/kreatifitas/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"log_id\":\"198512052015032001.190701122925.0327\"
}"
```
```json
{
    "status": true,
    "message": "Success !",
    "log_id": "198512052015032001.190701122925.0327"
}
```

### 45.  GET Penilaian Perilaku SKP

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Perilaku/?id_skp=344&year=2018
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_skp   | required	  	| `id_skp` dari pegawai yang ingin di ambil datanya|
| year   | required	  	| tahun yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `nip` yang bersangkutan benar-benar ada. `false` Jika `nip` tidak ditemukan|
|message| Bernilai `Success !` jika `nip` benar / ditemukan, dan `Maaf, ID tidak ditemukan !` jika sebaliknya |
|data| Data yang dipanggil |
|id_skp| `id_skp` dari pegawai yang diambil datanya |
|id_perilaku| perilaku yang harus dilakukan pegawai |
|orientasi_pelayanan| nilai pegawai |
|integritas| nilai pegawai |
|komitmen| nilai pegawai |
|disiplin| nilai pegawai |
|kerjasama| nilai pegawai |
|kepemimpinan| nilai pegawai |

#### Example
```json
curl --location --request GET "http://localhost/API-MAGANG/api/Pen_Perilaku/?id_skp=344&year=2018" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
```
```json
{
    "status": true,
    "message": "Success !",
    "data": [
        {
            "id_skp": "344",
            "id_perilaku": "2",
            "orientasi_pelayanan": "80",
            "integritas": "80",
            "komitmen": "80",
            "disiplin": "80",
            "kerjasama": "80",
            "kepemimpinan": null
        }
    ]
}
```

### 46.  Penilaian Perilaku SKP Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Pen_Perilaku/
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| id_perilaku   | required	  	| `id_perilaku` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_perilaku` yang bersangkutan benar-benar ada. `false` Jika `id_perilaku` tidak ditemukan|
|message| Bernilai `Success !` jika `id_perilaku` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Pen_Perilaku/" \
  --header "Content-Type: application/x-www-form-urlencoded" \
  --header "Auth-Key: geomedia" \
  --header "Authorization: 9ece4" \
  --data "{
	\"id_perilaku\":\"2\",
	\"id_skp\":\"344\",
	\"integritas\":\"50\",
  \"komitmen\":\"50\",
  \"disiplin\":\"50\",
  \"kerjasama\":\"50\",
  \"kepemimpinan\":\"50\",
  \"orientasi_pelayanan\":\"50\",
  \"tanggal_perilaku\":\"\",
  \"last_nip_penilai\":\"196610101990032012\"
}"
  
```
```json
{
    "status": true,
    "message": "Success !"
}
```