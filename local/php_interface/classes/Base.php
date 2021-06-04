<?php

namespace WS;


class Base {
    static public function className () {
        return get_called_class();
    }

    /**
     * @return \CMain
     */
    protected function application() {
        global $APPLICATION;

        return $APPLICATION;
    }
}