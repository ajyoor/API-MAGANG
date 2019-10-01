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

### 3.  Profil SKP

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

### 4.  Log Aktifitas Default

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

### 8.  Dashboard Default

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

### 9.  Dashboard Lihat Bawahan

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

### 10.  Target SKP 

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

### 11.  Realisasi SKP Tugas Pokok

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

### 12.  Realisasi SKP Tugas Pokok Update

#### HTTP Request
```json
PATCH http://localhost/API-MAGANG/api/Realisasi_SKP/?id_realisasi=200
```
#### Parameters

| Parameters    |               | Description  |
| ------------- |:-------------:| -------------|
| nip   | required	  	| `nip` dari pegawai yang ingin di ambil datanya|


#### Result

| Parameters    |  Description  |
| ------------- |:--------------|
|status| `true` Jika `id_realisasi` yang bersangkutan benar-benar ada. `false` Jika `id_realisasi` tidak ditemukan|
|message| Bernilai `Success !` jika `id_realisasi` benar & data berhasil diubah dan `Maaf, ID tidak ditemukan !` jika sebaliknya |

#### Example
```json
curl --location --request PUT "http://localhost/API-MAGANG/api/Realisasi_SKP/?id_realisasi=200" \
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



