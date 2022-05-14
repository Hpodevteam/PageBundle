<?php

namespace Hippocampe\Bundle\PageBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

abstract class AbstractRepository extends ServiceEntityRepository
{
    public function refresh($entity)
    {
        $this->_em->refresh($entity);
    }

    public function save($entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();
    }

    public function remove($entity)
    {
        $this->_em->remove($entity);
        $this->_em->flush();
    }

    public function persist($entity)
    {
        $this->_em->persist($entity);
    }

    public function flush()
    {
        $this->_em->flush();
    }

    public function clear()
    {
        $this->_em->clear();
    }
}
