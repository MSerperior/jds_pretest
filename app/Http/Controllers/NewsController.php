<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Resources\NewsResource;
use App\Services\News\NewsService;

class NewsController extends Controller
{
    protected $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = $this->newsService->simplePaginate(2);

        return NewsResource::collection($news);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $validated = $request->validated();

        if($request->hasFile('news_image'))
        {
            $validated['news_image'] = $request->file('news_image')->store('uploads', 'public');
        }

        return $this->newsService->create($validated);

    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        $news = $this->newsService->findWithCommentsAndUserComment($news->uuid);

        return new NewsResource($news);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $validated = $request->validated();

        if($request->hasFile('news_image'))
        {
            $validated['news_image'] = $request->file('news_image')->store('uploads', 'public');
        }

        return $this->newsService->update($news->uuid, $validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        return $this->newsService->delete($news->uuid);
    }
}
