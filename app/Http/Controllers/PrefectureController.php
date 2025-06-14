<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\PrefectureService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PrefectureController extends Controller
{
    /**
     * @param PrefectureService $service
     */
    public function __construct(private PrefectureService $service)
    {
        // Do something...
    }

    /**
     * @param Request $request
     *
     * @return Collection|LengthPaginator
     */
    public function index(Request $request): Collection|LengthAwarePaginator
    {
        return $this->service->search($request->all());
    }
}
