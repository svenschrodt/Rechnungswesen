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
namespace SvenSchrodt\Rechnungswesen\Doppik\Konto;

abstract class AbstractModel
{

    /**
     * Array containing account information (account no and label)
     * 
     * @var array
     */
    protected $konto = array();
    
    /**
     * Getting name for account by account number
     * 
     * 
     * @param string $no
     * @return NULL|string
     */
    public function getAccountName(string $no)
    {
        
        //@TODO Validation for account no [4 digits as string || int]
        return (isset($this->konto[$no])) ? $this->konto[$no] : null;
    }
    
    public function getAccountType($no)
    {
        // returning 'Aktiva', 'Passiva'
    }
    
}

