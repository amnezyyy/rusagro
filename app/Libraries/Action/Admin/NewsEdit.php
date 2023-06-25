<?php

namespace App\Libraries\Action\Admin;

use App\Models\Feed;

class NewsEdit
{
    public function __construct(private array $news, private int $news_id){}

    public function heandle(): string
    {
        Feed::where('id', $this->news_id)->update([
            'title_name' => $this->news['title_name'],
            'des1' => $this->news['des1'],
            'des2' => $this->news['des2']
        ]);
        return json_encode(true);
    }
}
