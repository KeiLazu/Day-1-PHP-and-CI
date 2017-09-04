<?php
    interface Logger {
        public function log(string $msg);

    }

    class Apps {
        private $logger;

        public function getLogger() : Logger {
            return $this -> logger;

        }

        public function setLogger(Logger $logger) {
            $this -> logger = $logger;

        }

    }

    $app = new Apps;
    $app -> setLogger(new class implements Logger {
        public function log (string $msg) {
            print ($msg);
        }
    });

    $app->getLogger()->log("Hajimete no Log Message");

?>