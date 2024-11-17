<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompressResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Dapatkan respons
        $response = $next($request);

        // Kompresi respons jika mendukung
        if (strpos($request->header('Accept-Encoding'), 'gzip') !== false) {
            $response->setContent(gzencode($response->getContent(), 9));
            $response->headers->set('Content-Encoding', 'gzip');
        }

        return $response;
    }
}
