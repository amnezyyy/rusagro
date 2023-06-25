<?php

namespace App\Libraries\Action\Admin;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsCreate
{
    public function __construct(private Request $news){}

    public function heandle(): string
    {
        $path = 'img/uploads/news_img/'. time() . $this->news->file('img_news')->getClientOriginalName();
        File::put(storage_path('app/public/' . $path), $this->news->file('img_news')->getContent());
        Feed::create([
            'title_name'=>$this->news['title_name'],
            'des1'=>$this->news['des1'],
            'des2'=>$this->news['des2'],
            'img_news'=>$path,
            'date'=>date("d M / Y")
        ]);
        return json_encode(true);
    }
}
