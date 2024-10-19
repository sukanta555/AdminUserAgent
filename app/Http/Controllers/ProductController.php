<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage; // Add this line
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
/**
 * Display a listing of the resource.
 */
public function index()
{
    $product = Product::orderBy('created_at', 'DESC')->get();

    return view('products.index', compact('product'));
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    return view('products.create');
}

/**
 * Store a newly created resource in storage.
 */
/*public function store(Request $request)
{
    Product::create($request->all());
    return redirect()->route('products')->with('success', 'Product added successfully');
}*/

public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'product_code' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'product_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for the image
    ]);

    // Check if the request contains a file
    if ($request->hasFile('product_img')) {
        // Store the file in the 'public/images' directory
        $filePath = $request->file('product_img')->store('images', 'public');
        $validatedData['product_img'] = $filePath;
    }

    // Create a new product
    Product::create($validatedData);

    return redirect()->route('products')->with('success', 'Product added successfully');
}


/**
 * Display the specified resource.
 */
public function show(string $id)
{
    $product = Product::findOrFail($id);

    return view('products.show', compact('product'));
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    $product = Product::findOrFail($id);

    return view('products.edit', compact('product'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'product_code' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'product_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Find the product
    $product = Product::findOrFail($id);

    // Check if a new image file is uploaded
    if ($request->hasFile('product_img')) {
        // Log the uploaded file information
        Log::info('New image uploaded: ' . $request->file('product_img')->getClientOriginalName());

        // Store the new image in the 'public/images' directory
        $filePath = $request->file('product_img')->store('images', 'public');

        // Optionally delete the old image file
        if ($product->product_img && Storage::exists('public/' . $product->product_img)) {
            Storage::delete('public/' . $product->product_img);
        }

        // Add the new image path to the validated data
        $validatedData['product_img'] = $filePath;
    } else {
        // Log if no new image is uploaded
        Log::info('No new image uploaded. Retaining old image.');
        $validatedData['product_img'] = $product->product_img;
    }

    // Update the product with the validated data
    $product->update($validatedData);

    return redirect()->route('products')->with('success', 'Product updated successfully');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $product = Product::findOrFail($id);

    $product->delete();

    return redirect()->route('products')->with('success', 'product deleted successfully');
}
}