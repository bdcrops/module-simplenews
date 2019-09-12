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

    public function getDescription();
}
