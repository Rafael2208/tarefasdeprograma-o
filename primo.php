

<?php

    public function PrimoInferior(int $num)
    {
        $num--;

        if ($num < 0) {
            return 0;
        }

        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                echo "Número primo <br />";
            } else {
                echo "Não primo <br />";
            }
        }
    }

?>

