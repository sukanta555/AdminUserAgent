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
    
    // Fetch only products that are not soft deleted
    $product = Product::orderBy('created_at', 'DESC')->get();

     // Fetch both non-deleted and soft-deleted products
   // $product = Product::withTrashed()->orderBy('created_at', 'DESC')->get();

   // Fetch only soft-deleted products
    //$product = Product::onlyTrashed()->orderBy('created_at', 'DESC')->get();

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
/*
public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // Validate incoming request
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'product_code' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'product_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
    ]);

    // Log the request data for debugging
    Log::info('Request data: ', $request->all());

    // Check if new image is uploaded
    if ($request->hasFile('product_img')) {
        Log::info('New image is uploaded.');

        // Delete old image if exists
        if ($product->product_img && Storage::disk('public')->exists($product->product_img)) {
            Log::info('Deleting old image: ' . $product->product_img);
            Storage::disk('public')->delete($product->product_img);
        }

        // Upload new image
        $filePath = $request->file('product_img')->store('images', 'public');
        Log::info('New image uploaded: ' . $filePath);

        // Set new image path in validated data
        $validatedData['product_img'] = $filePath;
    } else {
        Log::info('No new image uploaded. Retaining old image.');

        // Retain the old image if no new image is uploaded
        $validatedData['product_img'] = $product->product_img;
    }

    // Before updating, log the validated data
    Log::info('Validated data before update: ', $validatedData);

    // Update product with validated data
    $product->update($validatedData);

    // After update, log the product data
    Log::info('Product after update: ', $product->toArray());

    return redirect()->route('products')->with('success', 'Product updated successfully');
}
*/

public function update(Request $request, $id)
{
    // Validation rules
    $request->validate([
        'title' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'product_code' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'product_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Find product by ID
    $product = Product::findOrFail($id);

    // Update product details
    $product->title = $request->title;
    $product->product_name = $request->product_name;
    $product->product_code = $request->product_code;
    $product->price = $request->price;
    $product->description = $request->description;

    if ($request->hasFile('product_img')) {
        $product->product_img = $request->file('product_img')->store('products', 'public');
    }

    $product->save();

    return redirect()->route('products')->with('success', 'Product updated successfully!');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $product = Product::findOrFail($id);

    $product->delete(); // This will now perform a soft delete

    return redirect()->route('products')->with('success', 'Product deleted successfully');
}
// data restore
public function restore(string $id)
{
    $product = Product::withTrashed()->findOrFail($id);

    $product->restore();

    return redirect()->route('products')->with('success', 'Product restored successfully');
}

}