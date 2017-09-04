<?php
    class OperationCodenameMath {
        protected $n = 10;

        // get the division by zero error object and display dat in exception
        public function doOperation() : string {
            try {
                $val = $this->n % 0;
                return $val;

            } catch (DivisionByZeroError $e) {
                return "EEEYYY MODULO BAI ZERO YOO~";
                // return $e -> getMessage();

            }

        }

    }

    $mathOperatorObj = new OperationCodenameMath();
    print($mathOperatorObj->doOperation());

?>