<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   registered-r
 * @author    Benny Born <benny.born@numero2.de>
 * @license   LGPL
 * @copyright 2014 numero2 - Agentur für Internetdienstleistungen
 */


class RegisteredR extends Frontend
{
    public function replaceSymbols( $strContent, $strTemplate )
    {
        $pos = strpos( $strContent, '<body' );
        return substr($strContent, 0, $pos) . str_replace( '<sup><sup>®</sup></sup>', '<sup>®</sup>', str_replace('®', '<sup>®</sup>', substr($strContent, $pos)) );
    }
}