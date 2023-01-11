<?php

namespace LvlupDev\Url;

use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Url
{
    public string $uri = '';
    public string $cacheKey = '';
    public CarbonInterval $cacheTtl;

    private int $status;
    private array $headers;
    private string $body;

    public function fetch(string $uri): self
    {
        $this->uri = $uri;
        $this->cacheKey = md5("lvlup-dev/url/" . $this->uri);
        $this->cacheTtl = CarbonInterval::hour();

        return Cache::remember($this->cacheKey, $this->cacheTtl, function () {
            $this->fetchLive();

            return $this;
        });
    }

    private function fetchLive(): void
    {
        $response = Http::withoutVerifying()->get($this->uri);

        $this->headers = $response->headers();
        $this->body = $response->body();
        $this->status = $response->status();
    }

    public function body(): string
    {
        return $this->body;
    }

    public function headers(): array
    {
        return $this->headers;
    }

    public function status(): int
    {
        return $this->status;
    }
}
