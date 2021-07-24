<?php

 public function getSeculo(int $ano) : int
    {
        $ano--;
        $divisor = 100;
        $seculo = ($ano/$divisor);

        return floor($seculo + 1);
    }

?>
