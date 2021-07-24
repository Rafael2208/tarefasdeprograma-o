<?php

    public function SequenciaCrescente(array $array) : string
    {
        $atual = 0;
        $anterior = '';
        $removiveis = 0;

        foreach($array as $key => $value) {

            $atual = $value;

            if ($key > 0) {
                $anterior = $array[$key-1];
            }
            
            if ($atual < $anterior) {
                $removiveis++;
            }
        }
        
        if ($removiveis > 1) {
            return 'false';
        }

        return 'true';
    }
}


?>