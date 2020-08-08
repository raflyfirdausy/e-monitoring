
<?php
			include '../config/koneksi.php'; 
?>
<html>
<head>
<meta name="author" title="Hakko Bio Richard | www.hakkoblogs.com" />
<meta name="description" title="Barcode Generator"/>
<title>Cetak Barcode</title>
</head>
<style>
	@import "https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700";html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,total,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{height:840px;width:592px;margin:auto;font-family:'Open Sans',sans-serif;font-size:12px}strong{font-weight:700}#container{position:relative;padding:4%}#header{height:80px}#header > #reference{float:right;text-align:right}#header > #reference h3{margin:0}#header > #reference h4{margin:0;font-size:85%;font-weight:600}#header > #reference p{margin:0;margin-top:2%;font-size:85%}#header > #logo{width:50%;float:left}#fromto{height:160px}#fromto > #from,#fromto > #to{width:45%;min-height:90px;margin-top:30px;font-size:85%;padding:1.5%;line-height:120%}#fromto > #from{float:left;width:45%;background:#efefef;margin-top:30px;font-size:85%;padding:1.5%}#fromto > #to{float:right;border:solid grey 1px}#items{margin-top:10px}#items > p{font-weight:700;text-align:right;margin-bottom:1%;font-size:65%}#items > table{width:100%;font-size:85%;border:solid grey 1px}#items > table th:first-child{text-align:left}#items > table th{font-weight:400;padding:1px 4px}#items > table td{padding:1px 4px}#items > table th:nth-child(2),#items > table th:nth-child(4){width:45px}#items > table th:nth-child(3){width:60px}#items > table th:nth-child(5){width:80px}#items > table tr td:not(:first-child){text-align:right;padding-right:1%}#items table td{border-right:solid grey 1px}#items table tr td{padding-top:3px;padding-bottom:3px;height:20px}#items table tr:nth-child(1){border:solid grey 1px}#items table tr th{border-right:solid grey 1px;padding:3px}#items table tr:nth-child(1) > td{padding-top:8px}#summary{height:170px;margin-top:30px}#summary #note{float:left}#summary #note h4{font-size:10px;font-weight:600;font-style:italic;margin-bottom:4px}#summary #note p{font-size:10px;font-style:italic}#summary #total table{font-size:85%;width:260px;float:right}#summary #total table td{padding:3px 4px}#summary #total table tr td:last-child{text-align:right}#summary #total table tr:nth-child(3){background:#efefef;font-weight:600}#footer{margin:auto;position:absolute;left:4%;bottom:4%;right:4%;border-top:solid grey 1px}#footer p{margin-top:1%;font-size:65%;line-height:140%;text-align:center}
</style>
<body onload="print()">
<div id="container">
	<div id="header">
		<div id="logo">
			<img src="tema/dist/img/logo_Pln.png" alt="" width="10%"><img src=" assets/layouts/layout3/img/icon.png" alt="logo" width="25%">
		</div>
        
		<div id="reference">
			<h3><strong>Facture</strong></h3> 
			<p>Tanggal &nbsp;: <?php $tgl = date ('l, d-m-y '); echo $tgl ;?></p>
		</div>
	</div>
    
<div id="items">
    <p></p>
	<table border="1">  
	<?php 	$query = mysqli_query($conn,"select * from m_namaalat");
			while ($data = mysqli_fetch_array($query)) {?> 
 
	<tr>
	<td colspan="2" width="120">SERIAL (4S) <b><?php echo $serial = $data['kode']; ?></b><br />  
		<img alt="<?php $data['kode'];?>" src="<?php echo "codebarcode/barcode.php?size=30&text=$serial"; ?>" /> </td>
	<td><center>PRINT DATE</center> <br />
	<center><b><?php echo date('d/m/Y'); ?></b></center></td>
	<td><center>Nama Alat</center> <br />
	<center><b><?=@$data['nama'];?></b></center></td>
	<td><center>No. Seri</center> <br />
	<center><b><?=@$data['seri'];?></b></center></td>
	<td><center>Merk</center> <br />
	<center><b><?=@$data['merk'];?></b></center></td>
	<td><center>Tipe</center> <br />
	<center><b><?=@$data['tipe'];?></b></center></td>
	<td><center>Jumlah</center> <br />
	<center><b><?=@$data['jumlah'];?></b></center></td>
	<td><center>Tgl Kalibari</center> <br />
	<center><b><?=@$data['jumlah'];?></b></center></td>
	</tr>
	<?php }?>
	</table> 
</div>
 <div align="center">
 <p> <br><b>
 PT. PLN (Persero) - E-Monitoring Alat Uji</b></p>
 </div>
</div>
</body>
</html>