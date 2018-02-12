<?php
/**
 *
 * User: matteo
 * Date: 09/02/18
 * Time: 6.50
 */

class Calculator {

    /**
     * Calculator constructor.
     */
    public function __construct() {

    }

    public function add($argomenti) {
        $result = null;
        $addendi = explode(',', $argomenti );
        $result = $this->sommaInteri($addendi);
        return $result;
    }

    /**
     * @param $addendi
     * @return int
     */
    private function sommaInteri($addendi): int {
        $somma = 0;
        foreach ($addendi as $addendo) {
            $somma = $somma + intval($addendo);
        }
        return $somma;
    }

}