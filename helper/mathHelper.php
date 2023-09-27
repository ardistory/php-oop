<?php

namespace Data\static;

class mathHelper
{
    static public string $name;
    static public function jumlah(int ...$nomors)
    {
        $total = 0;
        foreach ($nomors as $nomor) {
            $total +=  $nomor;
        }
        return $total;
    }
}
