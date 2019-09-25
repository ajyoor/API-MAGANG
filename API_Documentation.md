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
|status| `200` Jika `Username` & `Password` benar. `204` Jika Username dan atau Password tidak ditemukan|
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
