<?php

namespace BDC\SimpleNews\Api;

interface NewsRepositoryInterface {
    /**
     * @return \BDC\SimpleNews\Api\Data\NewsInterface[]
     */
    public function getList();
}
