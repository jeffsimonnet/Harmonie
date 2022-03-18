<?php

namespace App\Service;

use Symfony\Contracts\Cache\CacheInterface;

class VideoCacheManager
{
    private $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function getVideos()
    {
        return $this->cache->get(
            'videos',
            function () {
                $videos = [];
                try {
                    $nextPageToken = '';
                    $youtube = new \Madcoda\Youtube\Youtube(['key' => $_ENV['YOUTUBE_API_KEY']]);
                    do {
                        $query = $youtube->getPlaylistItemsByPlaylistIdAdvanced([
                            'playlistId' => $_ENV['YOUTUBE_PLAYLIST_ID'],
                            'part' => 'snippet',
                            'maxResults' => 10,
                            'pageToken' => $nextPageToken,
                        ], true);
                        foreach ($query['results'] as $video) {
                            if ($video->snippet->title != 'Deleted video') array_push($videos, $video); // NOTE there is no proper flag to see if a video is deleted
                        }
                        $nextPageToken = $query['info']['nextPageToken'];
                    } while (!empty($nextPageToken));
                    // TODO there is a position number in the videos, maybe we should sort according to it
                } catch(\Exception $e) {
                    // TODO Fail silently ?
                    // throw $e;
                }
                return $videos;
            }
        );
    }
}
