<?php

namespace Swaggest\JsonSchema;


interface DataPreProcessor
{
    /**
     * @param $data mixed original data
     * @param Schema $schema
     * @param bool $import
     * @return mixed processed data
     */
    public function process($data, Schema $schema, $import = true);
}