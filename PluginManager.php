<?php
namespace Plugin\CrawlerBugTest;

use Eccube\Plugin\AbstractPluginManager;

class PluginManager extends AbstractPluginManager
{
    /**
     * インストール時に処理したい内容を記載する。
     *
     * @param yaml $config
     * @param \Eccube\Application $app
     */
    public function install($config, $app)
    {
//         $this->migrationSchema($app, __DIR__ . '/Migration', $config['code']);
    }

    /**
     * アンインストール時に処理したい内容を記載する。
     *
     * @param yaml $config
     * @param \Eccube\Application $app
     */
    public function uninstall($config, $app)
    {
//         $this->migrationSchema($app, __DIR__ . '/Migration', $config['code'], 0);
    }

    /**
     * プラグイン有効時に処理したい内容を記載する。
     *
     * @param yaml $config
     * @param \Eccube\Application $app
     */
    public function enable($config, $app)
    {
    }

    /**
     * プラグイン無効時に処理したい内容を記載する。
     *
     * @param yaml $config
     * @param \Eccube\Application $app
     */
    public function disable($config, $app)
    {
    }

    /**
     * アップデート時に処理したい内容を記載する。
     *
     * @param yaml $config
     * @param \Eccube\Application $app
     */
    public function update($config, $app)
    {
    }
}
