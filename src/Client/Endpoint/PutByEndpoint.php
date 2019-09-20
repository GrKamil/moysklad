<?php

namespace MoySklad\Client\Endpoint;

use MoySklad\Client\EntityClientBase;
use MoySklad\Entity\MetaEntity;
use MoySklad\Http\RequestExecutor;
use MoySklad\Util\Exception\ApiClientException;

trait PutByEndpoint
{
    /**
     * @param string $id
     * @param MetaEntity $updatedEntity
     * @return MetaEntity
     * @throws ApiClientException
     * @throws \Exception
     */
    public function editById(string $id, MetaEntity $updatedEntity)
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new \Exception('The trait cannot be used outside the EntityClientBase class');
        }

        return RequestExecutor::path($this->getApi(), $this->getPath().$id)->body($updatedEntity)->put($this->getMetaEntityClass());
    }

    /**
     * @param MetaEntity $updatedEntity
     * @return MetaEntity
     * @throws ApiClientException
     * @throws \Exception
     */
    public function editByEntity(MetaEntity $updatedEntity)
    {
        return $this->editById($updatedEntity->id, $updatedEntity);
    }
}
