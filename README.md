# API-MAGANG
![Screenshot (7)](https://user-images.githubusercontent.com/42866630/60865678-bb010380-a250-11e9-9cf1-a1ff3eb7de5e.png)
# LIST API YANG DIGUNAKAN DI MOBILE
🔥 **LOGIN & LOGOUT (controller : Auth.php;model : MyModel.php;Pengisian data username & password diisi di body RAW)**\
1.) POST LOGIN (header => Auth-Key : geomedia;Content-Type : application/json)\
**_(PARAMS)  username (ex. 198512052015032001)_**\
             **_password (ex. 198512052015032001)_**\
2.) POST LOGOUT (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  username (ex. 198512052015032001)_**\
             **_password (ex. 198512052015032001)_**\
/--------------------------------------------------------------------------------------------------------------------------------/    
🔥 **PROFIL SKP (controller : Profil_SKP.php;model : Profil_model.php)**\
1.) GET (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198512052015032001)_**\
/--------------------------------------------------------------------------------------------------------------------------------/
🔥 **LOG AKTIVITAS SKP (controller : Log_Aktivitas.php;model : Log_Aktivitas_model.php)**\
1.) GET SKP (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198512052015032001)_**\
2.) GET AFTER SKP (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198512052015032001)_**\
	     **_after (ex. 2019-07-01)_**\
3.) GET BEFORE SKP (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198512052015032001)_**\
	     **_before (ex. 2019-02-01)_**\
4.) GET BETWEEN SKP (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198512052015032001)_**\
             **_after (ex. 2019-07-01)_**\
 	     **_before (ex. 2019-02-07-)_**\
5.) PUT (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_nip (ex. 198512052015032001)_**\
/--------------------------------------------------------------------------------------------------------------------------------/  
🔥 **DASHBOARD (controller : Dashboard.php;model : Dashboard_model.php)**\
1.) GET TARGET SKP (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198403042010041001)_**\
2.) GET REALISASI SKP (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198403042010041001)_**\
/--------------------------------------------------------------------------------------------------------------------------------/ 
🔥 **TARGET SKP (controller : Target_SKP.php;model : Target_SKP_model.php)**\
1.) GET TUGAS POKOK (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198512052015032001)_**\
/--------------------------------------------------------------------------------------------------------------------------------/ 
🔥 **REALISASI SKP TUGAS POKOK (controller : Realisasi_SKP.php;model : Realisasi_SKP_model.php)**\
1.) GET (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  nip (ex. 198602232015032003)_**\
2.) PUT (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  id_realisasi (ex. 200)_**\
**_(BODY)    id_realisasi (ex. 198512052015032001)_**\
	     **_r_output (ex. 150)_**\
	     **_r_mutu (ex. 70)_**\
	     **_r_waktu (ex. 12)_**\
	     **_r_perhitungan (ex. 251)_**\
	     **_r_capaian (ex. 83.67)_**\
/--------------------------------------------------------------------------------------------------------------------------------/ 
🔥 **REALISASI SKP TUGAS TAMBAHAN (controller : Tugas_Tambahan_SKP.php;model : Realisasi_SKP_model.php)**\
1.) GET (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  id_skp (ex. 2999)_**\
2.) PUT (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  id_skp (ex. 2999)_**\
**_(BODY)    id_uraian_tambahan (ex. 2000)_**\
	     **id_skp (ex. 2999)_**\
	     **uraian_tambahan (ex. Mantap Djjiwa)_**\
/--------------------------------------------------------------------------------------------------------------------------------/ 
🔥 **REALISASI SKP KREATIFITAS (controller : Kreatifitas_SKP.php;model : Realisasi_SKP_model.php)**\
1.) GET (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  id_skp (ex. 2999)_**\
2.) PUT (header => Auth-Key : geomedia;Content-Type : application/json;nip : 198512052015032001;Authorization : token)\
**_(PARAMS)  id_skp (ex. 2999)_**\
**_(BODY)    id_skp (ex. 2999)_**\
	     **_idkreatifitas (ex. 5)_**\
 	     **_uraiankreatifitas (ex. Coba Gan)_**\
             **_tgl_kreatifitas (*autofill datenow)_**\
	     **_dok_kreatifitas (ex. Bukti_Pembayaran_UKT.jpeg)_**\

# LIST API YANG DIGUNAKAN DI MOBILE POSTMAN
https://documenter.getpostman.com/view/6150381/SVYxnuod
			
    
    

