<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Asset;

class TrackAssetView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->route('assets.show')) {
            $asset = Asset::where('slug', $request->route('assets.show'))->first();

            if ($asset && (!auth()->check() || auth()->id() !== $asset->user_id)) {
                $asset->increment('view_count');
                $asset->click_rate = $asset->view_count / max($asset->view_count, 1);
                $asset->save();
            }
        }

        return $response;
    }
}
