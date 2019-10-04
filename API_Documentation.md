# Dokumentasi API dan contoh

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

### 4.  GET Log Aktifitas Default
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

### 5.  Log Aktifitas Before
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

### 6.  Log Aktifitas After
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

### 7.  Log Aktifitas Between
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

### 8.  Tambah Log Aktifitas

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

### 9.  Dashboard Default
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

### 10.  Dashboard Lihat Bawahan
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

### 11.  GET Target SKP
	 
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

### 12.  GET Realisasi SKP Tugas Pokok

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

### 13.  Realisasi SKP Tugas Pokok Update

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
  
}"
```
```json
{
    "status": true,
    "message": "Success !"
}
```

### 14.  GET Realisasi SKP Kreatifitas

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

### 15.  Realisasi SKP Kreatifitas Update

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

### 16.  Tambah Realisasi SKP Kreatifitas

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

### 17.  GET Realisasi Tugas Tambahan SKP

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

### 18.  Realisasi Tugas Tambahan SKP Update

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

### 19.  Tambah Realisasi Tugas Tambahan SKP

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


