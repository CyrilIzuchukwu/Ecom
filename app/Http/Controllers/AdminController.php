<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function admin_dashboard()
    {
        return view('admin.index');
    }


    public function category()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.category', compact('categories'));
    }


    public function add_category(Request $request)
    {
        //validation of inputs
        $validator = $request->validate([
            'category' => 'required|unique:categories,category',
        ], [
            'category.unique' => 'This category already exists.',
        ]);


        Category::create($validator);

        return redirect()->back()->with('success', 'Category added successfully');
    }

    public function deleteCategory($id)
    {
        // dd($id);
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }


    public function createProduct()
    {
        return view('admin.createProduct');
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'productName' => 'required|max:255',
            'productCategory' => 'required|max:255',
            'productImage' => ['nullable', 'file', 'max:10000'],
            'productDescription' => 'required',
            'manufacturerName' => 'required|max:255',
            'status' => 'required',
            'productPrice' => 'required',
            'discountPrice' => 'nullable',
            'warranty' => 'nullable|max:255',
        ]);

        $product = new Product();
        $product->productName = $request->productName;
        $product->productCategory = $request->productCategory;
        $product->productDescription = $request->productDescription;
        $product->manufacturerName = $request->manufacturerName;
        $product->status = $request->status;
        $product->productPrice = $request->productPrice;
        $product->discountPrice = $request->discountPrice;
        $product->quantity = $request->quantity;
        $product->warranty = $request->warranty;
        $product->featuredProduct = $request->featuredProduct;
        // mountain.jpg;

        if ($request->hasFile('productImage')) {
            $image = $request->file('productImage');
            $productImage = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('productFolder'), $productImage);
            $product->productImage = $productImage;
        }

        $product->save();
        return redirect()->back()->with('message', 'Product added successfully');
    }


    public function products()
    {
        return view('admin.products');
    }
}
