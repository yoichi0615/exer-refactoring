<?php
namespace App\Lib\LinkPreview;

use Dusterio\LinkPreview\Client;
use App\Lib\LinkPreview\LinkPreviewInterface;
use App\Lib\LinkPreview\GetLinkPreviewResponse;

final class LinkPreview implements LinkPreviewInterface
{
    /**
     * @param string $url
     * @return array
     */
    public function getPreview(string $url): GetLinkPreviewResponse
    {
        $previewClient = new Client($url);
        $response = $previewClient->getPreview('general')->toArray();
        return new GetLinkPreviewResponse($response['title'], $response['description'], $response['cover']);
    }
}
?>