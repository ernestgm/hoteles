<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Description of RoomReservation
 *
 * @author obretau
 */
class RoomReservation extends Entity{

    protected $referenceCode;
    protected $checkIn;
    protected $checkOut;
    protected $bookDate;
    /**
     * @var PaymentMethodEnum paymentMethod
     *
     */
    protected $paymentMethod;
    /**
     * @var array BookedRoomDetails $bookedRoomDetails
     * @Type("Cubanacan\WSBundle\WSClass\ArrayBookedRoomDetails")
     *
     * @SerializedName("rooms")
     */
    protected $rooms;
    /**
     * @var  UserInfo userInfo
     *
     */
    protected $userInfo;

    /**
     * @var double $totalPrice
     * @Type("double")
     *
     * @SerializedName("totalPrice")
     */
    protected $totalPrice;
    /**
     * @var string $currency
     * @Type("string")
     *
     * @SerializedName("currency")
     */
    protected $currency;

    /**
     * @var string $reservationStatus
     * @Type("string")
     *
     * @SerializedName("reservationStatus")
     */
    protected $reservationStatus;

    /**
     * @var string $paymentStatus
     * @Type("string")
     *
     * @SerializedName("paymentStatus")
     */
    protected $paymentStatus;

    /**
     * @var string $modificationStatus
     * @Type("string")
     *
     * @SerializedName("modificationStatus")
     */
    protected $modificationStatus;

    /**
     * @var string $cancelationCause
     * @Type("string")
     *
     * @SerializedName("cancelationCause")
     */
    protected $cancelationCause;

    /**
     * @var boolean $noShow
     * @Type("boolean")
     *
     * @SerializedName("noShow")
     */
    protected $noShow;
    
    public function getReferenceCode() {
        return $this->referenceCode;
    }

    public function getCheckIn() {
        return $this->checkIn;
    }

    public function getCheckOut() {
        return $this->checkOut;
    }

    public function getBookDate() {
        return $this->bookDate;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
    }

    public function getRooms() {
        return $this->rooms;
    }

    public function getUserInfo() {
        return $this->userInfo;
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }

    public function getCurrency() {
        return $this->currency;
    }

    public function getReservationStatus() {
        return $this->reservationStatus;
    }

    public function getPaymentStatus() {
        return $this->paymentStatus;
    }

    public function getModificationStatus() {
        return $this->modificationStatus;
    }

    public function getCancelationCause() {
        return $this->cancelationCause;
    }

    public function getNoShow() {
        return $this->noShow;
    }

    public function setReferenceCode($referenceCode) {
        $this->referenceCode = $referenceCode;
        return $this;
    }

    public function setCheckIn($checkIn) {
        $this->checkIn = $checkIn;
        return $this;
    }

    public function setCheckOut($checkOut) {
        $this->checkOut = $checkOut;
        return $this;
    }

    public function setBookDate($bookDate) {
        $this->bookDate = $bookDate;
        return $this;
    }

    public function setPaymentMethod(PaymentMethodEnum $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function setRooms($rooms) {
        $this->rooms = $rooms;
        return $this;
    }

    public function setUserInfo(UserInfo $userInfo) {
        $this->userInfo = $userInfo;
        return $this;
    }

    public function setTotalPrice($totalPrice) {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    public function setReservationStatus($reservationStatus) {
        $this->reservationStatus = $reservationStatus;
        return $this;
    }

    public function setPaymentStatus($paymentStatus) {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    public function setModificationStatus($modificationStatus) {
        $this->modificationStatus = $modificationStatus;
        return $this;
    }

    public function setCancelationCause($cancelationCause) {
        $this->cancelationCause = $cancelationCause;
        return $this;
    }

    public function setNoShow($noShow) {
        $this->noShow = $noShow;
        return $this;
    }


}
