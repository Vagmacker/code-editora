<?php

namespace CodePub\Repositories;

use CodePub\Criteria\CriteriaOnlyTrashedInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface CategoryRepository
 * @package namespace CodePub\Repositories;
 */
interface CategoryRepository extends RepositoryInterface, CriteriaOnlyTrashedInterface
{
    public function listsWithMutators($column, $key = null);
}
