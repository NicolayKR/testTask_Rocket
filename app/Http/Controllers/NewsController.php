<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function getNews(){
        $result = News::selectRaw('description_newss, date_news')->get();         
        return $result;  
    }
}
