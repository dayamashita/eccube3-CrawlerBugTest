<?php
namespace Plugin\CrawlerBugTest;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\DomCrawler\Crawler;

class Event
{
    /**
     * 商品一覧ページのレンダリングイベント
     * Crawler から取得した HTML をそのまま渡すだけ
     *
     * @param FilterResponseEvent $event
     */
    public function onRenderProductListBefore(FilterResponseEvent $event)
    {
        $response = $event->getResponse();
        $html = $response->getContent();

        $crawler = new Crawler($html);
        $html = $this->getHtml($crawler);
        $response->setContent($html);
        $event->setResponse($response);
    }

    /**
     * Crawler から親要素も取得する
     *
     * @param Crawler $crawler
     */
    private function getHtml(Crawler $crawler)
    {
        $html = '';
        foreach ($crawler as $domElement) {
            $domElement->ownerDocument->formatOutput = true;
            $html .= $domElement->ownerDocument->saveHTML();
        }
        return html_entity_decode($html, ENT_NOQUOTES, 'UTF-8');
    }
}