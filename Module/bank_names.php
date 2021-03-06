<?php
class BankConstants
{
  

    public static function bank_full_name($bank_name)
    {
        return self::$BANK_NAMES[$bank_name];
    }

    private static $BANK_NAMES = array(
        'ALB'   => 'Allahabad Bank',
        'AMEX'  => 'American Express',
        'AND'   => 'Andhra Bank',
        'ARVT'  => 'Arvest Bank',
        'AXIS'  => 'Axis Bank',
        'BARC'  => 'Barclays Bank',
        'BCB'   => 'Barclays Bank',
        'BOB'   => 'Bank of Baroda',
        'BOFA'  => 'Bank of America',
        'BOI'   => 'Bank of India',
        'BOM'   => 'Bank of Maharashtra',
        'BOP'   => 'Bank of Punjab',
        'BOR'   => 'Bank of Rajasthan',
        'CAON'  => 'Capital One',
        'CBI'   => 'Central Bank',
        'CBPL'  => 'Centurion Bank of Punjab',
        'CHAS'  => 'CHASE Bank',
        'CITIBANK' => 'Citibank',
        'CITIUB'=> 'City Union Bank',
        'CNB'   => 'Canara Bank',
        'COP'   => 'Corporation Bank',
        'COSCB' => 'Cosmos Co-op Bank',
        'CSBL'  => 'Catholic Syrian Bank',
        'CTBA'  => 'Commonwealth Bank',
        'DBL'   => 'Dhanalakshmi Bank',
        'DBS'   => 'DBS Bank',
        'DCB'   => 'Development Credit Bank',
        'DEUNB' => 'Deutsche Bank',
        'DNB'   => 'Dena Bank',
        'EBIL'  => 'Emirates NBD',
        'FED'   => 'Federal Bank',
        'GE'    => 'GE Money',
        'HDFC'  => 'HDFC BANK LIMITED',
        'HDFC'  => 'HDFC Bank',
        'HIB'   => 'Himalayan Bank',
        'HSBC'  => 'HSBC',
        'ICICI' => 'ICICI Bank',
        'IDBI'  => 'IDBI Bank',
        'IIB'   => 'IndusInd Bank',
        'INB'   => 'Indian Bank',
        'ING'   => 'ING Vysya Bank',
        'IOB'   => 'Indian Overseas Bank',
        'JKB'   => 'J&K Bank',
        'KMB'   => 'Kotak Bank',
        'KMB'   => 'KOTAK MAHINDRA BANK LTD',
        'KTKB'  => 'Karnataka Bank',
        'KVB'   => 'Karur Vysya Bank',
        'LOYD'  => 'Lloyds TSB',
        'LVB'   => 'Lakshmi Vilas Bank',
        'NAB'   => 'NatWest',
        'NATA'  => 'National Australia Bank',
        'NBL'   => 'Nabil Bank',
        'OBC'   => 'Oriental Bank of Commerce',
        'PMCB'  => 'Punjab & Maharashtra Co-op Bank',
        'PNB'   => 'Punjab National Bank',
        'PNBP'  => 'Wells Fargo',
        'PNCC'  => 'PNC Bank',
        'RBDO'  => 'Royal Bank of Canada',
        'RBL'   => 'Ratnakar Bank',
        'RBS'   => 'Royal Bank of Scotland',
        'SACOB' => 'Saraswat Co-op Bank',
        'SBI'   => 'State Bank of India',
        'SIB'   => 'The South Indian Bank',
        'STDC'  => 'Standard Chartered Bank',
        'SVCB'  => 'Shamrao Vithal Co-op Bank',
        'SYNBK' => 'Syndicate Bank',
        'TDOM'  => 'TD Canada Trust',
        'TJSB'  => 'Thane Janata Sahakari Bank',
        'TNMB'  => 'Tamil Nadu Mercantile Bank',
        'UCO'   => 'UCO Bank',
        'UNI'   => 'Union Bank of India',
        'UNITD' => 'United Bank of India',
        'VJYA'  => 'Vijaya Bank',
        'YES'   => 'YES Bank',
    );
}

?>
