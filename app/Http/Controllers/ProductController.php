<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_content;
use Illuminate\Support\Facades\Auth;

use File;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product_content'] = Product_content::all();

        $data['product'] = Product::findOrFail(1);
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    public function createContent()
    {
        $data['product_content'] = Product_content::all();
        return view('admin.product.create_content', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        try {
            $photo = null;

            if ($request->hasFile('photo')) {
                $photo = $this->saveFile('product', $request->file('photo'));
            }

            $user = Auth::user();

            Product::create([
                'path' => '/uploads/product/',
                'photo' => $photo,
                'id_user' => $user->id,
            ]);

            return redirect()->route('product.index')
                             ->with(['success' => 'Data berhasil ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    public function storeContent(Request $request)
    {
        $product = Product::findOrFail(1);

        $request->validate([
            'title' => 'required|max:30',
            'link' => 'required',
            'description' => 'required',
        ]);

        try {
            Product_content::create([
                'id_product' => $product->id,
                'title' => $request->title,
                'link' => $request->link,
                'description' => $request->description,
            ]);

            return redirect()->route('product.index')
                             ->with(['success' => 'Data berhasil ditambahkan']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = Product::findOrFail($id);
        return view('admin.product.edit', compact('data'));
    }

    public function editContent($id)
    {
        $data['product_content'] = Product_content::all();

        $data['product_edit'] = Product_content::findOrFail($id);
        return view('admin.product.edit_content', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'nullable|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        try {
            $misi = Product::findOrfail($id);

            $photo = $misi->photo;

            if ($request->hasFile('photo')) {
                !empty($photo) ? File::delete(public_path('uploads/product/' . $photo)) : null;
                $photo = $this->saveFile('product', $request->file('photo'));
            }

            $misi->update([
                'photo' => $photo,
            ]);

            return redirect()->route('product.index')
                             ->with(['success' => 'Data berhasil dirubah']);
        } catch (\Exception $e) {
            return redirect()->back()
                   ->with(['error' => $e->getMessage()]);
        }
    }

    public function updateContent(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:30',
            'description' => 'required',
        ]);

        try {
            $product_content = Product_content::findOrfail($id);

            $product_content->update([
                'title' => $request->title,
                'link' => $request->link,
                'description' => $request->description,
            ]);

            return redirect()->route('product.index')
                             ->with(['success' => 'Konten berhasil dirubah']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function destroyContent($id)
    {
        try{
            Product_content::findOrfail($id)->delete();
            return redirect()->route('product.index')
                             ->with(['success' => 'Konten berhasil dihapus']);
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    private function saveFile($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/product');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->resize(377, 559)->save($path . '/' . $images);
        return $images;
    }
}
