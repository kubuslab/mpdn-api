<?php

use MPDN\MPDN;
use MPDN\Operation\Notification\Maternal;

use MPDN\Exception\ApiException;
use MPDN\Operation\SessionOperation;
use MPDN\Operation\Admin\Organization;
use MPDN\Data\MaternalNotification;

class Ujiapi extends Controller {

    private $globalApiKey = '<GLOBAL-KEY>';

    // userApiKey bisa diambil dari web service
    private $userApiKey = '<API-KEY>';


    function wilayah()
    {
        // parameter kedua true -> FULL dan false -> DEMO
        MPDN::prepare($this->globalApiKey, false);

        echo "LIHAT LIST WILAYAH\n";
        $users = new Organization($this->userApiKey);
        print_r($users->subdivisions('35.12.01.0000'));
    }

    function users($idfaskes = null)
    {
        // parameter kedua true -> FULL dan false -> DEMO
        MPDN::prepare($this->globalApiKey, false);

        echo "LIHAT USER FASKES\n";
        $users = new Organization($this->userApiKey);
        print_r($users->users($idfaskes));

    }
}