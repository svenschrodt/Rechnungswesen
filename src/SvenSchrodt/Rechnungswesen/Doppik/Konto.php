<?php
/**
 * SvenSchrodt\Rechnungswesen\Doppik\Konto
 *
 * Factory for instances of accounts (german: "Konto")
 *
 *
 * Hint: due to the fact, that this project is addressing German accounting schema,
 * the naming convention of classes, methods and variables/attributes etc. will use
 * German terms and abbreviations whenever it seems to be useful
 *
 * @TODO Validate account numbers!
 * @TODO Add commenting
 *
 * @link https://github.com/svenschrodt/Rechnungswesen
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @package SvenSchrodt\Rechnungswesen
 * @license https://github.com/svenschrodt/Rechnungswesen/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 * @version 0.0.1
 * @since 2019-11-21
 */
namespace SvenSchrodt\Rechnungswesen\Doppik;


/**
 * @TODO - make it abstract, after decision how to implement convention <-> configuration
 * of Model chart of accounts 
 * 
 */ 

class Konto
{
    
    /**
     * Account number
     * 
     * @var integer
     */
    protected $_no = 0;
    
    /**
     * Journal of debtor side (German: "Soll") entries 
     *  
     * @var array
     */
    protected $sollJournal = array();
    
    /**
     * Journal of credit side (German: "Haben") entries
     *
     * @var array
     */
    protected $habenJournal = array();
    
    /**
     * Current credit balance (German: "Saldo")
     * 
     * @var float
     */
    protected $_saldo = 0.00;
    
    
    // SvenSchrodt\Rechnungswesen\Doppik\Konto

    /**
     * 
     * @param string $no
     */
    public function __construct(string $no)
    {
        $this->_no = $no;
    }
    
    
}
