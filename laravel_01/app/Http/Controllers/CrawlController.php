<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Post;

class CrawlController extends Controller
{
    private $endpoint = 'https://moitruongachau.com/vn/du-an.html';
    /**
     * Display a listing of the resource.
     */
    public function getDataPost()
    {
        $response = Http::get($this->endpoint);
        $dom = new \DOMDocument();
        @$dom->loadHTML(mb_convert_encoding((string) $response->body(), 'HTML-ENTITIES',  'UTF-8'));

        $xpath = new \DOMXPath($dom);
        $images = $xpath->query('.//div //div[contains(@class, "thumbinfo")] //div[contains(@class, "thumb")] //a //img');
        $titles = $xpath->query('.//div //div[contains(@class, "decs")] //div[contains(@class, "pntitle")] //h3 //a');
        $subs = $xpath->query('.//div //div[contains(@class, "decs")] //div[contains(@class, "pntend")]');
        $address = $xpath->query('.//div //div[contains(@class, "thumbinfo")] //div[contains(@class, "info")] //ul //li[contains(@class,"fa-map-marker")] ');
        $type = $xpath->query('.//div //div[contains(@class, "thumbinfo")] //div[contains(@class, "info")] //ul //li[contains(@class,"fa-cog")] ');

        if ($images->length === $titles->length) {
            foreach ($titles as $key => $title) {
                $data[] = [
                    'image' => $images[$key] ? $images[$key]->getAttribute("src") : '',
                    'link' => $title->getAttribute("href"),
                    'title' => $title->textContent,
                    'sub' => $subs[$key] ? $subs[$key]->textContent : '',
                    'address' => $address[$key] ? $address[$key]->textContent : '',
                    'type' => $type[$key] ? $type[$key]->textContent : '',
                ];
            }
        } else {
            foreach ($titles as $key => $title) {
                $data[] = [
                    'image' => isset($images[$key]) ? $images[$key]->getAttribute("src") : '',
                    'link' => $title->getAttribute("href"),
                    'title' => $title->textContent,
                    'sub' => isset($subs[$key]) ? $subs[$key]->textContent : '',
                    'address' => isset($address[$key]) ? $address[$key]->textContent : '',
                    'type' => isset($type[$key]) ? $type[$key]->textContent : '',
                ];
            }
        }
        foreach ($data as $item) {
            Post::updateOrCreate(
                [
                    'title' => $item['title'],
                    'link' => $item['link'],
                    'image' => $item['image'],
                    'sub' => $item['sub'],
                    'address' => $item['address'],
                    'type' => $item['type'],
                ]
            );
        }
        dd($data);
        return $data;
    }
}
