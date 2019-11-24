<?php
/**
 * SvenSchrodt\Rechnungswesen\Doppik\Bilanz
 *
 * Class for elements of balance of accounts (german: "Bilanz")
 * 
 * Classification of balance acc. to German commercial law 
 * - HGB ("Handelsgesetzbuch") §266
 * 
 * Assets ("AKTIVA") 
 * 
 *   A. Anlagevermögen
 *   B. Umlaufvermögen
 *   C. Rechnungsabgrenzungsposten.
 *   D. Aktive latente Steuern.
 *   E. Aktiver Unterschiedsbetrag aus der Vermögensverrechnung.
 * 
 * Liabilities ("PASSIVA ")
 * 
 *   A. Eigenkapital
 *   B. Rückstellungen
 *   C. Verbindlichkeiten
 *   D. Rechnungsabgrenzungsposten.
 *   E. Passive latente Steuern.
 * 
 *
 *
 * Hint: due to the fact, that this project is addressing German accounting schema,
 * the naming convention of classes, methods and variables/attributes etc. will use
 * German terms and abbreviations whenever it seems to be useful
 *
 * @TODO Validate account numbers!
 * @TODO Add commenting
 *
 * @link https://www.gesetze-im-internet.de/hgb/__266.html
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

class Bilanz
{

    /**
     * List of assets (German: "Aktiva") entries
     *
     * @var array
     */
    protected $aktiva = array();

    /**
     * List of liabilities (German: "Passiva") entries
     *
     * @var array
     */
    protected $passiva = array();

    protected $_bilanzGLiederung = array();

    // SvenSchrodt\Rechnungswesen\Doppik\Konto

    /**
     *
     * @param string $no
     */
    public function __construct()
    {
        $this->_init();
    }

    protected function _init()
    {
        $this->_bilanzGliederung = [
            'AKTIVA' => [
                'A_Anlagevermoegen' => [
                    'I_Immaterielle_Vermoegensgegenstaende' => [
                        '1_Selbst_geschaffene_gewerbliche_Schutzrechte_und_aehnliche_Rechte_und_Werte' => 0.0,
                        '2_entgeltlich_erworbene_Konzessionen_gewerbliche_Schutzrechte_und_aehnliche_Rechte_und_Werte_sowie_Lizenzen_an_solchen_Rechten_und_Werten' => 0.0,
                        '3_Geschaefts_oder_Firmenwert' => 0.0,
                        '4_geleistete_Anzahlungen' => 0.0
                    ],
                    'II_Sachanlagen' => [
                        '1_Grundstuecke_grundstuecksgleiche_Rechte_und_Bauten_einschliesslich_der_Bauten_auf_fremden_Grundstuecken' => 0.0,
                        '2_technische_Anlagen_und_Maschinen' => 0.0,
                        '3_andere_Anlagen_Betriebs_und_Geschaeftsausstattung' => 0.0,
                        '4_geleistete_Anzahlungen_und_Anlagen_im_Bau_' => 0.0
                    ],
                    'III_Finanzanlagen' => [
                        '1_Anteile_an_verbundenen_Unternehmen' => 0.0,
                        '2_Ausleihungen_an_verbundene_Unternehmen' => 0.0,
                        '3_Beteiligungen' => 0.0,
                        '4_Ausleihungen_an_Unternehmen_mit_denen_ein_Beteiligungsverhaeltnis_besteht' => 0.0,
                        '5_Wertpapiere_des_Anlagevermoegens' => 0.0,
                        '6_sonstige_Ausleihungen' => 0.0
                    ]
                ],
                'B_Umlaufvermoegen' => [
                    'I_Vorraete' => [
                        '1_Roh__Hilfs_und_Betriebsstoffe' => 0.0,
                        '2_Unfertige_Erzeugnisse_unfertige_Leistungen' => 0.0,
                        '3_Fertige_Erzeugnisse_und_Waren' => 0.0,
                        '4_Geleistete_Anzahlungen' => 0.0
                    ],

                    'II_Forderungen_und_sonstige_Vermoegensgegenstaende' => [
                        '1_Forderungen_aus_Lieferungen_und_Leistungen' => 0.0,
                        '2_Forderungen_gegen_verbundene_Unternehmen' => 0.0,
                        '3_Forderungen_gegen_Unternehmen_mit_denen_ein_Beteiligungsverhaeltnis_besteht' => 0.0,
                        '4_sonstige_Vermoegensgegenstaende' => 0.0
                    ],
                    'III_Wertpapiere' => [
                        '1_Anteile_an_verbundenen_Unternehmen' => 0.0,
                        '2_sonstige_Wertpapiere' => 0.0
                    ],
                    'IV_Kassenbestand_Bundesbankguthaben_Guthaben_bei_Kreditinstituten_und_Schecks_' => 0.0
                ],
                'C_Rechnungsabgrenzungsposten' => 0.0,
                'D_Aktive_latente_Steuern' => 0.0,
                'E_Aktiver_Unterschiedsbetrag_aus_der_Vermoegensverrechnung_' => 0.0
            ],
            'PASSIVA' => [
                'A_Eigenkapital' => [
                    'I_Gezeichnetes_Kapital',
                    'II_Kapitalruecklage' => 0.0,
                    'III_Gewinnruecklagen' => [
                        '1_gesetzliche_Ruecklage' => 0.0,
                        '2_Ruecklage_fuer_Anteile_an_einem_herrschenden_oder_mehrheitlich_beteiligten_Unternehmen' => 0.0,
                        '3_satzungsmaessige_Ruecklagen' => 0.0,
                        '4_andere_Gewinnruecklagen' => 0.0
                    ],
                    'IV_Gewinnvortrag/Verlustvortrag' => 0.0,
                    'V_Jahresueberschuss/Jahresfehlbetrag' => 0.0
                ],
                'B_Rueckstellungen' => [
                    '1_Rueckstellungen_fuer_Pensionen_und_aehnliche_Verpflichtungen' => 0.0,
                    '2_Steuerrueckstellungen' => 0.0,
                    '3_sonstige_Rueckstellungen' => 0.0
                ],
                'C_Verbindlichkeiten' => [
                    '1_Anleihen' => 0.0,
                    '2_Verbindlichkeiten_gegenueber_Kreditinstituten' => 0.0,
                    '3_erhaltene_Anzahlungen_auf_Bestellungen' => 0.0,
                    '4_Verbindlichkeiten_aus_Lieferungen_und_Leistungen' => 0.0,
                    '5_Verbindlichkeiten_aus_der_Annahme_gezogener_Wechsel_und_der_Ausstellung_eigener_Wechsel' => 0.0,
                    '6_Verbindlichkeiten_gegenueber_verbundenen_Unternehmen' => 0.0,
                    '7_Verbindlichkeiten_gegenueber_Unternehmen_mit_denen_ein_Beteiligungsverhaeltnis_besteht' => 0.0,
                    '8_sonstige_Verbindlichkeiten' => 0.0
                ],
                'D_Rechnungsabgrenzungsposten' => 0.0,
                'E_Passive_latente_Steuern_' => 0.0
            ]
        ];
    }

    public function getBilanzGliederung(bool $asJson = false)
    {
        return ($asJson) ? json_encode($this->_bilanzGliederung) : $this->_bilanzGliederung;
    }
}
