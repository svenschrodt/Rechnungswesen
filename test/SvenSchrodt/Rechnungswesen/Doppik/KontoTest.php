<?php
/**
 *
 *
 * @link https://github.com/svenschrodt/Rechnungswesen
 * @link https://travis-ci.org/svenschrodt/Rechnungswesen
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @package SvenSchrodt\Rechnungswesen
 * @license https://github.com/svenschrodt/Rechnungswesen/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 * @version 0.0.1
 * @since 2019-11-21
 */
use PHPUnit\Framework\TestCase;

class KontoTest extends TestCase
{
    
        /**
     *
     */
    public function testAccountList()
    {
        $foo = new \SvenSchrodt\Rechnungswesen\Doppik\Konto('2600');
        print_r($foo);
        $this->assertTRue(is_object($foo));
    }
    
}

