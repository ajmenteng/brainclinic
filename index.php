<? session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<? 
	include("connectDB.php"); 
	include("dateFunction.php");
?>
<title>:: BRAIN CLINIC ::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="author" content="Nehemia Sugianto S.T (nehemia@mitranet.com) and John Wesly S.T (aj_menteng@yahoo.com)">
<meta name="Copyright" content="Copyright (c) 2007 Brain Clinic Surabaya, unless otherwise noted">
<meta name="description" content="Brain Clinic, Surabaya - Indonesia">
<meta name="keywords" content="brain, brain clinic, brain-clinic, brain clinic surabaya, klinik, klinik otak, otak, klinik otak indonesia, klinik otak surabaya">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-size: 14px}
-->
</style>
</head>

<body>
<? include("header.php"); ?>
<div align="center">
  <table width="976"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="left" valign="top"><? 
		include("login_member.php"); 
		include("right_pendapat.php"); 
		include("right_agenda.php");
		?></td>
      <td width="577" valign="top" align="justify"><img id="index_08" src="images/index_08.gif" width="577" height="90" alt="" /><br>
	  <marquee scrolldelay="75" scrollamount="2" height="2">
	  <?
	  $rsBanner=my_query("select * from pengumuman",$con);
	  if(my_num_rows($rsBanner)>0)
	  {
	  	while($rowBanner=my_fetch_array($rsBanner))
		{
			echo $rowBanner["isi"];
		}
	  }
	  ?>
	  </marquee>
      <br>
      <hr>	  
      <div align="justify">
	  <? include("linksalamku.php");
		?>
		<div align="justify"><span class="text1"><img src="images/index_47.gif" width="67" height="100" hspace="5" align="left" />DR. Dr. Abdul Hafid Bajamal, SpBS (Manajer Brain Clinic Surabaya)</span><br />
		  Assalamu&rsquo;alaikum wrb wb.<br />
Perkembangan dunia kedokteran berjalan begitu cepat, demikian juga pengetahuan dan kesadaran akan kesehatan di lingkungan masyarakat kita juga makin tinggi. Hal tersebut menjadi pemicu bagi kami menyediakan fasilitas dan pelayanan kesehatan yang lebih baik. Masyarakat menghendaki pelayanan kesehatan yang lengkap dengan lebih mudah, cepat, praktis dan terpadu, maka kepercayaan masyarakat inilah yang menjadi fokus kami. <a href="sambutan.php">selengkapnya...</a> <span class="frame"><br />
</span><br />
        </div>
		<hr />
<img src="images/trans-brain-arteri.gif" width="84" height="100" hspace="3" align="right" /><span class="text1">Mengapa harus Brain Clinic - Surabaya? </span><br />
Stroke dan Cidera Kepala adalah penyebab kematian no 2 dan 3 di Indonesia. Di samping itu penyakit sistem saraf lain juga makin meningkat seperti Tumor Otak, Dementia (gangguan daya ingat), nyeri punggung, radang otak serta gangguan kecerdasan pada anak. Penyakit tersebut apabila ditangani dengan cepat dan komprihensif (terpadu) akan memberi hasil yang baik. BRAIN CLINIC SURABAYA sebagai "out patient clinic" akan menjadi klinik pertama di Indonesia dalam menyediakan pelayanan terpadu dan lengkap terutama sebagai Brain-Spine dan Stroke Center. <a href="visimisi.php">selengkapnya...</a> <br />
 <br />
 <hr />
 <span class="text1">Soft Opening Brain Clinic</span> <br />
Soft opening Brain Clinic Surabaya telah dilaksanakan pada tanggal 4 Maret yang lalu dan sudah mulai beroperasi. Layanan konsultasi telah dapat dilakukan, dan saat ini sedang disiapkan fasilitas pendukung lainnya termasuk ruang gawat darurat dan pelayanan penunjang seperti rehabilitasi medik, apotik, dan layanan lainnya. Besar harapan kami untuk dapat memberikan pelayanan yang paripurna kepada penderita kelainan otak, stroke, tulang belakang, serta kelainan kepala-leher dan wajah dengan menyediakan suatu &quot;one stop shopping clinic&quot;. </td>

		<hr>
		<strong class="judulPesanBesar">ARTIKEL POPULER</strong>		
		<br>
		<br>
		<?
		$rsTop=my_query("select * from artikel order by baca desc limit 1,2",$con);
		if(my_num_rows($rsTop)>0)
		{
			while($rowTop=my_fetch_array($rsTop))
			{
			?>
			<a href="artikel.php?fkid=<? echo $rowTop["id"]; ?>&ic=<? echo $rowTop["kategori"]; ?>"><? echo $rowTop["judul"]; ?></a><br>
			<?
			echo substr(strip_tags($rowTop["detail"]),0,600).'...<br><br>';
			}		
		}
		?>
	  </div>
	  </td>
      <td align="right" valign="top"><? 
		include("right_konsultasi.php");	
		include("right_topik.php");
		include("right_testimonial.php");
		?></td>
    </tr>
    <tr>
      <td colspan="3"><?
			my_query("update counter set counter=counter+1 where nama='index.php'",$con);
			include("footer.php");
			?></td>
    </tr>
  </table>
</div>
</body>
</html>
