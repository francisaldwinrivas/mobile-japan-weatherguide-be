<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\IService;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Builder;

class PrefectureService extends BaseService implements IService
{
    /**
     * @param Prefecture $model
     */
    public function __construct(Prefecture $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $args
     *
     * @return Prefecture
     */
    public function create(array $args): Prefecture
    {
        $needle = ['id' => null];

        return $this->upsert($needle, $args);
    }

    /**
     * @param int $prefectureId
     * @param array $args
     *
     * @return Prefecture
     */
    public function update(int $prefectureId, array $args): Prefecture
    {
        $needle = ['id' => $prefectureId];

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
