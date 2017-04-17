<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 26/03/17
 * Time: 14:16
 */

namespace Miky\Component\Ad\Model;


use Miky\Component\Media\Model\Media;

class Ad
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var Media
     */
    protected $images;

    /**
     * @var Media
     */
    protected $videos;

    /**
     * @var Media
     */
    protected $documents;

    /**
     * @var AdStats
     */
    protected $stats;

    /**
     * @var AdAttribute
     */
    protected $attribute;

    /**
     * Ad constructor.
     */
    public function __construct()
    {
        $this->stats = new AdStats();
        $this->attribute = new AdAttribute();
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return AdStats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param AdStats $stats
     */
    public function setStats($stats)
    {
        $this->stats = $stats;
    }


}