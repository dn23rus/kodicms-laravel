<?php
namespace KodiCMS\SleepingOwlAdmin\Interfaces;

interface DisplayInterface
{
    /**
     * Initialize display
     */
    public function initialize();

    /**
     * Set display class
     *
     * @param string $class
     */
    public function setClass($class);
}
