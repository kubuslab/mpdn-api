<?php

namespace MPDN\Operation\Admin;

use InvalidArgumentException;
use MPDN\Exception\ApiException;
use MPDN\MPDN;
use MPDN\Operation\AdminOperation;

class Organization extends AdminOperation {

    /**
     * List of subdivision on Indonesia based on specific region/target code.
     *
     * @param string $target [required] ID of Province/Regency/District/Desa/Kelurahan of target data. Must be follow format
     *                                  AA.BB.CC.DDDD. AA = 2-digit ID Province, BB = 2-digit ID Regency
     *                                  CC = 2-digit ID District, DDDD = 4-digit ID Desa/Kelurahan
     *
     * @return array
     * @throws ApiException
     */
    public function subdivisions($target)
    {
        if (empty($target))
        {
            throw new InvalidArgumentException('Request for editing form required data id to be suplied', 801);
        }

        $this->method = 'GET';
        $this->url = 'struktur/subwilayah/' . $target;

        return $this->execute();
    }

    /**
     * List of Healtcare Faciltity (Rumah Sakit, Klinik and Puskesmas) 
     * on Indonesia based on specific region/target code.
     *
     * @param string $target [required] ID of Province/Regency of target data. Must be follow format
     *                                  AA.BB.00.00. AA = 2-digit ID Province, BB = 2-digit ID Regency
     * @param string $type   [optional] Facility type. Must be one of MPDN::SEMUA, MPDN::RS, MPDN::KLINIK
     *                                  MPDN::PUSKESMAS
     * 
     * @return array
     * @throws ApiException
     */
    public function facilities($target, $type = null)
    {
        if (empty($target))
        {
            throw new InvalidArgumentException('Request for editing form required data id to be suplied', 801);
        }

        if ($type && !in_array($type, [MPDN::TYPE_FASKES_SEMUA, MPDN::TYPE_FASKES_RS, 
                            MPDN::TYPE_FASKES_KLINIK, MPDN::TYPE_FASKES_PUSKESMAS]
                        ))
        {
            throw new InvalidArgumentException('Facility type not defined', 800);
        }

        $url = 'struktur/fasyankes/' . $target;
        if ($type)
            $url .= '/' . $type;

        $this->method = 'GET';
        $this->url = $url;

        return $this->execute();
    }

    /**
     * List of users of Health Care Facility.
     *
     * @param string $facility [required] ID of Helath care Facility
     *
     * @return array
     * @throws ApiException
     */
    public function users($facility)
    {
        if (empty($facility))
        {
            throw new InvalidArgumentException('Request for editing form required data id to be suplied', 801);
        }

        $this->method = 'GET';
        $this->url = 'pelapor/info/' . $facility;

        return $this->execute();
    }

}