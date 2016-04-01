<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class TPVPostData{
    /**
     * @SerializedName("operation[Ds_Merchant_Amount]")
     */
    /*
     * Obligatorio. Para Euros las dos últimas posiciones
     * se consideran decimales.
     */
    protected $Ds_Merchant_Amount;

    /**
     * @SerializedName("operation[Ds_Merchant_Currency]")
     */
    protected $Ds_Merchant_Currency;

    /**
     * @SerializedName("operation[Ds_Merchant_Order]")
     */
    /*
     * Obligatorio. Los 4 primeros dígitos deben ser
     * numéricos, para los dígitos restantes solo utilizar
     * los siguientes caracteres ASCII
     * Del 30 = 0 al 39 = 9
     * Del 65 = A al 90 = Z
     * Del 97 = a al 122 = z
     */
    protected $Ds_Merchant_Order;

    /**
     * @Type("string")
     * @SerializedName("operation[Ds_Merchant_ProductDescription]")
     */
    /*
     * Opcional. 125 se considera su longitud máxima.
     * Este campo se mostrará al titular en la pantalla
     * de confirmación de la compra.
     */
    protected $Ds_Merchant_ProductDescription;

    /**
     * @Type("string")
     * @SerializedName("operation[Ds_Merchant_UrlConfirm]")
     */
    /*
     * Obligatorio si el comercio tiene notificación “online”. URL del comercio que recibirá un post con
     * los datos de la transacción.
     */
    protected $Ds_Merchant_UrlConfirm;

    /**
     * @Type("string")
     * @SerializedName("operation[Ds_Merchant_UrlOK]")
     */
    /*
     * Opcional: si se envía será utilizado como URLOK
     * ignorando el configurado en el módulo de
     * administración en caso de tenerlo.
     */
    protected $Ds_Merchant_UrlOK;

    /**
     * @Type("string")
     * @SerializedName("operation[Ds_Merchant_UrlKO]")
     */
    /*
     * Opcional: si se envía será utilizado como URLKO
     * ignorando el configurado en el módulo de
     * administración en caso de tenerlo
     */
    protected $Ds_Merchant_UrlKO;

    /**
     * @Type("string")
     * @SerializedName("operation[Ds_Merchant_MerchantName]")
     */
    /*
     * Será el nombre del comercio que aparecerá en el
     * ticket del cliente (opcional).
     */
    protected $Ds_Merchant_MerchantName;

    /**
     * @Type("string")
     * @SerializedName("operation[Ds_ClientSignature]")
     */
    protected $Ds_ClientSignature;

    /**
     * @Type("string")
     * @SerializedName("operation[Ds_Merchant_MerchantSignature]")
     */
    protected $Ds_Merchant_MerchantSignature;

    /**
     * @Type("string")
     * @SerializedName("operation[Ds_Merchant_Titular]")
     */
    /*
     * Su longitud máxima es de 60 caracteres.
     * Este campo se mostrará al titular en la pantalla de confirmación de la compra.
     */
    protected $Ds_Merchant_Titular;

    public function getAmount() {
        return $this->Ds_Merchant_Amount;
    }

    public function setAmount($Ds_Merchant_Amount){
        $this->Ds_Merchant_Amount = $Ds_Merchant_Amount;
    }

    public function getCurrency() {
        return $this->Ds_Merchant_Currency;
    }

    public function getClientSignature(){
        return $this->Ds_ClientSignature;
    }

    public function setCurrency($Ds_Merchant_Currency){
        $this->Ds_Merchant_Currency = $Ds_Merchant_Currency;
    }

    public function getMerchantOrder() {
        return $this->Ds_Merchant_Order;
    }

    public function setMerchantOrder($Ds_Merchant_Order){
        $this->Ds_Merchant_Order = $Ds_Merchant_Order;
    }

    public function getProductDescription() {
        return $this->Ds_Merchant_ProductDescription;
    }

    public function setProductDescription($Ds_Merchant_ProductDescription){
        $this->Ds_Merchant_ProductDescription = $Ds_Merchant_ProductDescription;
    }

    public function setMerchantCode($Ds_Merchant_MerchantCode){
        $this->Ds_Merchant_MerchantCode = $Ds_Merchant_MerchantCode;
    }

    public function getMerchantUrl() {
        return $this->Ds_Merchant_UrlConfirm;
    }

    public function setMerchantUrl($Ds_Merchant_MerchantURL){
        $this->Ds_Merchant_UrlConfirm = $Ds_Merchant_MerchantURL;
    }

    public function getUrlOK() {
        return $this->Ds_Merchant_UrlOK;
    }

    public function setUrlOK($Ds_Merchant_UrlOK){
        $this->Ds_Merchant_UrlOK = $Ds_Merchant_UrlOK;
    }

    public function getUrlKO() {
        return $this->Ds_Merchant_UrlKO;
    }

    public function setUrlKO($Ds_Merchant_UrlKO){
        $this->Ds_Merchant_UrlKO = $Ds_Merchant_UrlKO;
    }

    public function getMerchantName() {
        return $this->Ds_Merchant_MerchantName;
    }

    public function setMerchantName($Ds_Merchant_MerchantName){
        $this->Ds_Merchant_MerchantName = $Ds_Merchant_MerchantName;
    }

    public function getMerchantTitular() {
        return $this->Ds_Merchant_Titular;
    }

    public function setMerchantTitular($Ds_Merchant_Titular){
        $this->Ds_Merchant_Titular = $Ds_Merchant_Titular;
    }

    public function getMerchantSignature() {
        return $this->Ds_Merchant_MerchantSignature;
    }

    public function setMerchantSignature($Ds_Merchant_MerchantSignature){
        $this->Ds_Merchant_MerchantSignature = $Ds_Merchant_MerchantSignature;
    }

    public function setClientSignature($Ds_ClientSignature){
        $this->Ds_ClientSignature = $Ds_ClientSignature;
    }

    public function generateMerchantSignature($secretKey){
        /*
         * Digest=SHA-1(Ds_Merchant_Amount + Ds_Merchant_Order +Ds_Merchant_MerchantCode
            + DS_Merchant_Currency + Ds_Merchant_TransactionType + Ds_Merchant_MerchantURL + CLAVE SECRETA)
         */
        $key = $this->Ds_Merchant_Amount.$this->Ds_Merchant_Order.$secretKey;
        $key = md5($key);
        $this->Ds_Merchant_MerchantSignature = $key;
        return $key;
    }

    public function generateClientSignature($secretKey){
        /*
         * Digest=SHA-1(Ds_Merchant_Amount + Ds_Merchant_Order +Ds_Merchant_MerchantCode
            + DS_Merchant_Currency + Ds_Merchant_TransactionType + Ds_Merchant_MerchantURL + CLAVE SECRETA)
         */
        $key = $secretKey;
        $key = md5($key);
        $this->Ds_ClientSignature = $key;
        return $key;
    }
}