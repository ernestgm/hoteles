<?php
namespace Cubanacan\WSBundle\DependencyInjection;


use Cubanacan\WSBundle\WSClass\AboutResponse;
use Cubanacan\WSBundle\WSClass\EntityIdResponse;
/*use Cubanacan\WSBundle\WSClass\HotelsDetailsResponse;
use Cubanacan\WSBundle\WSClass\HotelsSliderEntriesResponse;
use Cubanacan\WSBundle\WSClass\HotelsSliderEntry;
use Cubanacan\WSBundle\WSClass\LocationsWithHotelsResponse;
use Cubanacan\WSBundle\WSClass\LocationWithHotels;
use Cubanacan\WSBundle\WSClass\BrandsWithHotelsResponse;
use Cubanacan\WSBundle\WSClass\BrandsWithHotels;
use Cubanacan\WSBundle\WSClass\ThemesWithHotelsResponse;
use Cubanacan\WSBundle\WSClass\ThemeWithHotels;*/
use Cubanacan\WSBundle\WSClass\TitlesResponse;
use Cubanacan\WSBundle\WSClass\TPVData;
use Cubanacan\WSBundle\WSClass\TPVPostData;
use Cubanacan\WSBundle\WSClass\TPVResponse;
use Cubanacan\WSBundle\WSClass\TermsOfUseResponse;
/*use Doctrine\DBAL\Types\ArrayType;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Validator\Constraints\Null;
use Cubanacan\WSBundle\DependencyInjection\TpvConfig;
use Zend\Stdlib\ArrayUtils;*/

include_once 'apiRedsys.php';
//header ('Content-type: text/html; charset=utf-8');


class WSService {

    private $utilService;
    private $entityService;
    private $contactService;
    private $newsletterService;
    private $urlWS;
    private $userWS;
    private $passWS;
    private $serializer;

    public function __construct($utilService, $entityService){
        $this->utilService       = $utilService;
        $this->entityService     = $entityService;

        $this->urlWS        = $this->entityService->getValueFromConfig("URL_WS_CENTRAL_BOOKING");
        $this->userWS       = $this->entityService->getValueFromConfig("WS_USER ");
        $this->passWS       = $this->entityService->getValueFromConfig("WS_PASS ");
        $this->serializer = \JMS\Serializer\SerializerBuilder::create()->build();
    }

    public function getHotelsSliderEntries() {
        /*$hotels = $this->getHotels();

        if(!$hotels)
            return null;

        $hotelsCount = 5;
        $index = rand(0, sizeof($hotels)-$hotelsCount);
        $response = new HotelsSliderEntriesResponse();

        while($hotelsCount >= 0 && $index < sizeof($hotels)) {
            $currentHotel = $hotels[$index];

            if(sizeof($currentHotel->getImages()->getImage())) {
                $entry = new HotelsSliderEntry();

                $entry->setHotelCategory($currentHotel->getCategoryEnum());
                $entry->setHotelId($currentHotel->getHotelId());
                $entry->setHotelName($currentHotel->getName());
                $entry->setImageUrl(str_replace("-thumb","", $currentHotel->getImages()->getImage()[0]->getImageUrl()));

                $arr = $response->getEntries();
                $arr[sizeof($arr)] = $entry;
                $response->setEntries($arr);

                $hotelsCount--;
            }
            $index++;
        }
        $response->setOperationMessage("OK");
        return $this->serializer->serialize($response, 'json');*/
    }

    public function getHotels() {
        $req  = array("functionName"=> "getHotelsDetails",
            "paramsJson"  => "null");
        $response = $this->sendPost($req);

        if(!$response)
            return null;

        $entry = $this->serializer->deserialize($response, 'Cubanacan\WSBundle\WSClass\HotelsDetailsResponse', 'json');
        return $entry->getHotelsDetailsResult()->getHotelsDetails();
    }

    public function prepareTPVData($params){
        try{
            $tpvInfo = $this->serializer->deserialize($params, 'Cubanacan\WSBundle\WSClass\TPVInfo', 'json');

            $param  = array("functionName"=> "getRoomReservation",
                "paramsJson"  => $tpvInfo->getId());

            $response = $this->sendPost($param);
            $roomReservationGetResponse = $this->serializer->deserialize($response, 'Cubanacan\WSBundle\WSClass\RoomReservationGetResponse', 'json');
            $roomReservation = $roomReservationGetResponse->getRoomReservation();
            $response = $this->getTPVConfig($roomReservation, 2, '', $tpvInfo->getLanguage());
            return $response;
        }
        catch(\Exception $e){
            $entityResponse = new EntityIdResponse();
            $entityResponse->setOperationMessage("E07& ".$e->getMessage());
            $response = $this->serializer->serialize($entityResponse, 'json');
            return $response;
        }
    }

    public function sendPost($param, $language="es")
    {
        //TODO revisar para pasar idioma
        //return $this->utilService->sendPostToUrl($this->urlWS, $param, null, $this->userWS, $this->passWS, $language);
        return $this->utilService->getDataServer($this->urlWS,$param,$this->userWS, $this->passWS,$language);
    }
}

?>
