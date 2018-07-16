<?php

namespace Yoon\YoonMvp\Domain\State;

use Yoon\YoonMvp\State;
use Ramsey\Uuid\Uuid;

class UserMetaData extends MetaData
{
    public $ipAddress;
    public $userAgent;
    public $device;
    public $countryCode;
    public $city;
    public $longitude;
    public $latitude;


    function __construct(
        Uuid $id, 
        Uuid $metaDataId, 
        \DateTime $createDate, 
        string $description, 
        string $name,
        string $ipAddress,
        string $userAgent,
        string $device,
        string $countryCode,
        float $longitude,
        float $latitude)
    {   
        parent::__construct($id, $metaDataId, $createDate, $description, $name, User::class);
        $this->ipAddress = $ipAddress;
        $this->userAgent = $userAgent;
        $this->device = $device;
        $this->countryCode = $countryCode;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    public function getId() : Uuid
    {
        return $this->id;
    }
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }
    public function getUserAgent() : \DateTime
    {
        return $this->userAgent;
    }
    public function getDevice() : string
    {
        return $this->device;
    }
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    public function getLongitude() : string
    {
        return $this->longitude;
    }
    public function getLatitude() : string
    {
        return $this->latitude;
    }
}

?>