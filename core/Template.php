<?php

Namespace Core;

abstract class Template {
    public static function startSection($zone) {
            ob_start();
    }
    public static function endSection($zone){
            global $$zone;
            $$zone = ob_get_clean();
    }
}