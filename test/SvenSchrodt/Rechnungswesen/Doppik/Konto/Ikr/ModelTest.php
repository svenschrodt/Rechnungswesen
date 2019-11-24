<?php
/**
 * SvenSchrodt\Rechnungswesen\Doppik\Konto\Ikr\Model
 * 
 * 
 * Model chart of accounts of German IKR ("Industriekontenrahmen")
 * 
 * 
 * Hint: due to the fact, that this project is addressing German accounting schema,
 * the naming convention of classes, methods and variables/attributes etc. will use
 * German terms and abbreviations whenever it seems to be useful
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

class ModelTest extends TestCase
{

    // And now some stupid tests, to test, PHPUnit is working ;-)
    /**
     * Testing name of account n° 2600
     */
    public function testAccountNameVorsteuer()
    {
        $this->assertTrue(2 * 2 === 4);
        $this->assertFalse('Foo' === 'BAr');
        $foo = new \SvenSchrodt\Rechnungswesen\Doppik\Konto\Ikr\Model();
        $this->assertSame($foo->getAccountName('2600'), 'Vorsteuer');
    }

    // And now some stupid tests, to test, PHPUnit is working ;-)
    /**
     * Testing name of account n° 4800
     */
    public function testAccountNameUmsatzsteuer()
    {
        $foo = new \SvenSchrodt\Rechnungswesen\Doppik\Konto\Ikr\Model();
        $this->assertSame($foo->getAccountName('4800'), 'Umsatzsteuer');
    }

    /**
     * Testing name of account n° 4800
     */
    public function testAccountTypeDummy()
    {
        $foo = new \SvenSchrodt\Rechnungswesen\Doppik\Konto\Ikr\Model();
        $this->assertTrue($foo->getAccountType('4800') === 'n/a');
    }
    /**
     *  
     */
    public function testAccountList()
    {
        $foo = new \SvenSchrodt\Rechnungswesen\Doppik\Konto\Ikr\Model();
        $barList = $foo->getAccountList(); 
        $this->assertTrue(is_array($barList));
        $this->assertTrue(count($barList)>0);
    }
    
}

