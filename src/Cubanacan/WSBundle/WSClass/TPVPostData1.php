<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class TPVPostData{
    /**
     * @Type("string")
     * @SerializedName("Ds_SignatureVersion")
     */
    protected $Ds_SignatureVersion;

    /**
     * @Type("string")
     * @SerializedName("Ds_MerchantParameters")
     */
    protected $Ds_MerchantParameters;

    /**
     * @Type("string")
     * @SerializedName("Ds_Signature")
     */
    protected $Ds_Signature;

    public function getDsSignatureVersion() {
        return $this->Ds_SignatureVersion;
    }

    public function setDsSignatureVersion($Ds_SignatureVersion){
        $this->Ds_SignatureVersion = $Ds_SignatureVersion;
    }

    public function getDsMerchantParameters() {
        return $this->Ds_MerchantParameters;
    }

    public function setDsMerchantParameters($Ds_MerchantParameters){
        $this->Ds_MerchantParameters = $Ds_MerchantParameters;
    }

    public function getDsSignature() {
        return $this->Ds_Signature;
    }

    public function setDsSignature($Ds_Signature){
        $this->Ds_Signature = $Ds_Signature;
    }

    public function getProductDescription() {
        return $this->Ds_Merchant_ProductDescription;
    }

    /*public function generateMerchantSignature($secretKey){
        /*
         * Digest=SHA-1(Ds_Merchant_Amount + Ds_Merchant_Order +Ds_Merchant_MerchantCode
            + DS_Merchant_Currency + Ds_Merchant_TransactionType + Ds_Merchant_MerchantURL + CLAVE SECRETA)
         */
        /*$key = $this->Ds_Merchant_Amount.$this->Ds_Merchant_Order.$this->Ds_Merchant_MerchantCode.
               $this->Ds_Merchant_Currency.$this->Ds_Merchant_TransactionType.$this->Ds_Merchant_MerchantURL.$secretKey;
        $key = strtoupper(sha1($key));
        $this->Ds_Merchant_MerchantSignature = $key;
        return $key;
    }*/
}