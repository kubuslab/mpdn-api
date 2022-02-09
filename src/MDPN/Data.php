<?php

namespace MPDN;

use MPDN\Data\MaternalNotification;
use MPDN\Data\PerinatalNotification;

/**
 * WebHook Request data item
 */
abstract class Data
{

    const INCOMING = 'incoming';
    const OUTGOING = 'outgoing';

    public static $classMap = [
        MaternalNotification::class => [
            'buatKematianBaruMaternal',
            'ubahKematianMaternal',
            'anulirKematianMaternal',
            'finalisasiKematianMaternal',
            'verifikasiKematianMaternal',
            'duplikatKematianMaternal',
            'ajukanOrphanMaternal',
            'terimaOrphanMaternal',
        ],
        PerinatalNotification::class => [
            'buatKematianBaruPerinatal',
            'ubahKematianPerinatal',
            'anulirKematianPerinatal',
            'finalisasiKematianPerinatal',
            'verifikasiKematianPerinatal',
            'duplikatKematianPerinatal',
            'ajukanOrphanPerinatal',
            'terimaOrphanPerinatal'
        ],
    ];

    protected $incomingMap = [
        'originid' => 'originid'
    ];

    protected $outgoingMap = [

    ];

    protected $array;

    protected $id;

    protected $created;

    protected $registrar;

    protected $originId;

    public static function factory($array, $eventType, $direction = self::INCOMING)
    {
        foreach (self::$classMap as $class => $map)
        {
            if (in_array($eventType, $map))
            {
                $obj = new $class($array, $direction);
                return $obj;
            }
        }

        return null;
    }

    public function __construct($array, $direction = self::INCOMING)
    {
        if ($direction == self::INCOMING)
        {
            foreach ($this->incomingMap as $field => $key)
            {
                if (array_key_exists($key, $array))
                {
                    $this->$field = $array[$key];
                }
            }
        }
        else
        {
            foreach ($this->outgoingMap as $field => $key)
            {
                if (array_key_exists($key, $array))
                {
                    $this->$field = $array[$key];
                }
            }
        }

        $this->array = $array;
    }

    public function getRawArray()
    {
        return $this->array;
    }

    public function getIncomingArray()
    {
        $array = [];
        foreach ($this->incomingMap as $field => $key)
        {
            $array[$key] = $this->$field;
        }

        return $array;
    }

    public function getOutgoingArray()
    {
        $array = [];
        foreach ($this->outgoingMap as $field => $key)
        {
            $array[$key] = $this->$field;
        }

        return $array;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getRegistrar()
    {
        return $this->registrar;
    }

    public function getOriginId()
    {
        return $this->originId;
    }
}