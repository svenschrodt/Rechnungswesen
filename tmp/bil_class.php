<?php
$bilanzGLiederung = 
['AKTIVA' => [
    'A_Anlagevermoegen' => [
        'I_Immaterielle_Vermoegensgegenstaende',
        '1_Selbst_geschaffene_gewerbliche_Schutzrechte_und_aehnliche_Rechte_und_Werte_',
        '2_entgeltlich_erworbene_Konzessionen_gewerbliche_Schutzrechte_und_aehnliche_Rechte_und_Werte_sowie_Lizenzen_an_solchen_Rechten_und_Werten_',
        '3_Geschaefts_oder_Firmenwert_',
        '4_geleistete_Anzahlungen_'],
    'II_Sachanlagen' => [
        '1_Grundstuecke_grundstuecksgleiche_Rechte_und_Bauten_einschliesslich_der_Bauten_auf_fremden_Grundstuecken_',
        '2_technische_Anlagen_und_Maschinen_',
        '3_andere_Anlagen_Betriebs_und_Geschaeftsausstattung_',
        '4_geleistete_Anzahlungen_und_Anlagen_im_Bau_'],
    'III_Finanzanlagen' => [
        '1_Anteile_an_verbundenen_Unternehmen_',
        '2_Ausleihungen_an_verbundene_Unternehmen_',
        '3_Beteiligungen_',
        '4_Ausleihungen_an_Unternehmen_mit_denen_ein_Beteiligungsverhaeltnis_besteht_',
        '5_Wertpapiere_des_Anlagevermoegens_',
        '6_sonstige_Ausleihungen_'],
    'B_Umlaufvermoegen' => [
        'I_Vorraete' => [
            '1_Roh__Hilfs_und_Betriebsstoffe_',
            '2_Unfertige_Erzeugnisse_unfertige_Leistungen_',
            '3_Fertige_Erzeugnisse_und_Waren_',
            '4_Geleistete_Anzahlungen_'],
        'II_Forderungen_und_sonstige_Vermoegensgegenstaende' => [
            '1_Forderungen_aus_Lieferungen_und_Leistungen_',
            '2_Forderungen_gegen_verbundene_Unternehmen_',
            '3_Forderungen_gegen_Unternehmen_mit_denen_ein_Beteiligungsverhaeltnis_besteht_',
            '4_sonstige_Vermoegensgegenstaende_'],
        'III_Wertpapiere' => [
            '1_Anteile_an_verbundenen_Unternehmen_',
'2_sonstige_Wertpapiere_'],
        'IV_Kassenbestand_Bundesbankguthaben_Guthaben_bei_Kreditinstituten_und_Schecks_' => [
            'C_Rechnungsabgrenzungsposten_'  => [],
            'D_Aktive_latente_Steuern_'  => [],
            'E_Aktiver_Unterschiedsbetrag_aus_der_Vermoegensverrechnung_'  => []
            ],
        ]
'PASSIVA'  => [
                'A_Eigenkapital'   => [
                    'I_Gezeichnetes_Kapital_'   => [],
                    'II_Kapitalruecklage_'  => [],
                    'III_Gewinnruecklagen'   => ['1_gesetzliche_Ruecklage_',
                        '2_Ruecklage_fuer_Anteile_an_einem_herrschenden_oder_mehrheitlich_beteiligten_Unternehmen_',
                        '3_satzungsmaessige_Ruecklagen_',
                        '4_andere_Gewinnruecklagen_'],
                    'IV_Gewinnvortrag/Verlustvortrag_'   => [],
                    'V_Jahresueberschuss/Jahresfehlbetrag_'  => [],
                    'B_Rueckstellungen',
                    '1_Rueckstellungen_fuer_Pensionen_und_aehnliche_Verpflichtungen_',
                    '2_Steuerrueckstellungen_',
                    '3_sonstige_Rueckstellungen_',
                    'C_Verbindlichkeiten',
                    '1_Anleihen',
                    '2_Verbindlichkeiten_gegenueber_Kreditinstituten_',
                    '3_erhaltene_Anzahlungen_auf_Bestellungen_',
                    '4_Verbindlichkeiten_aus_Lieferungen_und_Leistungen_',
                    '5_Verbindlichkeiten_aus_der_Annahme_gezogener_Wechsel_und_der_Ausstellung_eigener_Wechsel_',
                    '6_Verbindlichkeiten_gegenueber_verbundenen_Unternehmen_',
                    '7_Verbindlichkeiten_gegenueber_Unternehmen_mit_denen_ein_Beteiligungsverhaeltnis_besteht_',
                    '8_sonstige_Verbindlichkeiten_',
                    'D_Rechnungsabgrenzungsposten_',
                    'E_Passive_latente_Steuern_']
                    