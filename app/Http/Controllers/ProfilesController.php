<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\File;
class ProfilesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        if($file = $request->file('memo')) {
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
        }


        $profile = Profile::create($input);

        $files = $request->file('files');

        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('images',  $name);

                $profile->files()->save(new File(['filename' => $name]));
            }
        }

        return redirect('/profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.edit', compact('profile'));
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

        $profile = Profile::findOrFail($id);

        $input = $request->all();
//        if($file = $request->file('memo')) {
//            $name = $file->getClientOriginalName();
//            $file->move('images', $name);
//            $input->memo = $name;
//        }

        $profile->update($input);

        $files = $request->file('files');

        if($request->hasFile('files'))
        {
            foreach ($files as $file) {

                $name = $file->getClientOriginalName();
                $file->move('images',  $name);

                $profile->files()->save(new File(['filename' => $name]));
            }
        }


        return redirect('/profiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
        $profile = Profile::findOrFail($id);

        $profile->delete();
        return redirect('/profiles');
    }


    public function minutes()
    {
        $files = File::where(['file_type' => 'minutes'])->get();
        return view('minutes', compact('files'));
    }

    public function memos()
    {
        $files = File::where(['file_type' => 'memo'])->get();

        return view('memos', compact('files'));
    }

    public function cases()
    {
        $files = File::where('profile_id', '<>', '')->get();

        return view('cases', compact('files'));
    }

    public function createMinute(Request $request)
    {
        $files = $request->file('files');
        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('images',  $name);
                $entry = new File();
                $entry->filename = $name;
                $entry->file_type = 'minutes';
                $entry->save();
            }
        }

        return redirect('/minutes');
    }

    public function createMemo(Request $request)
    {
        $files = $request->file('files');
        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('images',  $name);
                $entry = new File();
                $entry->filename = $name;
                $entry->file_type = 'memo';
                $entry->save();
            }
        }

        return redirect('/memos');
    }
}
