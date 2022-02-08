<?php

namespace MPDN\Notification;

use InvalidArgumentException;
use MPDN\Exception\ApiException;
use MPDN\MPDN;
use MPDN\Operation\UserOperation;

/**
 * Operation for Perinatal Death Notification
 */

class Perinatal extends UserOperation {

    /**
     * Perinatal Death Notification list.
     *
     * @param string $type   [required] Type of list. Must be one of
     *                          MPDN::TYPE_ALAMAT_DOMISILI, MPDN::TYPE_ALAMAT_KTP, 
     *                          MPDN::TYPE_ALAMAT_MATI or MPDN::TYPE_ALAMAT_LAHIR
     * @param string|array   $periode  [required] Time periode of data. 
     *                          For string format ex:
     *                             '2021-12' for full month, or 
     *                             '2021' full year
     *                          For array fromat ex:
     *                             [
     *                                'mulai'   => 'YYYY-MM-DD H:i:s',
     *                                'selesai' => 'YYYY-MM-DD H:i:s'
     *                             ]
     * @param string $target [optional] ID of Province/Regency/District/Desa/Kelurahan of target data. Must be follow format
     *                                  AA.BB.CC.DDDD. AA = 2-digit ID Province, BB = 2-digit ID Regency
     *                                  CC = 2-digit ID District, DDDD = 4-digit ID Desa/Kelurahan
     * 
     * @return array
     * @throws ApiException
     */
    public function list($type, $periode, $target = null)
    {
        if (in_array($type, [MPDN::TYPE_ALAMAT_MATI, MPDN::TYPE_ALAMAT_DOMISILI, 
                            MPDN::TYPE_ALAMAT_KTP, MPDN::TYPE_ALAMAT_LAHIR]
                        ))
        {
            throw new InvalidArgumentException('List type not defined', 800);
        }

        $data['alamat']  = $type;
        $data['periode'] = $periode;
        $data['target']  = $target;

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/daftar';
        $this->params = $data;

        return $this->execute();
    }

    /**
     * Request for metadata for form new.
     * 
     * @return array
     * @throws ApiException
     */
    public function requestNew()
    {
        $this->method = 'GET';
        $this->url = 'mpdn/bayi/token/baru';

        return $this->execute();
    }

    /**
     * Request for metadata for form edit.
     * 
     * @param string $id [required] ID of specific data requested
     * 
     * @return array
     * @throws ApiException
     */
    public function requestEdit($id)
    {
        if (empty($id))
        {
            throw new InvalidArgumentException('Request for editing form required data id to be suplied', 801);
        }

        $this->method = 'GET';
        $this->url    = 'mpdn/bayi/token/edit/' . $id;

        return $this->execute();
    }

    /**
     * Create new Perinatal Death Notification data
     *
     * @param array  $data  [required] Perinatal Death Notification data
     * @param string $token [optional] form token for create new data Perinatal Nofitication. If token is null, token otomatic generated
     * 
     * @return array
     * @throws ApiException
     */
    public function create($data, $token = null)
    {
        if (empty($data))
        {
            throw new InvalidArgumentException('Empty data not allowed', 802);
        }

        if (empty($token))
        {
            $metadata = $this->requestNew();
            $token = $metadata['token'];
        }

        $data['token'] = $token;

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/lapor';
        $this->params = $data;

        return $this->execute();
    }

    /**
     * Edit existing Perinatal Death Notification data
     *
     * @param array  $data  [required] Perinatal Death Notification data
     * @param string $token [optional] form token for create new data Perinatal Nofitication. 
     *                      If token is null, token otomatic generated based on suplied $id
     * @param string $id    [optional] Data ID to be edited. Must be supplied if token is null
     * 
     * @return array
     * @throws ApiException
     */
    public function edit($data, $token = null, $id = null)
    {
        if (empty($data))
        {
            throw new InvalidArgumentException('Empty data not allowed', 803);
        }

        if (empty($token))
        {
            $token = $this->getTokenById($id);
        }

        $data['token'] = $token;

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/edit';
        $this->params = $data;

        return $this->execute();
    }

    /**
     * Mark Perinatal Death Notification data as 'VERIFIED'
     *
     * @param string $id    [required] Data ID to be marked
     * @param array  $data  [optional] additional data for verfication information
     *
     * @return array
     * @throws ApiException
     */
    public function markAsVerified($id, $data = [])
    {
        $data['token'] = $this->getTokenById($id);

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/verifikasi';
        $this->params = $data;

        return $this->execute();
    }

    /**
     * Mark Perinatal Death Notification data as 'FINAL'
     *
     * @param string $id    [required] Data ID to be marked
     * @param array  $data  [optional] additional data for final information
     *
     * @return array
     * @throws ApiException
     */
    public function markAsFinal($id, $data = [])
    {
        $data['token'] = $this->getTokenById($id);

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/finalisasi';
        $this->params = $data;

        return $this->execute();
    }

    /**
     * Mark Perinatal Death Notification data as 'DUPLICATED'
     *
     * @param string $id    [required] Data ID to be marked
     * @param string $ktp   [required] NIK/KTP Number as DUPLICATED refference
     *
     * @return array
     * @throws ApiException
     */
    public function markAsDuplicate($id, $ktp)
    {
        $data['token'] = $this->getTokenById($id);
        $data['ktp']   = $ktp;

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/duplikat';
        $this->params = $data;

        return $this->execute();
    }

    /**
     * Mark Perinatal Death Notification data as 'ANNULLED'
     *
     * @param string $id     [required] Data ID to be marked
     * @param string $reason [required] Reason for data annulation
     *
     * @return array
     * @throws ApiException
     */
    public function markAsAnnulled($id, $reason)
    {
        if (empty($id))
        {
            throw new InvalidArgumentException('Data ID for annulation Perinatal Death Notification must be defined', 805);
        }

        if (empty($reason))
        {
            throw new InvalidArgumentException('Reason for annulation Perinatal Death Notification must be defined', 806);
        }

        $data['id']     = $id;
        $data['alasan'] = $reason;

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/anulir';
        $this->params = $data;

        return $this->execute();
    }

    /**
     * Request for RECJECTION for Alamat Domisili (AD).
     *
     * @param string $id     [required] Data ID to be rejected
     * @param string $reason [required] Reason for data rejection
     * 
     * @return array
     * @throws ApiException
     */
    public function requestForRejection($id, $reason)
    {
        if (empty($id))
        {
            throw new InvalidArgumentException('Data ID for request rejection Perinatal Death Notification must be defined', 807);
        }

        if (empty($reason))
        {
            throw new InvalidArgumentException('Reason for request rejection Perinatal Death Notification must be defined', 808);
        }

        $data['id']     = $id;
        $data['alasan'] = $reason;

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/penolakan/pengajuan';
        $this->params = $data;

        return $this->execute();
    }

    /**
     * Accept RECJECTION request for Alamat Domisili (AD).
     *
     * @param string $id     [required] Data ID to be accepted
     * 
     * @return array
     * @throws ApiException
     */
    public function acceptForRejection($id)
    {
        $data['id']   = $id;

        $this->method = 'POST';
        $this->url    = 'mpdn/bayi/penolakan/terima';
        $this->params = $data;

        return $this->execute();
    }

    private function getTokenById($id)
    {
        if (empty($id))
        {
            throw new InvalidArgumentException('Data id must be defined if token is null', 804);
        }

        $metadata = $this->requestEdit($id);
        $token = $metadata['token'];

        return $token;
    }
}