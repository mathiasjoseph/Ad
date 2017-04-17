<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 26/03/17
 * Time: 14:27
 */

namespace Miky\Component\Ad\Model;


class AdAttribute
{
    /**
     * @var Ad
     */
    protected $ad;

    /**
     * @var float
     */
    protected $price;

    /**
     * @return Ad
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * @param Ad $ad
     */
    public function setAd($ad)
    {
        $this->ad = $ad;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }






}