<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\EmailControllers;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $users = User::get();
        $users = User::paginate(2);
        if (isset($request->keyword)) {
            $keyword = $request->keyword;
            $users = User::where('name', 'like', "%$keyword%")
                ->paginate(2);
        }

        return view('b3.vd1.index', compact('users'));
    }
    public function create()
    {
        return view('b3.vd1.create');
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Lưu hình ảnh gốc vào thư mục "storage/images"
            $image->storeAs('public/images', $filename);

            // Đường dẫn đến hình ảnh lưu trong cơ sở dữ liệu
            $user->image = 'images/' . $filename;
        }
        $user->save();
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('b3.vd1.edit ', compact('user')) . $id;
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if ($request->hasFile('image')) {
            // Tải lên hình ảnh mới
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);

            // Cập nhật đường dẫn hình ảnh trong cơ sở dữ liệu
            $user->image = 'images/' . $filename;

            // Xóa hình ảnh cũ (nếu có)
            $oldImage = $user->getOriginal('image');
            if ($oldImage && $oldImage !== $user->image) {
                Storage::delete('public/' . $oldImage);
            }
        }
        $user->save();
        return redirect()->route('user.index');
    }



    public function delete($id)
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }
    
    public function show($id)
    {
        $user = User::find($id);
        return view('b3.vd1.show', compact('user'));
    }
}
