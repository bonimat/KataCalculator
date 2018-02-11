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
        preg_match_all('/(\d+)/', $argomenti, $found);
        $result = $this->sommaArrayDiNumeri($found);
        return $result;
    }

    /**
     * @param $found
     * @return int
     */
    private function sommaArrayDiNumeri($found): int {
        $result = 0;
        foreach ($found[1] as $item) {
            $result = $result + intval($item[0]);
        }
        return $result;
    }

}