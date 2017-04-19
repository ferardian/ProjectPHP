SELECT COUNT(tindakan) AS tindakan,
(SELECT COUNT(infeksi) 
	FROM tb_harian 
	WHERE tindakan="UC" 
	AND tanggal BETWEEN '2016-10-01' AND '2016-10-31' 
	AND infeksi NOT LIKE '' 
	AND t.`kd_ruang` = tb_harian.`kd_ruang`
 ) AS infeksi, tb_ruangan.ruangan
FROM tb_harian t JOIN tb_ruangan ON t.`kd_ruang`=tb_ruangan.`kd_ruang` 
WHERE t.tindakan="UC" 
AND t.tanggal BETWEEN '2016-10-01' AND '2016-10-31' 
GROUP BY t.kd_ruang


	