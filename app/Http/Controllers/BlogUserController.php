<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogUser;
use App\User;

class BlogUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogUsers = BlogUser::all();
        return view('blogUsers.index', ['blogUsers' => $blogUsers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::orderBy('name', 'asc')->get();
        return view('blogUsers.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date_of_birth' => 'nullable|date',
            'status' => 'nullable|max:255',
            'phone_number' => 'nullable|numeric',
            'user_id' => 'required|integer',
        ]);

        $user = new BlogUser;
        $user->name = $validatedData['name'];
        $user->date_of_birth = $validatedData['date_of_birth'];
        $user->status = $validatedData['status'];
        $user->phone_number = $validatedData['phone_number'];
        $user->user_id = $validatedData['user_id'];
        $user->save();

        session()->flash('message', 'Blogger was created.');
        return redirect()->route('blogUsers.index');
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
        $blogUser = BlogUser::findOrFail($id);
        return view('blogUsers.show', ['blogUser' => $blogUser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::orderBy('name', 'asc')->get();
        $blogUser = BlogUser::findOrFail($id);
        return view('blogUsers.edit', ['blogUser' => $blogUser, 'users' => $users]);
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
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date_of_birth' => 'nullable|date',
            'status' => 'nullable|max:255',
            'phone_number' => 'nullable|numeric',
            'user_id' => 'required|integer',
        ]);

        $blogUser = BlogUser::findOrFail($id);
        $blogUser->name = $validatedData['name'];
        $blogUser->date_of_birth = $validatedData['date_of_birth'];
        $blogUser->status = $validatedData['status'];
        $blogUser->phone_number = $validatedData['phone_number'];
        $blogUser->user_id = $validatedData['user_id'];
        $blogUser->save();

        session()->flash('message', 'Blogger was updated.');
        return redirect()->route('blogUsers.index');
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
        $blogUser = BlogUser::findOrFail($id);
        $blogUser->delete();

        //Redirect to bloggers page with session message.
        return redirect()->route('blogUsers.index')->with('message', 'Blogger was deleted.');
    }
}
