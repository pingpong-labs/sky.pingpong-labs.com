<?php namespace App\Http\Controllers;

use App\Documentation;

class DocsController extends Controller
{

    /**
     * The documentation repository.
     *
     * @var Documentation
     */
    protected $docs;

    /**
     * Create a new controller instance.
     *
     * @param  Documentation  $docs
     * @return void
     */
    public function __construct(Documentation $docs)
    {
        $this->docs = $docs;
    }

    /**
     * Show the root documentation page (/docs).
     *
     * @return Response
     */
    public function showRootPage()
    {
        return redirect('docs/'.DEFAULT_VERSION);
    }

    /**
     * Show a documentation page.
     *
     * @return Response
     */
    public function show($version, $page = null)
    {
        if (! $this->isVersion($version)) {
            return redirect('docs/'.DEFAULT_VERSION.'/'.$version, 301);
        }

        $content = $this->docs->get($version, $page ?: 'README');

        if (is_null($content)) {
            abort(404);
        }

        return view('docs.index', [
            'content' => $content,
            'currentVersion' => $this->getCurrentVersion($version),
            'versions' => $this->getDocVersions(),
            'index' => $this->docs->getIndex($version),
        ]);
    }

    public function getCurrentVersion($version)
    {
        if ($this->isVersion($version)) {
            return $this->getDocVersions()[$version];
        }

        return $version;
    }

    /**
     * Determine if the given URL segment is a valid version.
     *
     * @param  string  $version
     * @return bool
     */
    protected function isVersion($version)
    {
        return in_array($version, array_keys($this->getDocVersions()));
    }

    /**
     * Get the available documentation versions.
     *
     * @return array
     */
    protected function getDocVersions()
    {
        return [
            'master' => 'Master',
            '1.0' => '1.0',
            '2.0' => '2.0',
            '2.1' => '2.1',
        ];
    }
}
