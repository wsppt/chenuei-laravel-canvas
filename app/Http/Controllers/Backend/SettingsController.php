<?php

namespace App\Http\Controllers\Backend;

use Session;
use App\Models\Settings;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsUpdateRequest;

class SettingsController extends Controller
{
    /**
     * Display the settings page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'blogTitle' => Settings::blogTitle(),
            'blogSubtitle' => Settings::blogSubTitle(),
            'blogDescription' => Settings::blogDescription(),
            'blogSeo' => Settings::blogSeo(),
            'blogAuthor' => Settings::blogAuthor(),
            'disqus' => Settings::disqus(),
            'analytics' => Settings::gaId(),
            'twitterCardType' => Settings::twitterCardType(),
            'url' => $_SERVER['HTTP_HOST'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'timezone' => env('APP_TIMEZONE'),
            'php_version' => phpversion(),
            'php_memory_limit' => ini_get('memory_limit'),
            'php_time_limit' => ini_get('max_execution_time'),
            'db_connection' => strtoupper(env('DB_CONNECTION')),
            'web_server' => $_SERVER['SERVER_SOFTWARE'],
            'last_index' => date('Y-m-d H:i:s', file_exists(storage_path('posts.index')) ? filemtime(storage_path('posts.index')) : false),
            'version' => (! empty(Settings::canvasVersion())) ? Settings::canvasVersion() : 'Less than or equal to v2.1.7',
        ];

        return view('backend.settings.index', compact('data'));
    }

    /**
     * Store the site configuration options. This is currently accomplished
     * by finding the specific option, deleting it, and then inserting
     * the new option.
     *
     * @param SettingsUpdateRequest $request
     *
     * @return \Illuminate\View\View
     */
    public function store(SettingsUpdateRequest $request)
    {
        Settings::updateField('blog_title',$request->toArray()['blog_title'] );

        Settings::updateField('blog_subtitle',$request->toArray()['blog_subtitle'] );

        Settings::updateField('blog_description',$request->toArray()['blog_description'] );

        Settings::updateField('blog_seo',$request->toArray()['blog_seo'] );

        Settings::updateField('blog_author',$request->toArray()['blog_author'] );

        Settings::updateField('disqus_name',$request->toArray()['disqus_name'] );

        Session::set('_update-settings', trans('messages.save_settings_success'));

        return redirect('admin/settings');
    }
}
