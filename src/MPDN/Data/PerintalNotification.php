<?php

namespace MPDN\Data;

use MPDN\Data;

/**
 * Perinatal Death Notification data structure
 */
class PerinatalNotification extends Data
{
	
	protected $incomingMap = [
		'id' => 'id',
		'created' => 'dibuat',
		'registrar' => 'uid',
        'originid' => 'originid',
        'msgid' => 'msgid',
		'anonim' => 'anonim',
		'nikanak' => 'nikanak',
		'namaanak' => 'namaanak',
		'nikibu' => 'nikibu',
		'warganegaraibu' => 'warganegaraibu',
		'selain_nikibu' => 'selain_nikibu',
		'nomoribu_selain' => 'nomoribu_selain',
		'namaibu' => 'namaibu',
		'umur' => 'umur',
		'nikayah' => 'nikayah',
		'namaayah' => 'namaayah',
		'umurayah' => 'umurayah',
		'kab_kota_lahir' => 'kab_kota_lahir',
		'kab_kota' => 'kab_kota',
		'kab_kota_ktp' => 'kab_kota_ktp',
		'kab_kota_sekarang' => 'kab_kota_sekarang',
		'domisili' => 'domisili',
		'alamat_mati' => 'alamat_mati',
		'alamat_ktp' => 'alamat_ktp',
		'alamat_mukim' => 'alamat_mukim',
		'alamat_sekarang' => 'alamat_sekarang',
		'alamat_ayah' => 'alamat_ayah',
		'alamat_lahir' => 'alamat_lahir',
		'rt_ktp' => 'rt_ktp',
		'rw_ktp' => 'rw_ktp',
		'jalan_ktp' => 'jalan_ktp',
		'rt_sekarang' => 'rt_sekarang',
		'rw_sekarang' => 'rw_sekarang',
		'jalan_sekarang' => 'jalan_sekarang',
		'rt_mukim' => 'rt_mukim',
		'rw_mukim' => 'rw_mukim',
		'jalan_mukim' => 'jalan_mukim',
		'rt_ayah' => 'rt_ayah',
		'rw_ayah' => 'rw_ayah',
		'jalan_ayah' => 'jalan_ayah',
		'status_mukim' => 'status_mukim',
		'sesuai_ktp' => 'sesuai_ktp',
		'sesuai_ktp2' => 'sesuai_ktp2',
		'sesuai_ktp_ayah' => 'sesuai_ktp_ayah',
		'faskes_lahir' => 'faskes_lahir',
		'faskes_mati' => 'faskes_mati',
		'tanggal_meninggal' => 'tanggal_meninggal',
		'jam_meninggal' => 'jam_meninggal',
		'usia_meninggal' => 'usia_meninggal',
		'tempat_meninggal' => 'tempat_meninggal',
		'nama_tempat' => 'nama_tempat',
		'nomor_tempat' => 'nomor_tempat',
		'petugas_mati_nama' => 'petugas_mati_nama',
		'petugas_mati_nomor' => 'petugas_mati_nomor',
		'nmrkasus_kodeunik' => 'nmrkasus_kodeunik',
		'sebab_kematian' => 'sebab_kematian',
		'dugaan_lain' => 'dugaan_lain',
		'gejala' => 'gejala',
		'gejala_lain' => 'gejala_lain',
		'hpht' => 'hpht',
		'anc_bidan' => 'anc_bidan',
		'anc_dokter' => 'anc_dokter',
		'anc_spog' => 'anc_spog',
		'tanggal_lahir' => 'tanggal_lahir',
		'jam_lahir' => 'jam_lahir',
		'cara_persalinan' => 'cara_persalinan',
		'hamil_ke' => 'hamil_ke',
		'usia_kehamilan' => 'usia_kehamilan',
		'ganda' => 'ganda',
		'urutan_ke' => 'urutan_ke',
		'lahir_mati' => 'lahir_mati',
		'masa' => 'masa',
		'pulang' => 'pulang',
		'kondisi_lahir' => 'kondisi_lahir',
		'maserasi' => 'maserasi',
		'ketuban' => 'ketuban',
		'cacat' => 'cacat',
		'berat_lahir' => 'berat_lahir',
		'berat_mati' => 'berat_mati',
		'panjang_lahir' => 'panjang_lahir',
		'lingkar_kepala' => 'lingkar_kepala',
		'jenis_kelamin' => 'jenis_kelamin',
		'penolong' => 'penolong',
		'penolong_lain' => 'penolong_lain',
		'penyulit_obst' => 'penyulit_obst',
		'penyulit_nobst' => 'penyulit_nobst',
		'penyulit_persalinan' => 'penyulit_persalinan',
		'imd' => 'imd',
		'tempat_lahir' => 'tempat_lahir',
		'tempat_lahir_nama' => 'tempat_lahir_nama',
		'tempat_lahir_nomor' => 'tempat_lahir_nomor',
		'petugas_lahir_nama' => 'petugas_lahir_nama',
		'petugas_lahir_nomor' => 'petugas_lahir_nomor',
		'rujukan' => 'rujukan',
		'baris' => 'baris',
		'status' => 'status',
		'rekom' => 'rekom',
		'orphan' => 'orphan',
		'primer' => 'primer',
		'dxantara' => 'dxantara',
		'dxdasar' => 'dxdasar',
		'kondisi_lain' => 'kondisi_lain',
		'institusi' => 'institusi',
		'verified' => 'verified',
		'final' => 'final',
		'anulir' => 'anulir',
    ];

    protected $outgoingMap = [
        'originid' => 'originid',
    	'msgid' => 'msgid',
		'anonim' => 'anonim',
		'nikanak' => 'nikanak',
		'namaanak' => 'namaanak',
		'nikibu' => 'ktp',
		'warganegaraibu' => 'warganegaraibu',
		'selain_nikibu' => 'selain_nikibu',
		'nomoribu_selain' => 'nomoribu_selain',
		'namaibu' => 'namaibu',
		'umur' => 'umur',
		'nikayah' => 'ktpayah',
		'namaayah' => 'namaayah',
		'umurayah' => 'umurayah',
		'kab_kota_lahir' => 'kab_kota_lahir',
		'kab_kota' => 'kab_kota',
		'kab_kota_ktp' => 'kab_kota_ktp',
		'kab_kota_sekarang' => 'kab_kota_sekarang',
		'domisili' => 'domisili',
		'alamat_mati' => 'alamat_mati',
		'alamat_ktp' => 'alamat_ktp',
		'alamat_mukim' => 'alamat_mukim',
		'alamat_sekarang' => 'alamat_sekarang',
		'alamat_ayah' => 'alamat_ayah',
		'alamat_lahir' => 'alamat_lahir',
		'rt_ktp' => 'rt_ktp',
		'rw_ktp' => 'rw_ktp',
		'jalan_ktp' => 'jalan_ktp',
		'rt_sekarang' => 'rt_sekarang',
		'rw_sekarang' => 'rw_sekarang',
		'jalan_sekarang' => 'jalan_sekarang',
		'rt_mukim' => 'rt_mukim',
		'rw_mukim' => 'rw_mukim',
		'jalan_mukim' => 'jalan_mukim',
		'rt_ayah' => 'rt_ayah',
		'rw_ayah' => 'rw_ayah',
		'jalan_ayah' => 'jalan_ayah',
		'status_mukim' => 'status_mukim',
		'sesuai_ktp' => 'sesuai_ktp',
		'sesuai_ktp2' => 'sesuai_ktp2',
		'sesuai_ktp_ayah' => 'sesuai_ktp_ayah',
		'faskes_lahir' => 'faskes_lahir',
		'faskes_mati' => 'faskes_mati',
		'tanggal_meninggal' => 'tanggal_meninggal',
		'jam_meninggal' => 'jam_meninggal',
		'usia_meninggal' => 'usia_meninggal',
		'tempat_meninggal' => 'tempat_meninggal',
		'nama_tempat' => 'nama_tempat',
		'nomor_tempat' => 'nomor_tempat',
		'petugas_mati_nama' => 'petugas_mati_nama',
		'petugas_mati_nomor' => 'petugas_mati_nomor',
		'nmrkasus_kodeunik' => 'nmrkasus_kodeunik',
		'sebab_kematian' => 'sebab_kematian',
		'dugaan_lain' => 'dugaan_lain',
		'gejala' => 'gejala',
		'gejala_lain' => 'gejala_lain',
		'hpht' => 'hpht',
		'anc_bidan' => 'anc_bidan',
		'anc_dokter' => 'anc_dokter',
		'anc_spog' => 'anc_spog',
		'tanggal_lahir' => 'tanggal_lahir',
		'jam_lahir' => 'jam_lahir',
		'cara_persalinan' => 'cara_persalinan',
		'hamil_ke' => 'hamil_ke',
		'usia_kehamilan' => 'usia_kehamilan',
		'ganda' => 'ganda',
		'urutan_ke' => 'urutan_ke',
		'lahir_mati' => 'lahir_mati',
		'masa' => 'masa',
		'pulang' => 'pulang',
		'kondisi_lahir' => 'kondisi_lahir',
		'maserasi' => 'maserasi',
		'ketuban' => 'ketuban',
		'cacat' => 'cacat',
		'berat_lahir' => 'berat_lahir',
		'berat_mati' => 'berat_mati',
		'panjang_lahir' => 'panjang_lahir',
		'lingkar_kepala' => 'lingkar_kepala',
		'jenis_kelamin' => 'jenis_kelamin',
		'penolong' => 'penolong',
		'penolong_lain' => 'penolong_lain',
		'penyulit_obst' => 'penyulit_obst',
		'penyulit_nobst' => 'penyulit_nobst',
		'penyulit_persalinan' => 'penyulit_persalinan',
		'imd' => 'imd',
		'tempat_lahir' => 'tempat_lahir',
		'tempat_lahir_nama' => 'tempat_lahir_nama',
		'tempat_lahir_nomor' => 'tempat_lahir_nomor',
		'petugas_lahir_nama' => 'petugas_lahir_nama',
		'petugas_lahir_nomor' => 'petugas_lahir_nomor',
		'rujukan' => 'rujukan',
		'rekom' => 'rekomendasi',
		'primer' => 'primer',
		'dxantara' => 'dxantara',
		'dxdasar' => 'dxdasar',
		'kondisi_lain' => 'kondisi_lain',
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
	private $nikanak;

	/**
	*
	* @var string
	*/
	private $namaanak;

	/**
	*
	* @var string
	*/
	private $nikibu;

	/**
	*
	* @var string
	*/
	private $warganegaraibu;

	/**
	*
	* @var string
	*/
	private $selain_nikibu;

	/**
	*
	* @var string
	*/
	private $nomoribu_selain;

	/**
	*
	* @var string
	*/
	private $namaibu;

	/**
	*
	* @var int
	*/
	private $umur;

	/**
	*
	* @var string
	*/
	private $nikayah;

	/**
	*
	* @var string
	*/
	private $namaayah;

	/**
	*
	* @var int
	*/
	private $umurayah;

	/**
	*
	* @var string
	*/
	private $kab_kota_lahir;

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
	private $alamat_ayah;

	/**
	*
	* @var string
	*/
	private $alamat_lahir;

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
	* @var string
	*/
	private $rt_ayah;

	/**
	*
	* @var string
	*/
	private $rw_ayah;

	/**
	*
	* @var string
	*/
	private $jalan_ayah;

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
	* @var int
	*/
	private $sesuai_ktp_ayah;

	/**
	*
	* @var string
	*/
	private $faskes_lahir;

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
	* @var TIME
	*/
	private $jam_meninggal;
	/**
	*
	* @var int
	*/
	private $usia_meninggal;

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
	private $nomor_tempat;

	/**
	*
	* @var string
	*/
	private $petugas_mati_nama;

	/**
	*
	* @var string
	*/
	private $petugas_mati_nomor;

	/**
	*
	* @var string
	*/
	private $nmrkasus_kodeunik;

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
	private $gejala;

	/**
	*
	* @var string
	*/
	private $gejala_lain;

	/**
	*
	* @var string
	*/
	private $hpht;

	/**
	*
	* @var int
	*/
	private $anc_bidan;

	/**
	*
	* @var int
	*/
	private $anc_dokter;

	/**
	*
	* @var int
	*/
	private $anc_spog;

	/**
	*
	* @var string
	*/
	private $tanggal_lahir;

	/**
	*
	* @var TIME
	*/
	private $jam_lahir;
	/**
	*
	* @var string
	*/
	private $cara_persalinan;

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
	* @var int
	*/
	private $ganda;

	/**
	*
	* @var int
	*/
	private $urutan_ke;

	/**
	*
	* @var int
	*/
	private $lahir_mati;

	/**
	*
	* @var string
	*/
	private $masa;

	/**
	*
	* @var int
	*/
	private $pulang;

	/**
	*
	* @var string
	*/
	private $kondisi_lahir;

	/**
	*
	* @var int
	*/
	private $maserasi;

	/**
	*
	* @var string
	*/
	private $ketuban;

	/**
	*
	* @var string
	*/
	private $cacat;

	/**
	*
	* @var int
	*/
	private $berat_lahir;

	/**
	*
	* @var int
	*/
	private $berat_mati;

	/**
	*
	* @var int
	*/
	private $panjang_lahir;

	/**
	*
	* @var int
	*/
	private $lingkar_kepala;

	/**
	*
	* @var string
	*/
	private $jenis_kelamin;

	/**
	*
	* @var string
	*/
	private $penolong;

	/**
	*
	* @var string
	*/
	private $penolong_lain;

	/**
	*
	* @var string
	*/
	private $penyulit_obst;

	/**
	*
	* @var string
	*/
	private $penyulit_nobst;

	/**
	*
	* @var string
	*/
	private $penyulit_persalinan;

	/**
	*
	* @var int
	*/
	private $imd;

	/**
	*
	* @var string
	*/
	private $tempat_lahir;

	/**
	*
	* @var string
	*/
	private $tempat_lahir_nama;

	/**
	*
	* @var string
	*/
	private $tempat_lahir_nomor;

	/**
	*
	* @var string
	*/
	private $petugas_lahir_nama;

	/**
	*
	* @var string
	*/
	private $petugas_lahir_nomor;

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
	private $primer;

	/**
	*
	* @var string
	*/
	private $dxantara;

	/**
	*
	* @var string
	*/
	private $dxdasar;

	/**
	*
	* @var string
	*/
	private $kondisi_lain;

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
    public function getNikanak()
    {
        return $this->nikanak;
    }

    /**
     * @param string $nikanak
     *
     * @return self
     */
    public function setNikanak($nikanak)
    {
        $this->nikanak = $nikanak;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamaanak()
    {
        return $this->namaanak;
    }

    /**
     * @param string $namaanak
     *
     * @return self
     */
    public function setNamaanak($namaanak)
    {
        $this->namaanak = $namaanak;

        return $this;
    }

    /**
     * @return string
     */
    public function getNikibu()
    {
        return $this->nikibu;
    }

    /**
     * @param string $nikibu
     *
     * @return self
     */
    public function setNikibu($nikibu)
    {
        $this->nikibu = $nikibu;

        return $this;
    }

    /**
     * @return string
     */
    public function getWarganegaraibu()
    {
        return $this->warganegaraibu;
    }

    /**
     * @param string $warganegaraibu
     *
     * @return self
     */
    public function setWarganegaraibu($warganegaraibu)
    {
        $this->warganegaraibu = $warganegaraibu;

        return $this;
    }

    /**
     * @return string
     */
    public function getSelainNikibu()
    {
        return $this->selain_nikibu;
    }

    /**
     * @param string $selain_nikibu
     *
     * @return self
     */
    public function setSelainNikibu($selain_nikibu)
    {
        $this->selain_nikibu = $selain_nikibu;

        return $this;
    }

    /**
     * @return string
     */
    public function getNomoribuSelain()
    {
        return $this->nomoribu_selain;
    }

    /**
     * @param string $nomoribu_selain
     *
     * @return self
     */
    public function setNomoribuSelain($nomoribu_selain)
    {
        $this->nomoribu_selain = $nomoribu_selain;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamaibu()
    {
        return $this->namaibu;
    }

    /**
     * @param string $namaibu
     *
     * @return self
     */
    public function setNamaibu($namaibu)
    {
        $this->namaibu = $namaibu;

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
     * @return string
     */
    public function getNikayah()
    {
        return $this->nikayah;
    }

    /**
     * @param string $nikayah
     *
     * @return self
     */
    public function setNikayah($nikayah)
    {
        $this->nikayah = $nikayah;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamaayah()
    {
        return $this->namaayah;
    }

    /**
     * @param string $namaayah
     *
     * @return self
     */
    public function setNamaayah($namaayah)
    {
        $this->namaayah = $namaayah;

        return $this;
    }

    /**
     * @return int
     */
    public function getUmurayah()
    {
        return $this->umurayah;
    }

    /**
     * @param int $umurayah
     *
     * @return self
     */
    public function setUmurayah($umurayah)
    {
        $this->umurayah = $umurayah;

        return $this;
    }

    /**
     * @return string
     */
    public function getKabKotaLahir()
    {
        return $this->kab_kota_lahir;
    }

    /**
     * @param string $kab_kota_lahir
     *
     * @return self
     */
    public function setKabKotaLahir($kab_kota_lahir)
    {
        $this->kab_kota_lahir = $kab_kota_lahir;

        return $this;
    }

    /**
     * @return string
     */
    public function getKabKota()
    {
        return $this->kab_kota;
    }

    /**
     * @param string $kab_kota
     *
     * @return self
     */
    public function setKabKota($kab_kota)
    {
        $this->kab_kota = $kab_kota;

        return $this;
    }

    /**
     * @return string
     */
    public function getKabKotaKtp()
    {
        return $this->kab_kota_ktp;
    }

    /**
     * @param string $kab_kota_ktp
     *
     * @return self
     */
    public function setKabKotaKtp($kab_kota_ktp)
    {
        $this->kab_kota_ktp = $kab_kota_ktp;

        return $this;
    }

    /**
     * @return string
     */
    public function getKabKotaSekarang()
    {
        return $this->kab_kota_sekarang;
    }

    /**
     * @param string $kab_kota_sekarang
     *
     * @return self
     */
    public function setKabKotaSekarang($kab_kota_sekarang)
    {
        $this->kab_kota_sekarang = $kab_kota_sekarang;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomisili()
    {
        return $this->domisili;
    }

    /**
     * @param string $domisili
     *
     * @return self
     */
    public function setDomisili($domisili)
    {
        $this->domisili = $domisili;

        return $this;
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
    public function getAlamatAyah()
    {
        return $this->alamat_ayah;
    }

    /**
     * @param string $alamat_ayah
     *
     * @return self
     */
    public function setAlamatAyah($alamat_ayah)
    {
        $this->alamat_ayah = $alamat_ayah;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlamatLahir()
    {
        return $this->alamat_lahir;
    }

    /**
     * @param string $alamat_lahir
     *
     * @return self
     */
    public function setAlamatLahir($alamat_lahir)
    {
        $this->alamat_lahir = $alamat_lahir;

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
     * @return string
     */
    public function getRtAyah()
    {
        return $this->rt_ayah;
    }

    /**
     * @param string $rt_ayah
     *
     * @return self
     */
    public function setRtAyah($rt_ayah)
    {
        $this->rt_ayah = $rt_ayah;

        return $this;
    }

    /**
     * @return string
     */
    public function getRwAyah()
    {
        return $this->rw_ayah;
    }

    /**
     * @param string $rw_ayah
     *
     * @return self
     */
    public function setRwAyah($rw_ayah)
    {
        $this->rw_ayah = $rw_ayah;

        return $this;
    }

    /**
     * @return string
     */
    public function getJalanAyah()
    {
        return $this->jalan_ayah;
    }

    /**
     * @param string $jalan_ayah
     *
     * @return self
     */
    public function setJalanAyah($jalan_ayah)
    {
        $this->jalan_ayah = $jalan_ayah;

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
     * @return int
     */
    public function getSesuaiKtpAyah()
    {
        return $this->sesuai_ktp_ayah;
    }

    /**
     * @param int $sesuai_ktp_ayah
     *
     * @return self
     */
    public function setSesuaiKtpAyah($sesuai_ktp_ayah)
    {
        $this->sesuai_ktp_ayah = $sesuai_ktp_ayah;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaskesLahir()
    {
        return $this->faskes_lahir;
    }

    /**
     * @param string $faskes_lahir
     *
     * @return self
     */
    public function setFaskesLahir($faskes_lahir)
    {
        $this->faskes_lahir = $faskes_lahir;

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
     * @return TIME
     */
    public function getJamMeninggal()
    {
        return $this->jam_meninggal;
    }

    /**
     * @param TIME $jam_meninggal
     *
     * @return self
     */
    public function setJamMeninggal(TIME $jam_meninggal)
    {
        $this->jam_meninggal = $jam_meninggal;

        return $this;
    }

    /**
     * @return int
     */
    public function getUsiaMeninggal()
    {
        return $this->usia_meninggal;
    }

    /**
     * @param int $usia_meninggal
     *
     * @return self
     */
    public function setUsiaMeninggal($usia_meninggal)
    {
        $this->usia_meninggal = $usia_meninggal;

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
    public function getNomorTempat()
    {
        return $this->nomor_tempat;
    }

    /**
     * @param string $nomor_tempat
     *
     * @return self
     */
    public function setNomorTempat($nomor_tempat)
    {
        $this->nomor_tempat = $nomor_tempat;

        return $this;
    }

    /**
     * @return string
     */
    public function getPetugasMatiNama()
    {
        return $this->petugas_mati_nama;
    }

    /**
     * @param string $petugas_mati_nama
     *
     * @return self
     */
    public function setPetugasMatiNama($petugas_mati_nama)
    {
        $this->petugas_mati_nama = $petugas_mati_nama;

        return $this;
    }

    /**
     * @return string
     */
    public function getPetugasMatiNomor()
    {
        return $this->petugas_mati_nomor;
    }

    /**
     * @param string $petugas_mati_nomor
     *
     * @return self
     */
    public function setPetugasMatiNomor($petugas_mati_nomor)
    {
        $this->petugas_mati_nomor = $petugas_mati_nomor;

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
     * @return string
     */
    public function getGejala()
    {
        return $this->gejala;
    }

    /**
     * @param string $gejala
     *
     * @return self
     */
    public function setGejala($gejala)
    {
        $this->gejala = $gejala;

        return $this;
    }

    /**
     * @return string
     */
    public function getGejalaLain()
    {
        return $this->gejala_lain;
    }

    /**
     * @param string $gejala_lain
     *
     * @return self
     */
    public function setGejalaLain($gejala_lain)
    {
        $this->gejala_lain = $gejala_lain;

        return $this;
    }

    /**
     * @return string
     */
    public function getHpht()
    {
        return $this->hpht;
    }

    /**
     * @param string $hpht
     *
     * @return self
     */
    public function setHpht($hpht)
    {
        $this->hpht = $hpht;

        return $this;
    }

    /**
     * @return int
     */
    public function getAncBidan()
    {
        return $this->anc_bidan;
    }

    /**
     * @param int $anc_bidan
     *
     * @return self
     */
    public function setAncBidan($anc_bidan)
    {
        $this->anc_bidan = $anc_bidan;

        return $this;
    }

    /**
     * @return int
     */
    public function getAncDokter()
    {
        return $this->anc_dokter;
    }

    /**
     * @param int $anc_dokter
     *
     * @return self
     */
    public function setAncDokter($anc_dokter)
    {
        $this->anc_dokter = $anc_dokter;

        return $this;
    }

    /**
     * @return int
     */
    public function getAncSpog()
    {
        return $this->anc_spog;
    }

    /**
     * @param int $anc_spog
     *
     * @return self
     */
    public function setAncSpog($anc_spog)
    {
        $this->anc_spog = $anc_spog;

        return $this;
    }

    /**
     * @return string
     */
    public function getTanggalLahir()
    {
        return $this->tanggal_lahir;
    }

    /**
     * @param string $tanggal_lahir
     *
     * @return self
     */
    public function setTanggalLahir($tanggal_lahir)
    {
        $this->tanggal_lahir = $tanggal_lahir;

        return $this;
    }

    /**
     * @return TIME
     */
    public function getJamLahir()
    {
        return $this->jam_lahir;
    }

    /**
     * @param TIME $jam_lahir
     *
     * @return self
     */
    public function setJamLahir(TIME $jam_lahir)
    {
        $this->jam_lahir = $jam_lahir;

        return $this;
    }

    /**
     * @return string
     */
    public function getCaraPersalinan()
    {
        return $this->cara_persalinan;
    }

    /**
     * @param string $cara_persalinan
     *
     * @return self
     */
    public function setCaraPersalinan($cara_persalinan)
    {
        $this->cara_persalinan = $cara_persalinan;

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
     * @return int
     */
    public function getGanda()
    {
        return $this->ganda;
    }

    /**
     * @param int $ganda
     *
     * @return self
     */
    public function setGanda($ganda)
    {
        $this->ganda = $ganda;

        return $this;
    }

    /**
     * @return int
     */
    public function getUrutanKe()
    {
        return $this->urutan_ke;
    }

    /**
     * @param int $urutan_ke
     *
     * @return self
     */
    public function setUrutanKe($urutan_ke)
    {
        $this->urutan_ke = $urutan_ke;

        return $this;
    }

    /**
     * @return int
     */
    public function getLahirMati()
    {
        return $this->lahir_mati;
    }

    /**
     * @param int $lahir_mati
     *
     * @return self
     */
    public function setLahirMati($lahir_mati)
    {
        $this->lahir_mati = $lahir_mati;

        return $this;
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
    public function getPulang()
    {
        return $this->pulang;
    }

    /**
     * @param int $pulang
     *
     * @return self
     */
    public function setPulang($pulang)
    {
        $this->pulang = $pulang;

        return $this;
    }

    /**
     * @return string
     */
    public function getKondisiLahir()
    {
        return $this->kondisi_lahir;
    }

    /**
     * @param string $kondisi_lahir
     *
     * @return self
     */
    public function setKondisiLahir($kondisi_lahir)
    {
        $this->kondisi_lahir = $kondisi_lahir;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaserasi()
    {
        return $this->maserasi;
    }

    /**
     * @param int $maserasi
     *
     * @return self
     */
    public function setMaserasi($maserasi)
    {
        $this->maserasi = $maserasi;

        return $this;
    }

    /**
     * @return string
     */
    public function getKetuban()
    {
        return $this->ketuban;
    }

    /**
     * @param string $ketuban
     *
     * @return self
     */
    public function setKetuban($ketuban)
    {
        $this->ketuban = $ketuban;

        return $this;
    }

    /**
     * @return string
     */
    public function getCacat()
    {
        return $this->cacat;
    }

    /**
     * @param string $cacat
     *
     * @return self
     */
    public function setCacat($cacat)
    {
        $this->cacat = $cacat;

        return $this;
    }

    /**
     * @return int
     */
    public function getBeratLahir()
    {
        return $this->berat_lahir;
    }

    /**
     * @param int $berat_lahir
     *
     * @return self
     */
    public function setBeratLahir($berat_lahir)
    {
        $this->berat_lahir = $berat_lahir;

        return $this;
    }

    /**
     * @return int
     */
    public function getBeratMati()
    {
        return $this->berat_mati;
    }

    /**
     * @param int $berat_mati
     *
     * @return self
     */
    public function setBeratMati($berat_mati)
    {
        $this->berat_mati = $berat_mati;

        return $this;
    }

    /**
     * @return int
     */
    public function getPanjangLahir()
    {
        return $this->panjang_lahir;
    }

    /**
     * @param int $panjang_lahir
     *
     * @return self
     */
    public function setPanjangLahir($panjang_lahir)
    {
        $this->panjang_lahir = $panjang_lahir;

        return $this;
    }

    /**
     * @return int
     */
    public function getLingkarKepala()
    {
        return $this->lingkar_kepala;
    }

    /**
     * @param int $lingkar_kepala
     *
     * @return self
     */
    public function setLingkarKepala($lingkar_kepala)
    {
        $this->lingkar_kepala = $lingkar_kepala;

        return $this;
    }

    /**
     * @return string
     */
    public function getJenisKelamin()
    {
        return $this->jenis_kelamin;
    }

    /**
     * @param string $jenis_kelamin
     *
     * @return self
     */
    public function setJenisKelamin($jenis_kelamin)
    {
        $this->jenis_kelamin = $jenis_kelamin;

        return $this;
    }

    /**
     * @return string
     */
    public function getPenolong()
    {
        return $this->penolong;
    }

    /**
     * @param string $penolong
     *
     * @return self
     */
    public function setPenolong($penolong)
    {
        $this->penolong = $penolong;

        return $this;
    }

    /**
     * @return string
     */
    public function getPenolongLain()
    {
        return $this->penolong_lain;
    }

    /**
     * @param string $penolong_lain
     *
     * @return self
     */
    public function setPenolongLain($penolong_lain)
    {
        $this->penolong_lain = $penolong_lain;

        return $this;
    }

    /**
     * @return string
     */
    public function getPenyulitObst()
    {
        return $this->penyulit_obst;
    }

    /**
     * @param string $penyulit_obst
     *
     * @return self
     */
    public function setPenyulitObst($penyulit_obst)
    {
        $this->penyulit_obst = $penyulit_obst;

        return $this;
    }

    /**
     * @return string
     */
    public function getPenyulitNobst()
    {
        return $this->penyulit_nobst;
    }

    /**
     * @param string $penyulit_nobst
     *
     * @return self
     */
    public function setPenyulitNobst($penyulit_nobst)
    {
        $this->penyulit_nobst = $penyulit_nobst;

        return $this;
    }

    /**
     * @return string
     */
    public function getPenyulitPersalinan()
    {
        return $this->penyulit_persalinan;
    }

    /**
     * @param string $penyulit_persalinan
     *
     * @return self
     */
    public function setPenyulitPersalinan($penyulit_persalinan)
    {
        $this->penyulit_persalinan = $penyulit_persalinan;

        return $this;
    }

    /**
     * @return int
     */
    public function getImd()
    {
        return $this->imd;
    }

    /**
     * @param int $imd
     *
     * @return self
     */
    public function setImd($imd)
    {
        $this->imd = $imd;

        return $this;
    }

    /**
     * @return string
     */
    public function getTempatLahir()
    {
        return $this->tempat_lahir;
    }

    /**
     * @param string $tempat_lahir
     *
     * @return self
     */
    public function setTempatLahir($tempat_lahir)
    {
        $this->tempat_lahir = $tempat_lahir;

        return $this;
    }

    /**
     * @return string
     */
    public function getTempatLahirNama()
    {
        return $this->tempat_lahir_nama;
    }

    /**
     * @param string $tempat_lahir_nama
     *
     * @return self
     */
    public function setTempatLahirNama($tempat_lahir_nama)
    {
        $this->tempat_lahir_nama = $tempat_lahir_nama;

        return $this;
    }

    /**
     * @return string
     */
    public function getTempatLahirNomor()
    {
        return $this->tempat_lahir_nomor;
    }

    /**
     * @param string $tempat_lahir_nomor
     *
     * @return self
     */
    public function setTempatLahirNomor($tempat_lahir_nomor)
    {
        $this->tempat_lahir_nomor = $tempat_lahir_nomor;

        return $this;
    }

    /**
     * @return string
     */
    public function getPetugasLahirNama()
    {
        return $this->petugas_lahir_nama;
    }

    /**
     * @param string $petugas_lahir_nama
     *
     * @return self
     */
    public function setPetugasLahirNama($petugas_lahir_nama)
    {
        $this->petugas_lahir_nama = $petugas_lahir_nama;

        return $this;
    }

    /**
     * @return string
     */
    public function getPetugasLahirNomor()
    {
        return $this->petugas_lahir_nomor;
    }

    /**
     * @param string $petugas_lahir_nomor
     *
     * @return self
     */
    public function setPetugasLahirNomor($petugas_lahir_nomor)
    {
        $this->petugas_lahir_nomor = $petugas_lahir_nomor;

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
    public function getPrimer()
    {
        return $this->primer;
    }

    /**
     * @param string $primer
     *
     * @return self
     */
    public function setPrimer($primer)
    {
        $this->primer = $primer;

        return $this;
    }

    /**
     * @return string
     */
    public function getDxantara()
    {
        return $this->dxantara;
    }

    /**
     * @param string $dxantara
     *
     * @return self
     */
    public function setDxantara($dxantara)
    {
        $this->dxantara = $dxantara;

        return $this;
    }

    /**
     * @return string
     */
    public function getDxdasar()
    {
        return $this->dxdasar;
    }

    /**
     * @param string $dxdasar
     *
     * @return self
     */
    public function setDxdasar($dxdasar)
    {
        $this->dxdasar = $dxdasar;

        return $this;
    }

    /**
     * @return string
     */
    public function getKondisiLain()
    {
        return $this->kondisi_lain;
    }

    /**
     * @param string $kondisi_lain
     *
     * @return self
     */
    public function setKondisiLain($kondisi_lain)
    {
        $this->kondisi_lain = $kondisi_lain;

        return $this;
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