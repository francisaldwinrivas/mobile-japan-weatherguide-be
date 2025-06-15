<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Services\CityService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CityController extends Controller
{
    /**
     * @param CityService $service
     */
    public function __construct(private CityService $service)
    {
        // Do something...
    }

    /**
     * @param Request $request
     *
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $result = $this->service->search($request->all());

        return CityResource::collection($result);
    }
}
