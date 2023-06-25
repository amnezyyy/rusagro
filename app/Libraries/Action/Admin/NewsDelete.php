<?php

namespace App\Libraries\Action\Admin;

use App\Models\Feed;

class NewsDelete
{
    public function __construct(private int $news_id){}

    public function heandle(): string
    {
        Feed::where('id', $this->news_id)->delete();
        return json_encode(true);
    }
}
