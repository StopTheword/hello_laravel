<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{
    //
    public function create()
    {
      return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credenttials = $this->validate($request, [
          'email' => 'required|email|max:255',
          'password' => 'required'
        ]);
        if (Auth::attempt($credenttials, $request->has('remember'))) {
          //登录成功之后的操作
          session()->flash('success','欢迎回来');
          return redirect()->route('users.show',[Auth::user()]);
        } else {
          //登录失败的相关操作
          session()->flash('danger','很抱歉，您的邮箱和密码不匹配');
          return redirect()->back();
        }

        return;
    }

    public function destroy()
    {
      Auth::logout();
      session()->flash('success','您已经成功退出登录');
      return redirect('login');
    }

}
