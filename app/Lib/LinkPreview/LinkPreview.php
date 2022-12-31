<?php
namespace App\Lib\LinkPreview;

use Dusterio\LinkPreview\Client;

final class LinkPreview
{
    /**
     * @param string $url
     * @return array
     */
    public function getPreview(string $url): array
    {
        $previewClient = new Client($url);
        return $previewClient->getPreview('general')->toArray();
    }
}
?>