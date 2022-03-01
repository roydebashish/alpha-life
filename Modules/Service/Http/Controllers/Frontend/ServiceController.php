<?php

namespace Modules\Service\Http\Controllers\Frontend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Page\Entities\Page;
use Modules\Service\Entities\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $products = Service::where('status', 1)->orderBy('order', 'asc')->paginate(9);
        $meta_page_type = 'website';
//        dd($products);
        return view('service::frontend.products.index', compact('products', 'meta_page_type'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($slug)
    {
        $content = Service::where('slug', $slug)->first();
        $meta_page_type = 'page';
        return view('service::frontend.products.show', compact('content', 'meta_page_type'));
    }
}