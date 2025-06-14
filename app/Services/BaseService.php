<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseService
{
    /**
     * @var Model
     */
    protected Model $model;

    /**
     * @param array $needle
     * @param array $args
     *
     * @return Model
     */
    public function upsert(array $needle, array $args): Model
    {
        return $this->model->updateOrCreate($needle, $args);
    }

    /**
     * @param Model|int $model
     */
    public function delete(Model|int $model): bool
    {
        if (! $model instanceof $this->model) {
            $model = $this->model->findOrFail($model);
        }

        return $model->delete();
    }

    /**
     * @param array $args
     *
     * @return Model
     */
    public function get(array $args): Model
    {
        return $this->builder($args)->first();
    }

    /**
     * @param array $args
     *
     * @return Collection|LengthAwarePaginator
     */
    public function search(array $args): Collection|LengthAwarePaginator
    {
        $paginate = isset($args['pagination']);
        $query = $this->builder($args);

        if (isset($args['order_by'])) {
            $query = $this->queryOrderBy(
                $query,
                $args['order_by']['column'],
                $args['order_by']['direction'] ?? 'desc'
            );
        }

        if ($paginate) {
            return $query->paginate(
                perPage: $args['pagination']['per_page'],
                page: $args['pagination']['page'] ?? 1
            );
        }

        return $query->get();
    }

    /**
     * @param Builder $query
     * @param string $column
     * @param string $direction
     *
     * @return Builder
     */
    protected function queryOrderBy(Builder $query, string $column, string $direction = 'desc'): Builder
    {
        $query = $query->orderBy($column, $direction);

        return $query;
    }

    /**
     * @param array $args
     *
     * @return Builder
     */
    public function builder(array $args): Builder
    {
        return $this->model->query();
    }
}
