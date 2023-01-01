<?php

namespace App\Lib\LinkPreview;

interface LinkPreviewInterface
{
    public function getPreview(string $url): GetLinkPreviewResponse;
}
?>