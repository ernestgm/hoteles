<?php
namespace Cubanacan\WSBundle\DependencyInjection;

class TpvConfig
{
    /*
     * parte del arreglo que toca segun la moneda
     */
    private $tpvInfo;
    
    public function __construct($currencyCode){
        $tpvArray = array(

            '2'=>array(
                  'NAME'=>'CUBANACAN portal',
                  'CODE'=>'332076710',
                  'CURRENCY'=>'978',
                  'TERMINAL'=>'1',
                  'TPV_KEY'=>'Cub4n4c4neurtest',
                  'DISPATCH_URL'=>'http://localhost/pam/pay.res-line.com/web/app.php/admin/operation/pay',
                  'MERCHANT_URL'=>'http://ws-dev.hotelescubanacan.com/travels/booking/SisTpvPayment!confirm.action',
                  'ACTIVE'=>'1',
                  'URLOKES'=>'http://127.0.0.1:1080/hotelescubanacan.com/portal/#/es/pay-success',
                  'URLOKEN'=>'http://127.0.0.1:1080/hotelescubanacan.com/portal/#/en/pay-success',
                  'URLKOES'=>'http://127.0.0.1:1080/hotelescubanacan.com/portal/#/es/pay-error',
                  'URLKOEN'=>'http://127.0.0.1:1080/hotelescubanacan.com/portal/#/en/pay-error'
            )
        );
        $this->tpvInfo = $tpvArray[$currencyCode];
    }
    
    public function getName() {
        return $this->tpvInfo['NAME'];
    }
    
    public function getCode() {
        return $this->tpvInfo['CODE'];
    }
    
    public function getClientKey() {
        return $this->tpvInfo['CLIENT_KEY'];
    }
    
    public function getCurrency() {
        return $this->tpvInfo['CURRENCY'];
    }
    
    public function getTerminal() {
        return $this->tpvInfo['TERMINAL'];
    }
    
    public function getTpvKey() {
        return $this->tpvInfo['TPV_KEY'];
    }
    
    public function getDispatchUrl() {
        return $this->tpvInfo['DISPATCH_URL'];
    }

    public function getMerchantUrl() {
        return $this->tpvInfo['MERCHANT_URL'];
    }
    
    public function getActive() {
        return $this->tpvInfo['ACTIVE'];
    }
    
    public function getUrlOk($language) {
        if($language == 'es')
            return $this->tpvInfo['URLOKES'];
        else
            return $this->tpvInfo['URLOKEN'];
    }
    
    public function getUrlKo($language) {
        if($language == 'es')
            return $this->tpvInfo['URLKOES'];
        else
            return $this->tpvInfo['URLKOEN'];
    }
    
};

?>
