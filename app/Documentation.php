<?php namespace app;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;

class Documentation
{

    /**
     * The filesystem implementation.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * The cache implementation.
     *
     * @var Cache
     */
    protected $cache;

    /**
     * The cache lifetime.
     *
     * @var integer
     */
    protected $lifetime = 1140;

    /**
     * Create a new documentation instance.
     *
     * @param  Filesystem  $files
     * @param  Cache  $cache
     * @return void
     */
    public function __construct(Filesystem $files, Cache $cache)
    {
        $this->files = $files;
        $this->cache = $cache;
    }

    /**
     * Determine whether the caching feature is enabled.
     *
     * @return boolean
     */
    public function useCache()
    {
        return ! app()->isLocal();
    }

    /**
     * Get file contents from the given path and render it using markdown.
     *
     * @param  string $path
     * @param  string|null $default
     * @return string|null
     */
    public function getContents($path, $default = null)
    {
        if ($this->files->exists($path)) {
            return markdown($this->files->get($path));
        }

        return $default;
    }

    /**
     * Get the documentation index page.
     *
     * @param  string  $version
     * @return string
     */
    public function getIndex($version)
    {
        $path = base_path('resources/docs/'.$version.'/documentation.md');

        if ($this->useCache()) {
            return $this->cache->remember('docs.'.$version.'.index', $this->lifetime,
                function () use ($version, $path) {
                    return $this->getContents($path);
                });
        }

        return $this->getContents($path);
    }

    /**
     * Get the given documentation page.
     *
     * @param  string  $version
     * @param  string  $page
     * @return string
     */
    public function get($version, $page)
    {
        $path = base_path('resources/docs/'.$version.'/'.$page.'.md');

        if ($this->useCache()) {
            return $this->cache->remember('docs.'.$version.'.index', $this->lifetime,
                function () use ($version, $path) {
                    return $this->getContents($path);
                });
        }
        
        return $this->getContents($path);
    }
}
