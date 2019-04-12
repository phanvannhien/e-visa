<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Hash;

class SysUserController extends Controller
{
    public function index(){
        $data = Admin::paginate();
        return view('admin.sysusers.index', compact('data'));
    }

    public function edit(){}

    public function update(){}


    public function change_password(){
        $user = auth('admin')->user();
        return view('admin.sysusers.change_password',compact('user'));
    }


    public function save_change_password(Request $request){
        $user = auth('admin')->user();
        $old_password = $request->input('old_pass');
        $rules['old_pass'] = 'required';

        if( !empty($old_password) ){
            $rules['password'] = 'required|min:6|max:100|confirmed';
        }
        $validator = Validator::make($request->all(), $rules,[
            'old_pass.required' => 'Vui lòng nhập mật khẩu cũ',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Vui lòng nhập mật khẩu ít nhất 6 kí tự',
            'password.max' => 'Vui lòng nhập mật khẩu tối đa 100 kí tự',
            'password.confirmed' => 'Nhắc lại mật khẩu không trùng khớp',
        ]);
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        if( !empty($old_password) ) {
            $new_password = $request->input('password');
            if (Hash::check($old_password, $user->getAuthPassword())) {
                $user->password = Hash::make($new_password);
            } else {
                return back()->with(['warning' => 'Mật khẩu cũ không đúng']);
            }
        }

        if($user->save()) {
            return back()->with(['status' => 'Cập nhật thành công']);
        }

        return back()->with(['warning' => 'Cập nhật lỗi']);;
    }
}
