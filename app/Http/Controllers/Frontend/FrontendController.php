<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Area;
use App\Models\Category;
use App\Models\TypeCook;
use App\Models\TypeProduct;
use App\Models\TypeQuality;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\View\View;
use Illuminate\Support\Facades\View;


class FrontendController extends Controller
{
    public function __construct()
    {
        $areas = Area::all();
        $categories = Category::all();
        $typeCooks = TypeCook::all();
        $typeProducts = TypeProduct::all();
        $typeQualitys = TypeQuality::all();
        View::share('areas',$areas);
        View::share('categories',$categories);
        View::share('typeCooks',$typeCooks);
        View::share('typeProducts',$typeProducts);
        View::share('typeQualitys',$typeQualitys);


//        View::share('areas','categories','typeCooks','typeProducts','typeQualitys',$areas,$categories,$typeCooks,$typeProducts,$typeQualitys);
    }
}
