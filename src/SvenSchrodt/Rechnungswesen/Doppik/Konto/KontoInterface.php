<?php
/**
 * SvenSchrodt\Rechnungswesen\Doppik\Konto\KontoInterface
 *
 *
 * Interface for accounts 
 *
 *
 * Hint: due to the fact, that this project is addressing German accounting schema,
 * the naming convention of classes, methods and variables/attributes etc. will use
 * German terms and abbreviations whenever it seems to be useful
 *
 * @link https://github.com/svenschrodt/Rechnungswesen
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @package SvenSchrodt\Rechnungswesen
 * @license https://github.com/svenschrodt/Rechnungswesen/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 * @version 0.0.1
 * @since 2019-11-21
 */

interface KontoInterface
{
    /**
     * Getting accounting balance ('Saldo') of current account instance 
     * @return float
     */
    
    public function getSaldo() : float;
}

