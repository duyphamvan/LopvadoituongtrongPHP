<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 24/01/2019
 * Time: 21:54
 */

class StopWatch
{
    private $startTime;
    private $endTime;

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function __construct()
    {
        return $this->startTime = date('h:i:s');
    }

    public  function  getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public  function startTime()
    {
        return $this->startTime = date("h:i:s");
    }
    public function stopTime()
    {
        return $this->endTime = date("h:i:s");
    }
    public function getElapsedTime()
    {
        return strtotime($this->endTime) - strtotime($this->startTime);
    }

}