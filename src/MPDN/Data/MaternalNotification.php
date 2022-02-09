<?php

namespace MPDN\Data;

use MPDN\Data;

/**
 * Maternal Death Notification data structure
 */
class MaternalNotification extends Data
{
	protected $incomingMap = [
		'id' => 'id',
		'created' => 'dibuat',
		'registrar' => 'uid',
        'originid' => 'originid',
        'msgid' => 'msgid',
		'anonim' => 'anonim',
		'ktp' => 'ktp',
		'warganegara' => 'warganegara',
		'selain_ktp' => 'selain_ktp',
		'nomor_selain' => 'nomor_selain',
		'nama' => 'nama',
		'menikah' => 'menikah',
		'umur' => 'umur',
		'hamil_ke' => 'hamil_ke',
		'usia_kehamilan' => 'usia_kehamilan',
		'sebab_kematian' => 'sebab_kematian',
		'dugaan_lain' => 'dugaan_lain',
		'kab_kota' => 'kab_kota',
		'kab_kota_ktp' => 'kab_kota_ktp',
		'kab_kota_sekarang' => 'kab_kota_sekarang',
		'domisili' => 'domisili',
		'alamat_mati' => 'alamat_mati',
		'alamat_ktp' => 'alamat_ktp',
		'alamat_mukim' => 'alamat_mukim',
		'alamat_sekarang' => 'alamat_sekarang',
		'rt_ktp' => 'rt_ktp',
		'rw_ktp' => 'rw_ktp',
		'jalan_ktp' => 'jalan_ktp',
		'rt_sekarang' => 'rt_sekarang',
		'rw_sekarang' => 'rw_sekarang',
		'jalan_sekarang' => 'jalan_sekarang',
		'rt_mukim' => 'rt_mukim',
		'rw_mukim' => 'rw_mukim',
		'jalan_mukim' => 'jalan_mukim',
		'status_mukim' => 'status_mukim',
		'sesuai_ktp' => 'sesuai_ktp',
		'sesuai_ktp2' => 'sesuai_ktp2',
		'faskes_mati' => 'faskes_mati',
		'tanggal_meninggal' => 'tanggal_meninggal',
		'tempat_meninggal' => 'tempat_meninggal',
		'nama_tempat' => 'nama_tempat',
		'nmrkasus_kodeunik' => 'nmrkasus_kodeunik',
		'sudah' => 'sudah',
		'masa' => 'masa',
		'rujukan' => 'rujukan',
		'baris' => 'baris',
		'status' => 'status',
		'rekom' => 'rekom',
		'orphan' => 'orphan',
		'cod' => 'cod',
		'primer' => 'primer',
		'institusi' => 'institusi',
		'verified' => 'verified',
		'final' => 'final',
		'anulir' => 'anulir',
    ];

    protected $outgoingMap = [
    	'originid' => 'originid',
        'msgid' => 'msgid',
		'anonim' => 'anonim',
		'ktp' => 'ktp',
		'warganegara' => 'warganegara',
		'selain_ktp' => 'selain_ktp',
		'nomor_selain' => 'nomor_selain',
		'nama' => 'nama',
		'menikah' => 'menikah',
		'umur' => 'umur',
		'hamil_ke' => 'hamil_ke',
		'usia_kehamilan' => 'usia_kehamilan',
		'sebab_kematian' => 'sebab_kematian',
		'dugaan_lain' => 'dugaan_lain',
		'kab_kota' => 'kab_kota',
		'kab_kota_ktp' => 'kab_kota_ktp',
		'kab_kota_sekarang' => 'kab_kota_sekarang',
		'domisili' => 'domisili',
		'alamat_mati' => 'alamat_mati',
		'alamat_ktp' => 'alamat_ktp',
		'alamat_mukim' => 'alamat_mukim',
		'alamat_sekarang' => 'alamat_sekarang',
		'rt_ktp' => 'rt_ktp',
		'rw_ktp' => 'rw_ktp',
		'jalan_ktp' => 'jalan_ktp',
		'rt_sekarang' => 'rt_sekarang',
		'rw_sekarang' => 'rw_sekarang',
		'jalan_sekarang' => 'jalan_sekarang',
		'rt_mukim' => 'rt_mukim',
		'rw_mukim' => 'rw_mukim',
		'jalan_mukim' => 'jalan_mukim',
		'status_mukim' => 'status_mukim',
		'sesuai_ktp' => 'sesuai_ktp',
		'sesuai_ktp2' => 'sesuai_ktp2',
		'faskes_mati' => 'faskes_mati',
		'tanggal_meninggal' => 'tanggal_meninggal',
		'tempat_meninggal' => 'tempat_meninggal',
		'nama_tempat' => 'nama_tempat',
		'nmrkasus_kodeunik' => 'nmrkasus_kodeunik',
		'masa' => 'masa',
		'rujukan' => 'rujukan',
		'rekom' => 'rekomendasi',
		'cod' => 'cod',
		'primer' => 'primer',
		'valid' => 'valid',
    ];

	/**
	*
	* @var string
	*/
	private $msgid;

	/**
	*
	* @var string
	*/
	private $anonim;

	/**
	*
	* @var string
	*/
	private $ktp;

	/**
	*
	* @var string
	*/
	private $warganegara;

	/**
	*
	* @var string
	*/
	private $selain_ktp;

	/**
	*
	* @var string
	*/
	private $nomor_selain;

	/**
	*
	* @var string
	*/
	private $nama;

	/**
	*
	* @var int
	*/
	private $menikah;

	/**
	*
	* @var int
	*/
	private $umur;

	/**
	*
	* @var int
	*/
	private $hamil_ke;

	/**
	*
	* @var int
	*/
	private $usia_kehamilan;

	/**
	*
	* @var string
	*/
	private $sebab_kematian;

	/**
	*
	* @var string
	*/
	private $dugaan_lain;

	/**
	*
	* @var string
	*/
	private $kab_kota;

	/**
	*
	* @var string
	*/
	private $kab_kota_ktp;

	/**
	*
	* @var string
	*/
	private $kab_kota_sekarang;

	/**
	*
	* @var string
	*/
	private $domisili;

	/**
	*
	* @var string
	*/
	private $alamat_mati;

	/**
	*
	* @var string
	*/
	private $alamat_ktp;

	/**
	*
	* @var string
	*/
	private $alamat_mukim;

	/**
	*
	* @var string
	*/
	private $alamat_sekarang;

	/**
	*
	* @var string
	*/
	private $rt_ktp;

	/**
	*
	* @var string
	*/
	private $rw_ktp;

	/**
	*
	* @var string
	*/
	private $jalan_ktp;

	/**
	*
	* @var string
	*/
	private $rt_sekarang;

	/**
	*
	* @var string
	*/
	private $rw_sekarang;

	/**
	*
	* @var string
	*/
	private $jalan_sekarang;

	/**
	*
	* @var string
	*/
	private $rt_mukim;

	/**
	*
	* @var string
	*/
	private $rw_mukim;

	/**
	*
	* @var string
	*/
	private $jalan_mukim;

	/**
	*
	* @var int
	*/
	private $status_mukim;

	/**
	*
	* @var int
	*/
	private $sesuai_ktp;

	/**
	*
	* @var int
	*/
	private $sesuai_ktp2;

	/**
	*
	* @var string
	*/
	private $faskes_mati;

	/**
	*
	* @var string
	*/
	private $tanggal_meninggal;

	/**
	*
	* @var string
	*/
	private $tempat_meninggal;

	/**
	*
	* @var string
	*/
	private $nama_tempat;

	/**
	*
	* @var string
	*/
	private $nmrkasus_kodeunik;

	/**
	*
	* @var int
	*/
	private $sudah;

	/**
	*
	* @var string
	*/
	private $masa;

	/**
	*
	* @var int
	*/
	private $rujukan;

	/**
	*
	* @var string
	*/
	private $baris;

	/**
	*
	* @var string
	*/
	private $status;

	/**
	*
	* @var int
	*/
	private $rekom;

	/**
	*
	* @var int
	*/
	private $orphan;

	/**
	*
	* @var string
	*/
	private $cod;

	/**
	*
	* @var string
	*/
	private $primer;

	/**
	*
	* @var string
	*/
	private $institusi;

	/**
	*
	* @var string
	*/
	private $verified;

	/**
	*
	* @var string
	*/
	private $final;

	/**
	*
	* @var string
	*/
	private $anulir;

	/**
	*
	* @var int
	*/
	private $valid;

    /**
     * @return string
     */
    public function getMsgID()
    {
        return $this->msgid;
    }

    /**
     * @param string $msgid
     *
     * @return self
     */
    public function setMsgID($msgid)
    {
        $this->msgid = $msgid;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnonim()
    {
        return $this->anonim;
    }

    /**
     * @param string $anonim
     *
     * @return self
     */
    public function setAnonim($anonim)
    {
        $this->anonim = $anonim;

        return $this;
    }

    /**
     * @return string
     */
    public function getKtp()
    {
        return $this->ktp;
    }

    /**
     * @param string $ktp
     *
     * @return self
     */
    public function setKtp($ktp)
    {
        $this->ktp = $ktp;

        return $this;
    }

    /**
     * @return string
     */
    public function getWarganegara()
    {
        return $this->warganegara;
    }

    /**
     * @param string $warganegara
     *
     * @return self
     */
    public function setWarganegara($warganegara)
    {
        $this->warganegara = $warganegara;

        return $this;
    }

    /**
     * @return string
     */
    public function getSelainKtp()
    {
        return $this->selain_ktp;
    }

    /**
     * @param string $selain_ktp
     *
     * @return self
     */
    public function setSelainKtp($selain_ktp)
    {
        $this->selain_ktp = $selain_ktp;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomorSelain()
    {
        return $this->nomor_selain;
    }

    /**
     * @param string $nomor_selain
     *
     * @return self
     */
    public function setNomorSelain($nomor_selain)
    {
        $this->nomor_selain = $nomor_selain;

        return $this;
    }

    /**
     * @return string
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param string $nama
     *
     * @return self
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * @return int
     */
    public function getMenikah()
    {
        return $this->menikah;
    }

    /**
     * @param int $menikah
     *
     * @return self
     */
    public function setMenikah($menikah)
    {
        $this->menikah = $menikah;

        return $this;
    }

    /**
     * @return int
     */
    public function getUmur()
    {
        return $this->umur;
    }

    /**
     * @param int $umur
     *
     * @return self
     */
    public function setUmur($umur)
    {
        $this->umur = $umur;

        return $this;
    }

    /**
     * @return int
     */
    public function getHamilKe()
    {
        return $this->hamil_ke;
    }

    /**
     * @param int $hamil_ke
     *
     * @return self
     */
    public function setHamilKe($hamil_ke)
    {
        $this->hamil_ke = $hamil_ke;

        return $this;
    }

    /**
     * @return int
     */
    public function getUsiaKehamilan()
    {
        return $this->usia_kehamilan;
    }

    /**
     * @param int $usia_kehamilan
     *
     * @return self
     */
    public function setUsiaKehamilan($usia_kehamilan)
    {
        $this->usia_kehamilan = $usia_kehamilan;

        return $this;
    }

    /**
     * @return string
     */
    public function getSebabKematian()
    {
        return $this->sebab_kematian;
    }

    /**
     * @param string $sebab_kematian
     *
     * @return self
     */
    public function setSebabKematian($sebab_kematian)
    {
        $this->sebab_kematian = $sebab_kematian;

        return $this;
    }

    /**
     * @return string
     */
    public function getDugaanLain()
    {
        return $this->dugaan_lain;
    }

    /**
     * @param string $dugaan_lain
     *
     * @return self
     */
    public function setDugaanLain($dugaan_lain)
    {
        $this->dugaan_lain = $dugaan_lain;

        return $this;
    }

    /**
     * Kabupaten/Kota Alamat Mati
     * @return string
     */
    public function getKabKota()
    {
        return $this->kab_kota;
    }

    /**
     * @return string
     */
    public function getKabKotaKtp()
    {
        return $this->kab_kota_ktp;
    }

    /**
     * @return string
     */
    public function getKabKotaSekarang()
    {
        return $this->kab_kota_sekarang;
    }

    /**
     * @return string
     */
    public function getDomisili()
    {
        return $this->domisili;
    }

    /**
     * @return string
     */
    public function getAlamatMati()
    {
        return $this->alamat_mati;
    }

    /**
     * @param string $alamat_mati
     *
     * @return self
     */
    public function setAlamatMati($alamat_mati)
    {
        $this->alamat_mati = $alamat_mati;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlamatKtp()
    {
        return $this->alamat_ktp;
    }

    /**
     * @param string $alamat_ktp
     *
     * @return self
     */
    public function setAlamatKtp($alamat_ktp)
    {
        $this->alamat_ktp = $alamat_ktp;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlamatMukim()
    {
        return $this->alamat_mukim;
    }

    /**
     * @param string $alamat_mukim
     *
     * @return self
     */
    public function setAlamatMukim($alamat_mukim)
    {
        $this->alamat_mukim = $alamat_mukim;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlamatSekarang()
    {
        return $this->alamat_sekarang;
    }

    /**
     * @param string $alamat_sekarang
     *
     * @return self
     */
    public function setAlamatSekarang($alamat_sekarang)
    {
        $this->alamat_sekarang = $alamat_sekarang;

        return $this;
    }

    /**
     * @return string
     */
    public function getRtKtp()
    {
        return $this->rt_ktp;
    }

    /**
     * @param string $rt_ktp
     *
     * @return self
     */
    public function setRtKtp($rt_ktp)
    {
        $this->rt_ktp = $rt_ktp;

        return $this;
    }

    /**
     * @return string
     */
    public function getRwKtp()
    {
        return $this->rw_ktp;
    }

    /**
     * @param string $rw_ktp
     *
     * @return self
     */
    public function setRwKtp($rw_ktp)
    {
        $this->rw_ktp = $rw_ktp;

        return $this;
    }

    /**
     * @return string
     */
    public function getJalanKtp()
    {
        return $this->jalan_ktp;
    }

    /**
     * @param string $jalan_ktp
     *
     * @return self
     */
    public function setJalanKtp($jalan_ktp)
    {
        $this->jalan_ktp = $jalan_ktp;

        return $this;
    }

    /**
     * @return string
     */
    public function getRtSekarang()
    {
        return $this->rt_sekarang;
    }

    /**
     * @param string $rt_sekarang
     *
     * @return self
     */
    public function setRtSekarang($rt_sekarang)
    {
        $this->rt_sekarang = $rt_sekarang;

        return $this;
    }

    /**
     * @return string
     */
    public function getRwSekarang()
    {
        return $this->rw_sekarang;
    }

    /**
     * @param string $rw_sekarang
     *
     * @return self
     */
    public function setRwSekarang($rw_sekarang)
    {
        $this->rw_sekarang = $rw_sekarang;

        return $this;
    }

    /**
     * @return string
     */
    public function getJalanSekarang()
    {
        return $this->jalan_sekarang;
    }

    /**
     * @param string $jalan_sekarang
     *
     * @return self
     */
    public function setJalanSekarang($jalan_sekarang)
    {
        $this->jalan_sekarang = $jalan_sekarang;

        return $this;
    }

    /**
     * @return string
     */
    public function getRtMukim()
    {
        return $this->rt_mukim;
    }

    /**
     * @param string $rt_mukim
     *
     * @return self
     */
    public function setRtMukim($rt_mukim)
    {
        $this->rt_mukim = $rt_mukim;

        return $this;
    }

    /**
     * @return string
     */
    public function getRwMukim()
    {
        return $this->rw_mukim;
    }

    /**
     * @param string $rw_mukim
     *
     * @return self
     */
    public function setRwMukim($rw_mukim)
    {
        $this->rw_mukim = $rw_mukim;

        return $this;
    }

    /**
     * @return string
     */
    public function getJalanMukim()
    {
        return $this->jalan_mukim;
    }

    /**
     * @param string $jalan_mukim
     *
     * @return self
     */
    public function setJalanMukim($jalan_mukim)
    {
        $this->jalan_mukim = $jalan_mukim;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusMukim()
    {
        return $this->status_mukim;
    }

    /**
     * @param int $status_mukim
     *
     * @return self
     */
    public function setStatusMukim($status_mukim)
    {
        $this->status_mukim = $status_mukim;

        return $this;
    }

    /**
     * @return int
     */
    public function getSesuaiKtp()
    {
        return $this->sesuai_ktp;
    }

    /**
     * @param int $sesuai_ktp
     *
     * @return self
     */
    public function setSesuaiKtp($sesuai_ktp)
    {
        $this->sesuai_ktp = $sesuai_ktp;

        return $this;
    }

    /**
     * @return int
     */
    public function getSesuaiKtp2()
    {
        return $this->sesuai_ktp2;
    }

    /**
     * @param int $sesuai_ktp2
     *
     * @return self
     */
    public function setSesuaiKtp2($sesuai_ktp2)
    {
        $this->sesuai_ktp2 = $sesuai_ktp2;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaskesMati()
    {
        return $this->faskes_mati;
    }

    /**
     * @param string $faskes_mati
     *
     * @return self
     */
    public function setFaskesMati($faskes_mati)
    {
        $this->faskes_mati = $faskes_mati;

        return $this;
    }

    /**
     * @return string
     */
    public function getTanggalMeninggal()
    {
        return $this->tanggal_meninggal;
    }

    /**
     * @param string $tanggal_meninggal
     *
     * @return self
     */
    public function setTanggalMeninggal($tanggal_meninggal)
    {
        $this->tanggal_meninggal = $tanggal_meninggal;

        return $this;
    }

    /**
     * @return string
     */
    public function getTempatMeninggal()
    {
        return $this->tempat_meninggal;
    }

    /**
     * @param string $tempat_meninggal
     *
     * @return self
     */
    public function setTempatMeninggal($tempat_meninggal)
    {
        $this->tempat_meninggal = $tempat_meninggal;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamaTempat()
    {
        return $this->nama_tempat;
    }

    /**
     * @param string $nama_tempat
     *
     * @return self
     */
    public function setNamaTempat($nama_tempat)
    {
        $this->nama_tempat = $nama_tempat;

        return $this;
    }

    /**
     * @return string
     */
    public function getNmrkasusKodeunik()
    {
        return $this->nmrkasus_kodeunik;
    }

    /**
     * @param string $nmrkasus_kodeunik
     *
     * @return self
     */
    public function setNmrkasusKodeunik($nmrkasus_kodeunik)
    {
        $this->nmrkasus_kodeunik = $nmrkasus_kodeunik;

        return $this;
    }

    /**
     * @return int
     */
    public function getSudah()
    {
        return $this->sudah;
    }

    /**
     * @return string
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * @param string $masa
     *
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;

        return $this;
    }

    /**
     * @return int
     */
    public function getRujukan()
    {
        return $this->rujukan;
    }

    /**
     * @param int $rujukan
     *
     * @return self
     */
    public function setRujukan($rujukan)
    {
        $this->rujukan = $rujukan;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaris()
    {
        return $this->baris;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getRekomendasi()
    {
        return $this->rekom;
    }

    /**
     * @param int $rekom
     *
     * @return self
     */
    public function setRekomendasi($rekom)
    {
        $this->rekom = $rekom;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrphan()
    {
        return $this->orphan;
    }

    /**
     * @return string
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * @param string $cod
     *
     * @return self
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrimer()
    {
        return $this->primer;
    }

    /**
     * @return string
     */
    public function getInstitusi()
    {
        return $this->institusi;
    }

    /**
     * @return string
     */
    public function getVerifiedDatetime()
    {
        return $this->verified;
    }

    /**
     * @return string
     */
    public function getFinalDatetime()
    {
        return $this->final;
    }

    /**
     * @return string
     */
    public function getAnnulledDatetime()
    {
        return $this->anulir;
    }

    /**
     * @return int
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * @param int $valid
     *
     * @return self
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }
}