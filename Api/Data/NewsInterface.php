<?php

namespace BDC\SimpleNews\Api\Data;

interface NewsInterface {
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string|null
     */
    public function getSummary();
    
    /**
     * @return string|null
     */
    public function getDescription();
}
