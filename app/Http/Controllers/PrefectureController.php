<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\PrefectureResource;
use App\Services\PrefectureService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

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
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $result = $this->service->search($request->all());

        return PrefectureResource::collection($result);
    }
}
