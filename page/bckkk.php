<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mas_basid.m_sektor".
 *
 * @property int $id
 * @property string|null $nama
 */
class Msektorwisata extends \yii\db\ActiveRecord
{
    public $gambar;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mas_basid.m_jenislayanan_ptsp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }
    
    public static function Qall($sql)
    {
        $query = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $query;
    }
    
    public function Qone($sql)
    {
        $query = Yii::$app->db->createCommand($sql)->queryOne();
        
        return $query;
    }
    
    public static function Read()
    {
        $sql = " SELECT * FROM mas_basid.m_sektor ORDER BY id";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $data;
    }

    public static function DetailBookbyNIK($nik)
    {
        $sql    = "SELECT * FROM mas_basid.view_bookingwisata WHERE nik = '".$nik."'";
        $data   = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $data;
    }

    public function dataUtamaAll()
    { 
        $a = '';
        $b = '';
        // $c = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        $h = '';
        $i = '';
        $j = '';
        $k = '';

        if (!empty($_GET['s_nik'])) {
            $a = " AND  nik::TEXT ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        }

        if (!empty($_GET['s_tglkunjungan'])) {

            $c = " AND lower(tgl_pelayanan::text) ILIKE '%".$_GET['s_tglkunjungan']."%'";
            if ($_GET['s_tglkunjungan'] == 'undefined') {
                $c = " AND lower(tgl_pelayanan::text) ILIKE '%".date("Y")."%'";
            }
        }

        if (!empty($_GET['s_tgldaftar'])) {

            $k = " AND lower(tgl_daftar::text) ILIKE '%".$_GET['s_tgldaftar']."%'";
            if ($_GET['s_tgldaftar'] == 'undefined') {
                $k = " AND lower(tgl_daftar::text) ILIKE '%".date("Y")."%'";
            }
        }

        if (!empty($_GET['s_objekwisata'])) {
            $d = " AND lower(namawisata) ILIKE '%".strtolower($_GET['s_objekwisata'])."%'";
        } 
        if (!empty($_GET['s_kodebooking'])) {
            $e = " AND lower(qr) ILIKE '%".strtolower($_GET['s_kodebooking'])."%'";
        } 
        if (!empty($_GET['s_kodebayar'])) {
            $f = " AND  id_billing  = '".$_GET['s_kodebayar']."'";
        }

        if (!empty($_GET['s_status'])) {
            if($_GET['s_status'] == '1')
            {
                $g = " AND  verif_datang = '1'";
            }
           if($_GET['s_status'] == '2')
           {
               $g = " AND verif_datang IS NULL ";
           } 
        }

        if (!empty($_GET['s_status_bayar'])) {
            $h = " AND status_bayar  = '".$_GET['s_status_bayar']."'";
        }

        if (!empty($_GET['s_notelp'])) {
            $i = " AND notelp LIKE '%".$_GET['s_notelp']."'";
        }

        if (!empty($_GET['s_jml_pengunjung'])) {
            $j = " AND jml_pengunjung  = '".$_GET['s_jml_pengunjung']."'";
        }

        //wisata
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $iw = Yii::$app->sektor->identity->role_detail;
            $idw = " AND idwisata = $iw ";
        }

        $lim = 10;
        $pag = 1;

        //Keperluan untuk pagging
        if (!empty($_GET['page'])) {
            $pag = $_GET['page'];
        }
        if (!empty($_GET['limit'])) {
            $lim = $_GET['limit'];
        }

        
        $on = ($pag-1) * $lim;
        // var_dump($lim);

        $sql    = "SELECT * FROM mas_basid.view_bookingwisata WHERE id IS NOT NULL $idw $a $b $c $d $e $f $g $h $i $j $k ORDER BY id DESC LIMIT $lim OFFSET $on";
        $posts  = Yii::$app->db->createCommand($sql)->queryAll();
        return $posts;
    }

    public function countdataUtamaAll()
    {  
        $a = '';
        $b = '';
        // $c = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        $h = '';
        $i = '';
        $j = '';
        $k = '';

        if (!empty($_GET['s_nik'])) {
            $a = " AND  nik::TEXT ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        }

        if (!empty($_GET['s_tglkunjungan'])) {

            $c = " AND lower(tgl_pelayanan::text) ILIKE '%".$_GET['s_tglkunjungan']."%'";
            if ($_GET['s_tglkunjungan'] == 'undefined') {
                $c = " AND lower(tgl_pelayanan::text) ILIKE '%".date("Y")."%'";
            }
        }

        if (!empty($_GET['s_tgldaftar'])) {

            $k = " AND lower(tgl_daftar::text) ILIKE '%".$_GET['s_tgldaftar']."%'";
            if ($_GET['s_tgldaftar'] == 'undefined') {
                $k = " AND lower(tgl_daftar::text) ILIKE '%".date("Y")."%'";
            }
        }

        if (!empty($_GET['s_objekwisata'])) {
            $d = " AND lower(namawisata) ILIKE '%".strtolower($_GET['s_objekwisata'])."%'";
        } 
        if (!empty($_GET['s_kodebooking'])) {
            $e = " AND lower(qr) ILIKE '%".strtolower($_GET['s_kodebooking'])."%'";
        } 
        if (!empty($_GET['s_kodebayar'])) {
            $f = " AND  id_billing  = '".$_GET['s_kodebayar']."'";
        }

        if (!empty($_GET['s_status'])) {
            if($_GET['s_status'] == '1')
            {
                $g = " AND  verif_datang = '1'";
            }
           if($_GET['s_status'] == '2')
           {
               $g = " AND verif_datang IS NULL ";
           } 
        }

        if (!empty($_GET['s_status_bayar'])) {
            $h = " AND status_bayar  = '".$_GET['s_status_bayar']."'";
        } 

        if (!empty($_GET['s_notelp'])) {
            $i = " AND notelp  LIKE '%".$_GET['s_notelp']."'";
        }

        if (!empty($_GET['s_jml_pengunjung'])) {
            $j = " AND jml_pengunjung  = '".$_GET['s_jml_pengunjung']."'";
        }

        //wisata
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $iw = Yii::$app->sektor->identity->role_detail;
            $idw = " AND idwisata = $iw ";
        }


        $sql    = "SELECT count(id) FROM mas_basid.view_bookingwisata WHERE id IS NOT NULL  $idw  $a $b $c $d $e $f $g $h $i $j $k";
        $posts  = Yii::$app->db->createCommand($sql)->queryScalar(); 
        return $posts;
    }

    public function getCountPengunjung($id_wisata, $verif_datang)
    {   
        if ($verif_datang == '1') {
            $qw = " AND verif_datang = '1'";
        }else{
            $qw = " AND verif_datang IS NULL";
        }

        $tipe_lap       = $_GET['tipe_lap'];
        $tanggal        = $_GET['tanggal'];
        $con_tanggal    = date("Y-m-d", strtotime($tanggal));

        if ($_GET['tipe_lap'] == 'D') {
            $tanggal = $con_tanggal;
        }elseif ($_GET['tipe_lap'] == 'M') {
            $tanggal = substr($con_tanggal, 0, 7);
        }elseif ($_GET['tipe_lap'] == 'Y') {
            $tanggal = substr($con_tanggal, 0, 4);
        }

        $sql    = "SELECT SUM(jml_pengunjung) + SUM(jml_pengunjung_anak) FROM mas_basid.tm_booking_wisata WHERE id_layanan = '".$id_wisata."' AND tgl_pelayanan::text LIKE '".$tanggal."%' $qw";
        $data   = Yii::$app->db->createCommand($sql)->queryScalar();
        
        if (!empty($data)) {
            return $data;
        }else{
            return '0';
        }
    }

    public function getCountBookingPengunjung($id_wisata)
    {   

        $tipe_lap       = $_GET['tipe_lap'];
        $tanggal        = $_GET['tanggal'];
        $con_tanggal    = date("Y-m-d", strtotime($tanggal));

        if ($_GET['tipe_lap'] == 'D') {
            $tanggal = $con_tanggal;
        }elseif ($_GET['tipe_lap'] == 'M') {
            $tanggal = substr($con_tanggal, 0, 7);
        }elseif ($_GET['tipe_lap'] == 'Y') {
            $tanggal = substr($con_tanggal, 0, 4);
        }

        $sql    = "SELECT SUM(jml_pengunjung) + SUM(jml_pengunjung_anak) FROM mas_basid.tm_booking_wisata WHERE id_layanan = '".$id_wisata."' AND tgl_pelayanan::text LIKE '".$tanggal."%'";
        $data   = Yii::$app->db->createCommand($sql)->queryScalar();
        
        if (!empty($data)) {
            return $data;
        }else{
            return '0';
        }
    }

    public function flexibQuery($qr, $table, $kolom, $value, $status_bayar)
    {
        $sql = " SELECT $qr FROM $table WHERE $kolom::text LIKE '".$value."%' AND status_bayar IN ('".$status_bayar."')";
        $data = Yii::$app->db->createCommand($sql)->queryScalar();
        
        return $data;
    }

    public function flexibQueryK($qr, $table, $kolom, $value)
    {
        $sql = " SELECT $qr FROM $table WHERE $kolom::text LIKE '".$value."%'";
        $data = Yii::$app->db->createCommand($sql)->queryScalar();
        
        return $data;
    }
    
    public static function User()
    {
        $sql = " SELECT * FROM mas_basid.m_userwisata ORDER BY id DESC ";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $data;
    }

    public static function UserByID($id)
    {
        $sql = " SELECT * FROM mas_basid.m_userwisata WHERE id = '".$id."' ";
        $data = Yii::$app->db->createCommand($sql)->queryOne();
        
        return $data;
    }

    public static function Gettempatwisata()
    {
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $w = Yii::$app->sektor->identity->role_detail;
            $idw = " AND id = $w ";
        }
        
        $sql = " SELECT * FROM mas_basid.m_tempatwisata 
                 WHERE id IS NOT NULL
                 $idw
                 ORDER BY id DESC ";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $data;
    }
    public static function Jenisloketlayanan()
    {
        $sql = " SELECT * FROM mas_basid.m_jenislayananloket_ptsp ORDER BY id DESC ";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $data;
    }
    
    public static function Databooking()
    {
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $iw = Yii::$app->sektor->identity->role_detail;
            $idw = " AND idwisata = $iw ";
        }
        
        $sql = " SELECT * FROM mas_basid.view_bookingwisata
                 WHERE id IS NOT NULL
                 $idw
                 ORDER BY tgl_daftar ASC ";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $data;
    }


    public function ceknomorujidaftar($id_billing)
    {       
        $sql = "select * from mas_basid.view_bookingwisata   where  id_billing ='".$id_billing."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne();
        return $data; 
    }

    public function mysetting($ey)
    { 
        $sql = "select app_val from mas_basid.tm_setting_ptsp  where app_key='$ey' ";
        $data = Yii::$app->db->createCommand($sql)->queryOne();
        return $data['app_val']; 
    }

    public static function Loopkuotaharian()
    {
        $sql = " SELECT * FROM mas_basid.tm_antrian_ptsp where hari != '0' order by hari ASC  ";
        $data = Yii::$app->db->createCommand($sql)->queryAll(); 
        return $data;
    }
    
    public function cekverifdatang($id)
    {       
        $sql = "select id from mas_basid.view_bookingwisata where id=$id and verif_datang is null ";
        $data = Yii::$app->db->createCommand($sql)->queryOne();
        return $data; 
    }
    
    public static function Kuotapendaftaran()
    {
        $sql = " SELECT * FROM mas_basid.m_antrian_wisata ";
        $data = Yii::$app->db->createCommand($sql)->queryAll(); 
        return $data;
    }

    public static function getRowByidAntrian($id)
    {

        $sql = " SELECT * FROM mas_basid.m_antrian_wisata WHERE id = '".$id."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne(); 
        return $data;
    }

    public static function getRowByidAntriankhusus($id)
    {

        $sql = " SELECT * FROM mas_basid.m_hariwisata_khusus WHERE id = '".$id."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne(); 
        return $data;
    }

    public static function Kuotapendaftaranbyid()
    {
        $a = '';
        $b = '';
        if (isset($_GET['id'])) {
            if ($_GET['id'] == 'nol') {
                $a = '';
            }else{
                $a = " AND id_tempatwisata = '".$_GET['id']."'"; 
            }
            
        }
        if (!empty($_GET['p1'])) {
            $b = " AND lower(nama_wisata) LIKE '%" . strtolower($_GET['p1']) . "%'";
        }

        $sql = " SELECT * FROM mas_basid.v_kuota WHERE id IS NOT NULL $a $b order by nama_wisata ASC";
        $data = Yii::$app->db->createCommand($sql)->queryAll(); 
        return $data;
    }
    
    public static function Tempatwisatabyid()
    {
        $a = '';
        if (isset($_GET['id'])) {
            $a = " WHERE id = '".$_GET['id']."'"; 
        }

        $sql = " SELECT * FROM mas_basid.m_tempatwisata $a order by id ASC";
        $data = Yii::$app->db->createCommand($sql)->queryAll(); 
        return $data;
    }

    public static function AllWisatane()
    {
        $sql = " SELECT * FROM mas_basid.m_tempatwisata order by id ASC";
        $data = Yii::$app->db->createCommand($sql)->queryAll(); 
        return $data;
    }

    public static function Getkecamatan()
    {
        $sql = " SELECT * FROM mas_basid.m_kecamatan";
        $data = Yii::$app->db->createCommand($sql)->queryAll(); 
        return $data;
    }
    public static function Getkecamatanbyid($id)
    {
        $sql = " SELECT * FROM mas_basid.m_kecamatan where kd_kecamatan ='".$id."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne(); 
        return $data['kecamatan'];
    }
    public static function Getdesabyid($id)
    {
        $sql = " SELECT * FROM mas_basid.m_kelurahan where kd_kelurahan ='".$id."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne(); 
        return $data['kelurahan'];
    }
    public static function Getdesabyidne($id)  
    {
        if($id == ''){
            $idne = '0';
        }
        else{
            $idne = $id;
        }
        $sql = " SELECT * FROM mudik.tm_desa where id ='".$idne."'";
        $data = Yii::$app->db25->createCommand($sql)->queryOne(); 
        return $data['desa'];
    }
    public static function Gethariyid($id)
    {
        $sql = " SELECT * FROM mas_basid.m_hari_wisata where kode ='".$id."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne(); 
        return $data['hari'];
    }
    public static function Getkelbyname($id)
    {
        $sql = " SELECT * FROM mas_basid.m_kelurahan where kelurahan ='".$id."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne(); 
        return $data['kd_kelurahan'];
    }
    public static function Getkecbyname($id)
    {
        $sql = " SELECT * FROM mas_basid.m_kecamatan where kecamatan ='".$id."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne(); 
        return $data['kd_kecamatan'];
    }
    public static function Getkabbyname($id)
    {
        $sql = " SELECT * FROM mudik.tm_kabupaten where kabupaten ILIKE '%".$id."%'";
        $data = Yii::$app->db25->createCommand($sql)->queryOne(); 
        return $data['id'];
    }
    public static function Getkabbyidne($id)
    {
        $sql = " SELECT * FROM mudik.tm_kabupaten where id = '".$id."'";
        $data = Yii::$app->db25->createCommand($sql)->queryOne(); 
        return $data['kabupaten'];
    }
    public function is_hari($keyz=false)
    {
        $pramm = array(0 => 'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat','Sabtu');
        if($keyz == true){
            return $pramm[$keyz];
        }else{
            return $pramm;
        }
        
    }

    public function dbupdate($table, $val=array(), $where, $id){
            $isi = false;
            foreach ($val as $key => $value){
                $isi .= $key ."='". $value ."', ";
            }
            $isi .= "where ". $where."='". $id ."'";
            $newIsi = str_replace (", where", " where", $isi);
            $newQuery = "UPDATE ". $table ." SET ". $newIsi;
            Yii::$app->db->createCommand($newQuery)->execute(); 
            return true;
    }
    public static function Rjenis_sektor()
    {
        
        
        $sql = " SELECT a.*,b.nama AS sektor
                 FROM mas_basid.jenis_sektor a 
                 LEFT JOIN mas_basid.m_sektor b
                 ON b.id = a.id_sektor
                 WHERE a.nama IS NOT NULL ";
        $data = self::Qall($sql);
        
        
        return $data;
    }
    
    public static function Role()
    {
        $sql = " SELECT nama FROM mas_basid.m_role ";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $data;
    }

    public static function getKuotaTodayZ()
    {
        $tgl    = date("Y-m-d");
        $date   = date("Y-m-d", strtotime($tgl));
        $day    = date("w",strtotime($date));

        $sql    = "SELECT kuota FROM mas_basid.m_antrian_wisata WHERE id_tempatwisata = '11' AND hari = '".$day."'";
        $data = Yii::$app->db->createCommand($sql)->queryScalar();

    }

    public static function getKuotaToday()
    {

        $tgl    = date("Y-m-d");
        $date   = date("Y-m-d", strtotime($tgl));
        $day    = date("w",strtotime($date));

        $sql = "SELECT kuota FROM mas_basid.m_antrian_wisata WHERE id_tempatwisata = '11' AND hari = '".$day."'";
        $data = Yii::$app->db->createCommand($sql)->queryScalar();
        
        if (!empty($data)) {
            return $data;
        }else{
            return 0;
        }
    }

    public static function getPetugasverif($id)
    {

        $sql = " SELECT nama FROM mas_basid.m_userallsektor WHERE nik= '".$id."'";
        $data = Yii::$app->db->createCommand($sql)->queryOne();
        
        return $data['nama'];
    }
    public static function getCountdataverif()
    {

        $sql = " SELECT SUM(jml_pengunjung+jml_pengunjung_anak) FROM mas_basid.view_bookingwisata WHERE verif_datang = '1'  and tgl_pelayanan = '".date('Y-m-d')."'";
        $data = Yii::$app->db->createCommand($sql)->queryScalar();
        
        if (!empty($data)) {
            return $data;
        }else{
            return 0;
        }
    }
    public static function getCountdatanotverif()
    {

        $sql = " SELECT SUM(jml_pengunjung+jml_pengunjung_anak) FROM mas_basid.view_bookingwisata WHERE verif_datang IS NULL  and tgl_pelayanan = '".date('Y-m-d')."'";
        $data = Yii::$app->db->createCommand($sql)->queryScalar();
        
        if (!empty($data)) {
            return $data;
        }else{
            return 0;
        }
    }

     public function dataUtama()
    { 
        $a = '';
        $b = '';
        // $c = '';
        $c = "AND tgl_pelayanan='".date('Y-m-d')."'";
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        $h = '';
        $i = '';
        $j = '';
        $k = '';

        if (!empty($_GET['s_nik'])) {
            $a = " AND  nik::TEXT ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        }

        if (!empty($_GET['s_tglkunjungan'])) {

            $c = " AND lower(tgl_pelayanan::text) ILIKE '%".$_GET['s_tglkunjungan']."%'";
            if ($_GET['s_tglkunjungan'] == 'undefined') {
                $c = " AND lower(tgl_pelayanan::text) ILIKE '%".date("Y")."%'";
            }
        }

        if (!empty($_GET['s_tgldaftar'])) {

            $c = " AND lower(tgl_daftar::text) ILIKE '%".$_GET['s_tgldaftar']."%'";
            if ($_GET['s_tgldaftar'] == 'undefined') {
                $c = " AND lower(tgl_daftar::text) ILIKE '%".date("Y")."%'";
            }
        }

        if (!empty($_GET['s_objekwisata'])) {
            $d = " AND lower(namawisata) ILIKE '%".strtolower($_GET['s_objekwisata'])."%'";
        } 
        if (!empty($_GET['s_kodebooking'])) {
            $e = " AND lower(qr) ILIKE '%".strtolower($_GET['s_kodebooking'])."%'";
        } 
        if (!empty($_GET['s_kodebayar'])) {
            $f = " AND  id_billing  = '".$_GET['s_kodebayar']."'";
        }

        if (!empty($_GET['s_status'])) {
            if($_GET['s_status'] == '1')
            {
                $g = " AND  verif_datang = '1'";
            }
           if($_GET['s_status'] == '2')
           {
               $g = " AND verif_datang IS NULL ";
           } 
        }

        if (!empty($_GET['s_status_bayar'])) {
            $h = " AND status_bayar  = '".$_GET['s_status_bayar']."'";
        }

        if (!empty($_GET['s_notelp'])) {
            $i = " AND notelp  LIKE '%".$_GET['s_notelp']."'";
        }

        if (!empty($_GET['s_jml_pengunjung'])) {
            $j = " AND jml_pengunjung  = '".$_GET['s_jml_pengunjung']."'";
        }

        //wisata
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $iw = Yii::$app->sektor->identity->role_detail;
            $idw = " AND idwisata = $iw ";
        }

        $lim = 10;
        $pag = 1;

        //Keperluan untuk pagging
        if (!empty($_GET['page'])) {
            $pag = $_GET['page'];
        }
        if (!empty($_GET['limit'])) {
            $lim = $_GET['limit'];
        }

        
        $on = ($pag-1) * $lim;
        // var_dump($lim);

        $sql    = "SELECT * FROM mas_basid.view_bookingwisata WHERE id IS NOT NULL $idw $a $b $c $d $e $f $g $h $i $j ORDER BY id DESC LIMIT $lim OFFSET $on ";
        $posts  = Yii::$app->db->createCommand($sql)->queryAll();
        return $posts;
    }

    public function countdataUtama()
    {  


        $a = '';
        $b = '';
        $c = "AND tgl_pelayanan='".date('Y-m-d')."'";
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        $h = '';
        $i = '';
        $j = '';
        $k = '';

        if (!empty($_GET['s_nik'])) {
            $a = " AND  nik::TEXT ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        }

        if (!empty($_GET['s_tglkunjungan'])) {

            $c = " AND lower(tgl_pelayanan::text) ILIKE '%".$_GET['s_tglkunjungan']."%'";
            if ($_GET['s_tglkunjungan'] == 'undefined') {
                $c = " AND lower(tgl_pelayanan::text) ILIKE '%".date("Y")."%'";
            }
        }

        if (!empty($_GET['s_tgldaftar'])) {

            $c = " AND lower(tgl_daftar::text) ILIKE '%".$_GET['s_tgldaftar']."%'";
            if ($_GET['s_tgldaftar'] == 'undefined') {
                $c = " AND lower(tgl_daftar::text) ILIKE '%".date("Y")."%'";
            }
        }

        if (!empty($_GET['s_objekwisata'])) {
            $d = " AND lower(namawisata) ILIKE '%".strtolower($_GET['s_objekwisata'])."%'";
        } 
        if (!empty($_GET['s_kodebooking'])) {
            $e = " AND lower(qr) ILIKE '%".strtolower($_GET['s_kodebooking'])."%'";
        } 
        if (!empty($_GET['s_kodebayar'])) {
            $f = " AND  id_billing  = '".$_GET['s_kodebayar']."'";
        }

        if (!empty($_GET['s_status'])) {
            if($_GET['s_status'] == '1')
            {
                $g = " AND  verif_datang = '1'";
            }
           if($_GET['s_status'] == '2')
           {
               $g = " AND verif_datang IS NULL ";
           } 
        }

        if (!empty($_GET['s_status_bayar'])) {
            $h = " AND status_bayar  = '".$_GET['s_status_bayar']."'";
        }

        if (!empty($_GET['s_notelp'])) {
            $i = " AND notelp  LIKE '%".$_GET['s_notelp']."'";
        }

        if (!empty($_GET['s_jml_pengunjung'])) {
            $j = " AND jml_pengunjung  = '".$_GET['s_jml_pengunjung']."'";
        }

        //wisata
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $iw = Yii::$app->sektor->identity->role_detail;
            $idw = " AND idwisata = $iw ";
        }


        $sql    = "SELECT count(id) FROM mas_basid.view_bookingwisata WHERE id IS NOT NULL  $idw  $a $b $c $d $e $f $g $h $i $j";
        $posts  = Yii::$app->db->createCommand($sql)->queryScalar(); 
        return $posts;
    }  

    public function dataUtamaexport()
    { 
        $a = '';
        $b = '';
        // $c = '';
        $c = "AND tgl_pelayanan='".date('Y-m-d')."'";
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        if (!empty($_GET['s_nik'])) {
            $a = " AND  nik::TEXT    ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        }
        if (!empty($_GET['s_tglkunjungan'])) {
            $c = " AND lower(tgl_pelayanan::text) ILIKE '%".$_GET['s_tglkunjungan']."%'";
        }
        if (!empty($_GET['s_objekwisata'])) {
            $d = " AND lower(namawisata) ILIKE '%".strtolower($_GET['s_objekwisata'])."%'";
        } 
        if (!empty($_GET['s_kodebooking'])) {
            $e = " AND lower(qr) ILIKE '%".strtolower($_GET['s_kodebooking'])."%'";
        } 
        if (!empty($_GET['s_kodebayar'])) {
            $f = " AND  id_billing  = '".$_GET['s_kodebayar']."'";
        }  

        if (!empty($_GET['s_status'])) {
            if($_GET['s_status'] == '1')
            {
                $g = " AND  verif_datang = '1'";
            }
           if($_GET['s_status'] == '2')
           {
               $g = " AND  verif_datang IS NULL ";
           } 
        } 
        //wisata
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $iw = Yii::$app->sektor->identity->role_detail;
            $idw = " AND idwisata = $iw ";
        }
 

        $sql    = "SELECT * FROM mas_basid.view_bookingwisata WHERE id IS NOT NULL $idw $a $b $c $d $e $f $g  ORDER BY id DESC ";
        $posts  = Yii::$app->db->createCommand($sql)->queryAll();
        return $posts;
    }

     public function dataUtamauser()
    { 
        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        $h = '';
        if (!empty($_GET['s_nik'])) {
            $a = " AND  nik::TEXT    ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        }
        if (!empty($_GET['s_notelp'])) {
            $c = " AND lower(notelp) ILIKE '%".$_GET['s_notelp']."%'";
        }
        if (!empty($_GET['s_desa'])) {
            $idkel = Msektorwisata::Getkelbyname($_GET['s_desa']);
            $d = " AND lower(kelurahan) ILIKE '%".strtolower($idkel)."%'";
        } 
        if (!empty($_GET['s_kecamatan'])) {
            $idkec = Msektorwisata::Getkecbyname($_GET['s_kecamatan']);
            $e = " AND lower(kecamatan) ILIKE '%".strtolower($idkec)."%'";
        } 
        if (!empty($_GET['s_kabupaten'])) {
            $idkab = Msektorwisata::Getkabbyname($_GET['s_kabupaten']);
            $f = " AND lower(kabupaten) ILIKE '%".$idkab."%'";
        }  
        if (!empty($_GET['s_provinsi'])) { 
            $g = " AND lower(provinsi) ILIKE '%".$_GET['s_provinsi']."%'";
        } 
        if (!empty($_GET['s_status'])) {
            if($_GET['s_status'] == '1')
            {
                $h = " AND  status = '1'";
            }
           if($_GET['s_status'] == '2')
           {
               $h = " AND  status IS NULL ";
           } 
        } 

        //wisata
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $iw = Yii::$app->sektor->identity->role_detail;
            $idw = " AND idwisata = $iw ";
        }

        $lim = 10;
        $pag = 1;

        //Keperluan untuk pagging
        if (!empty($_GET['page'])) {
            $pag = $_GET['page'];
        }
        if (!empty($_GET['limit'])) {
            $lim = $_GET['limit'];
        }

        
        $on = ($pag-1) * $lim;
        // var_dump($lim);

        $sql    = "SELECT * FROM mas_basid.view_userwisata   WHERE id IS NOT NULL $idw $a $b $c $d $e $f $g $h  ORDER BY id DESC LIMIT $lim OFFSET $on ";
        $posts  = Yii::$app->db->createCommand($sql)->queryAll();
        var_dump($sql);
        return $posts;
    }

    public function countdataUtamauser()
    {  


        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        $h = '';
        if (!empty($_GET['s_nik'])) {
            $a = " AND  nik::TEXT    ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        }
        
        if (!empty($_GET['s_notelp'])) {
            $c = " AND lower(notelp) ILIKE '%".$_GET['s_notelp']."%'";
        }
        if (!empty($_GET['s_desa'])) {
            $idkel = Msektorwisata::Getkelbyname($_GET['s_desa']);
            $d = " AND lower(kelurahan) ILIKE '%".strtolower($idkel)."%'";
        } 
        if (!empty($_GET['s_kecamatan'])) {
            $idkec = Msektorwisata::Getkecbyname($_GET['s_kecamatan']);
            $e = " AND lower(kecamatan) ILIKE '%".strtolower($idkec)."%'";
        } 
        if (!empty($_GET['s_kabupaten'])) {
            $idkab = Msektorwisata::Getkabbyname($_GET['s_kabupaten']);
            $f = " AND lower(kabupaten) ILIKE '%".$idkab."%'";
        } 
        if (!empty($_GET['s_provinsi'])) { 
            $g = " AND lower(provinsi) ILIKE '%".$_GET['s_provinsi']."%'";
        } 
        if (!empty($_GET['s_status'])) {
            if($_GET['s_status'] == '1')
            {
                $h = " AND  status = '1'";
            }
           if($_GET['s_status'] == '2')
           {
               $h = " AND  status IS NULL ";
           } 
        } 

        //wisata
        $idw = '';
        
        if(!Yii::$app->sektor->isGuest){
            $iw = Yii::$app->sektor->identity->role_detail;
            $idw = " AND idwisata = $iw ";
        }


        $sql    = "SELECT count(id) FROM mas_basid.view_userwisata WHERE id IS NOT NULL $idw  $a $b $c $d $e $f $g $h";
        $posts  = Yii::$app->db->createCommand($sql)->queryScalar(); 
        return $posts;
    }  
      
    //  public function dataUtamausermaster()
    // { 
    //     $a = '';
    //     $b = '';
    //     $c = '';
    //     $d = '';
    //     $e = '';
    //     $f = '';
    //     $g = '';
    //     if (!empty($_GET['s_nik'])) {
    //         $a = " AND  nik::TEXT    ILIKE '%".$_GET['s_nik']."%'";
    //     }
    //     if (!empty($_GET['s_nama'])) {
    //         $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
    //     }
    //     // if (!empty($_GET['s_tgldaftar'])) {
    //     //     $c = " AND lower(tgl_daftar) ILIKE '%".$_GET['s_tgldaftar']."%'";
    //     // }
    //     // if (!empty($_GET['s_objekwisata'])) {
    //     //     $d = " AND lower(namawisata) ILIKE '%".strtolower($_GET['s_objekwisata'])."%'";
    //     // } 
    //     // if (!empty($_GET['s_kodebooking'])) {
    //     //     $e = " AND lower(qr) ILIKE '%".strtolower($_GET['s_kodebooking'])."%'";
    //     // } 
    //     // if (!empty($_GET['s_kodebayar'])) {
    //     //     $f = " AND  id_billing  = '".$_GET['s_kodebayar']."'";
    //     // }  

    //     //wisata
    //     $idw = '';
        
    //     if(!Yii::$app->sektor->isGuest){
    //         $iw = Yii::$app->sektor->identity->role_detail;
    //         $idw = " AND idwisata = $iw ";
    //     }

    //     $lim = 10;
    //     $pag = 1;

    //     //Keperluan untuk pagging
    //     if (!empty($_GET['page'])) {
    //         $pag = $_GET['page'];
    //     }
    //     if (!empty($_GET['limit'])) {
    //         $lim = $_GET['limit'];
    //     }

        
    //     $on = ($pag-1) * $lim;
    //     // var_dump($lim);

    //     $sql    = "SELECT * FROM mas_basid.m_userallsektor   WHERE id IS NOT NULL AND role = 'Tempat Wisata' $idw $a $b $c $d $e $f $g  ORDER BY id DESC LIMIT $lim OFFSET $on ";
    //     $posts  = Yii::$app->db->createCommand($sql)->queryAll();
    //     return $posts;
    // }


     public function dataUtamausermaster()
    { 
        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        if (!empty($_GET['s_nik'])) {
            $a = " AND  nip::TEXT    ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        } 
        $lim = 10;
        $pag = 1;

        //Keperluan untuk pagging
        if (!empty($_GET['page'])) {
            $pag = $_GET['page'];
        }
        if (!empty($_GET['limit'])) {
            $lim = $_GET['limit'];
        }

        
        $on = ($pag-1) * $lim;
        // var_dump($lim);

        $sql    = "SELECT b.nip,b.nama, b.desa,b.kecamatan,b.kabupaten,b.provinsi,a.role_sektor_basid,a.role_akses_basid,b.nomor_telepon
                    FROM master.user a 
                    LEFT JOIN  master.view_pegawai b ON a.username = b.nip  
                    WHERE a.role_sektor_basid IS not NULL AND a.role_sektor_basid IN ('Tempat Wisata','allsektor')  $a $b $c $d $e $f $g  ORDER BY b.id DESC LIMIT $lim OFFSET $on ";
        $posts  = Yii::$app->db25->createCommand($sql)->queryAll();
        return $posts;
    }


       public function countdataUtamausermaster()
    {  


        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $g = '';
        if (!empty($_GET['s_nik'])) {
            $a = " AND  nip::TEXT    ILIKE '%".$_GET['s_nik']."%'";
        }
        if (!empty($_GET['s_nama'])) {
            $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
        } 


        $sql    = "SELECT count(b.id) FROM master.user a 
                    LEFT JOIN  master.view_pegawai b ON a.username = b.nip  
                    WHERE a.role_sektor_basid IS not NULL  AND a.role_sektor_basid IN ('Tempat Wisata','allsektor')  $a $b $c $d $e $f $g";
        $posts  = Yii::$app->db25->createCommand($sql)->queryScalar(); 
        return $posts;
    } 
    // public function countdataUtamausermaster()
    // {  


    //     $a = '';
    //     $b = '';
    //     $c = '';
    //     $d = '';
    //     $e = '';
    //     $f = '';
    //     $g = '';
    //     if (!empty($_GET['s_nik'])) {
    //         $a = " AND  nik::TEXT    ILIKE '%".$_GET['s_nik']."%'";
    //     }
    //     if (!empty($_GET['s_nama'])) {
    //         $b = " AND  nama::TEXT ILIKE '%".$_GET['s_nama']."%'";
    //     }
    //     // if (!empty($_GET['s_tgldaftar'])) {
    //     //     $c = " AND lower(tgl_daftar) ILIKE '%".$_GET['s_tgldaftar']."%'";
    //     // }
    //     // if (!empty($_GET['s_objekwisata'])) {
    //     //     $d = " AND lower(namawisata) ILIKE '%".strtolower($_GET['s_objekwisata'])."%'";
    //     // } 
    //     // if (!empty($_GET['s_kodebooking'])) {
    //     //     $e = " AND lower(qr) ILIKE '%".strtolower($_GET['s_kodebooking'])."%'";
    //     // } 
    //     // if (!empty($_GET['s_kodebayar'])) {
    //     //     $f = " AND  id_billing  = '".$_GET['s_kodebayar']."'";
    //     // }  

    //     //wisata
    //     $idw = '';
        
    //     if(!Yii::$app->sektor->isGuest){
    //         $iw = Yii::$app->sektor->identity->role_detail;
    //         $idw = " AND idwisata = $iw ";
    //     }


    //     $sql    = "SELECT count(id) FROM mas_basid.m_userallsektor WHERE id IS NOT NULL AND role = 'Tempat Wisata' $idw  $a $b $c $d $e $f $g";
    //     $posts  = Yii::$app->db->createCommand($sql)->queryScalar(); 
    //     return $posts;
    // }  
}
