<?php
    public function sorteio()
    {
        $array = [];

        for ($i=0; $i < 20; $i++) {
            $aleatorio = rand(1, 10);
            array_push($array, $aleatorio);      
        }

        $repetido = array_count_values($array);

        $maisRepetido = '';
        $max = max($repetido);

        foreach ($repetido as $key => $val) {
            if ($val ==  $max) {
                $maisRepetido = $key;
            }
        }

        $key = max(array_keys($repetido));

        return "O número que mais se repete é o $maisRepetido. Ele se repete $max vezes";
    }

?>