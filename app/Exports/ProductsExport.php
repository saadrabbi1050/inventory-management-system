<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class ProductsExport implements FromView
{
    
    /**
     * Summary of view
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        return view('backend.products.product_excel', [
            'products' => Product::all()
        ]);
    }
}
