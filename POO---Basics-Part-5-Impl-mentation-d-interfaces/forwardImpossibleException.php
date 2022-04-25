<?php

class forwardImpossibleException extends Exception {
    
    public function __construct($message="", $code = 0, Exception $previous = null){
        if(empty($message)) {
            $message = 'cannot go forward because of hand brake';
        }
        parent::__construct($message, $code, $previous);
    }

}