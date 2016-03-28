<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

/**
 * HabitacionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HabitacionRepository extends EntityRepository
{
    public function findAllPaginated($limit, $page, array $sorting = array(), array $filters = array())
    {
        $fields = array_keys($this->getClassMetadata()->fieldMappings);
        $queryBuilder = $this->createQueryBuilder('p');

        $count = 0;
        foreach($filters as $key=>$value){
            if ($count == 0)
                $queryBuilder->where('p.'.$key.' like :'.strtoupper($key));
            else
                $queryBuilder->andWhere('p.'.$key.' like :'.strtoupper($key));

            $queryBuilder->setParameter(strtoupper($key), '%'.$value.'%');
            $count++;
        }

        foreach ($fields as $field) {
            if (isset($sorting[$field])) {
                $direction = ($sorting[$field] === 'asc') ? 'asc' : 'desc';
                $queryBuilder->addOrderBy('p.'.$field, $direction);
            }
        }



        $pagerAdapter = new DoctrineORMAdapter($queryBuilder);
        $pager = new Pagerfanta($pagerAdapter);
        $pager->setCurrentPage($page);
        $pager->setMaxPerPage($limit);

        return $pager;
    }
}
