<?php 

namespace App\Http\Controllers;

use App\Models\Hr\Product;

trait Filter{
	public function filter()
	{
		$keys = ['popular', 'low', 'high'];
		
		if (in_array(request('filter'), $keys)) {
			switch (request('filter')) {
				case 'popular':
					return Product::orderBy('hit_count', 'dsc')->get();
					break;
				case 'low':
					return Product::orderBy('price', 'asc')->get();
					break;
				case 'high':
					return Product::orderBy('name', 'dsc')->get();
					break;
			}
		}
		else{
			return Product::orderBy('name', 'asc')->get();
		}
	}

	public function getPageTitle()
	{
		$keys = ['popular', 'low', 'high'];
		
		if (in_array(request('filter'), $keys)) {
			switch (request('filter')) {
				case 'popular':
					return 'Popular Foods';
					break;
				case 'low':
					return 'Filter With Low Price';
					break;
				case 'high':
					return 'Filter With High Price';
					break;
			}
		}
		else{
			return "Restaurant Menus";
		}
	}
}