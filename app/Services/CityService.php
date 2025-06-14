<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\IService;
use App\Models\City;
use Illuminate\Database\Eloquent\Builder;

class CityService extends BaseService implements IService
{
    /**
     * @param City $model
     */
    public function __construct(City $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $args
     *
     * @return City
     */
    public function create(array $args): City
    {
        $needle = ['id' => null];

        return $this->upsert($needle, $args);
    }

    /**
     * @param int $cityId
     * @param array $args
     *
     * @return City
     */
    public function update(int $cityId, array $args): City
    {
        $needle = ['id' => $cityId];

        return $this->upsert($needle, $args);
    }

    /**
     * @param array $args
     *
     * @return Builder
     */
    public function builder(array $args): Builder
    {
        $query = $this->model->query();

        if (isset($args['id'])) {
            $query = $query->where('id', $args['id']);
        }

        if (isset($args['name'])) {
            $query = $query->where('name', 'like', '%'.$args['name'].'%');
        }

        if (isset($args['code'])) {
            $query = $query->where('code', $args['code']);
        }

        return $query;
    }
}
