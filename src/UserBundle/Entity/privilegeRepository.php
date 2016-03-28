<?php

namespace UserBundle\Entity;

use Doctrine\ORM\EntityRepository;


class PrivilegeRepository extends EntityRepository
{
    public function findByCustom(array $filters){
        $qb = $this->createQueryBuilder('pri');
        $qb->where('1=1');

        if(array_key_exists('name', $filters)){
            if ($filters['name']){
                $qb->andWhere('pri.name LIKE :NAME');
                $qb->setParameter('NAME', '%'.trim($filters['name']).'%');
            }
        }

        if(array_key_exists('route', $filters)){
            if ($filters['route']){
                $qb->andWhere('pri.route LIKE :ROUTE');
                $qb->setParameter('ROUTE', '%'.trim($filters['route']).'%');
            }
        }
        return $qb;
    }

}
