<?php
namespace Cubanacan\WSBundle\DependencyInjection;

/**
 * Description of EntityService
 *
 * @author obretau
 */
class EntityService {
    
    /*
     * Sesion activa.
     */
    private $session;
        
    /*
     * Entity Manager
     */
    private $em;
    
     /*
     * Message Service
     */
    private $messageService;
    
     /*
     * Util Service
     */
    private $utilService;
    
    public function __construct($session, $em, $utilService){
        $this->session  = $session;
        $this->em       = $em;
        $this->utilService = $utilService;
    }
    
    /**
     * Retorna una entidad
     * 
     * @param type $id
     * @return Entity
     */
    public function getEntity($id, $strEntity, $rute=null)
    {
        $entity = $this->getRepository($strEntity)->find($id);

        try{
            if (!$entity) {
                $this->messageService->sendFlagMessageNotFound();
                if($rute != null)
                    return $this->redirect($rute);
            }
        }
        catch(\Exception $exc)
        {
            $this->messageService->sendFlagMessage(1, $exc->getMessage());
            if($rute != null)
                return $this->redirect($rute);
        }
        return $entity;
    }
    
     /**
     * Persiste una entidad
     * 
     * @param type $entity
     * @return boolean
     */
    public function persistEntity($entity)
    {
        try{
            $this->em->persist($entity);
            $this->em->flush();
            //$this->messageService->sendFlagMessageSuccess();
        }
        catch(\Exception $exc)
        {
            $this->messageService->sendFlagMessage(1, $exc->getMessage());
            return false;
        }
        return true;
    }
    
    /**
     * Elimina una entidad
     * 
     * @param type $id
     * @return boolean
     */
    public function deleteEntity($entity)
    {
        try{
            $this->em->remove($entity);
            $this->em->flush();
            $this->messageService->sendFlagMessageSuccessDelete();
        }
        catch(\Exception $exc)
        {
            $this->messageService->sendFlagMessage(1, $exc->getMessage());
            return false;
        }
        return true;
    }
    
    /**
     * Convierte arreglo de objetos a id=>value con el id del objeto y el retorno del metodo __toString
     * 
     * @param type $id
     * @return boolean
     */
    public function listIdValue($arrayIn)
    {
        $arrayResult = array();
        foreach ($arrayIn as $value) {
            $arrayResult[$value->getId()] = $value->__toString();          
        }
        return $arrayResult;
    }
    
    /*
     * Devuelve el repositorio de una entidad
     * @param $strEntity es el string que identifica la entidad como: AcmeBundle:Entity
     */
    public function getRepository($strEntity)
    {
        return $this->em->getRepository($strEntity);
    }
    
    /*
     * Devuelve el ultimo ID que tiene la entidad o 0 en caso de no tener
     * @param $strEntity es el string que identifica la entidad como: AcmeBundle:Entity
     */
    public function getLastId($strEntity)
    {
        $entities = $this->getRepository($strEntity)->findAll();
        if(!$entities)
               $idAssit = 0;
        else
        {
           $lastEntity = end($entities);  
           $idAssit = $lastEntity->getId();
        }
        return $idAssit;
    }
    
    /*
     * Genera el código de una entidad que toca en el momento, en caso que esté 
     * vacio inicia en 5000, si no, el codigo se genera con el ultimo ID + 1, 
     * mas 4 numeros aleatorios
     * @param $strEntity Entidad que se quiere generar el numero
     * @param $character caracter que va en medio del id de reserva y los numeros aleatorios, se puede definir si es internauta o agencia.
     */
    public function generateCode($strEntity, $character = null)
    {   
        $idEntity = $this->getLastId($strEntity)+1;
        if($idEntity == 1)
               $idEntity = '5000';
        return $idEntity.$character.$this->utilService->randNumber();
    }
    
    /*
     * Devuelve el valor de la variable de configuración o null
     */
    public function getValueFromConfig($name) 
    {
        $row = $this->getRepository('CubanacanWSBundle:SystemConfig')->findOneByName($name);
        if(!$row)
             return null;        
        return $row->getValue();
    }
}

?>
