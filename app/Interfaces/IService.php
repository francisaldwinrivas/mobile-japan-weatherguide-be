<?php

declare(strict_types=1);

namespace App\Interfaces;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface IService
{
    /**
     * @param array $needle
     * @param array $args
     *
     * @return Model
     */
    public function upsert(array $needle, array $args): Model;

    /**
     * @param array $args
     *
     * @return Model
     */
    public function create(array $args): Model;

    /**
     * @param int $id
     * @param array $args
     *
     * @return Model
     */
    public function update(int $id, array $args): Model;

    /**
     * @param Model|int $model
     *
     * @return bool
     */
    public function delete(Model|int $id): bool;

    /**
     * @param array $args
     *
     * @return Model
     */
    public function get(array $args): Model;

    /**
     * @param array $args
     *
     * @return Builder
     */
    public function builder(array $args): Builder;

    /**
     * @param array $args
     *
     * @return Collection|LengthAwarePaginator
     */
    public function search(array $args): Collection|LengthAwarePaginator;
}
