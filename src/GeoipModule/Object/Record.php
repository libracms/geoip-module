<?php

namespace GeoipModule\Object;

/**
 * Description of Record
 *
 * @see \geoiprecord
 * @author duke
 */
class Record
{
  protected $countryCode;
  protected $countryCode3;
  protected $countryName;
  protected $region;
  protected $city;
  protected $postalCode;
  protected $latitude;
  protected $longitude;
  protected $areaCode;
  protected $dmaCode;   # metro and dma code are the same. use metro_code
  protected $metroCode;
  protected $continentCode;

  public function getCountryCode()
  {
      return $this->countryCode;
  }

  public function setCountryCode($countryCode)
  {
      $this->countryCode = $countryCode;
      return $this;
  }

  public function getCountryCode3()
  {
      return $this->countryCode3;
  }

  public function setCountryCode3($countryCode3)
  {
      $this->countryCode3 = $countryCode3;
      return $this;
  }

  public function getCountryName()
  {
      return $this->countryName;
  }

  public function setCountryName($countryName)
  {
      $this->countryName = $countryName;
      return $this;
  }

  public function getRegion()
  {
      return $this->region;
  }

  public function setRegion($region)
  {
      $this->region = $region;
      return $this;
  }

  public function getCity()
  {
      return $this->city;
  }

  public function setCity($city)
  {
      $this->city = $city;
      return $this;
  }

  public function getPostalCode()
  {
      return $this->postalCode;
  }

  public function setPostalCode($postalCode)
  {
      $this->postalCode = $postalCode;
      return $this;
  }

  public function getLatitude()
  {
      return $this->latitude;
  }

  public function setLatitude($latitude)
  {
      $this->latitude = $latitude;
      return $this;
  }

  public function getLongitude()
  {
      return $this->longitude;
  }

  public function setLongitude($longitude)
  {
      $this->longitude = $longitude;
      return $this;
  }

  public function getAreaCode()
  {
      return $this->areaCode;
  }

  public function setAreaCode($areaCode)
  {
      $this->areaCode = $areaCode;
      return $this;
  }

  public function getDmaCode()
  {
      return $this->dmaCode;
  }

  public function setDmaCode($dmaCode)
  {
      $this->dmaCode = $dmaCode;
      return $this;
  }

  public function getMetroCode()
  {
      return $this->metroCode;
  }

  public function setMetroCode($metroCode)
  {
      $this->metroCode = $metroCode;
      return $this;
  }

  public function getContinentCode()
  {
      return $this->continentCode;
  }

  public function setContinentCode($continentCode)
  {
      $this->continentCode = $continentCode;
      return $this;
  }
}
