<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::latest()->get();
        return view('admin.message.message', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $imageNameOne = null;
    
        // Check if a company logo is uploaded
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Generate a unique name for the image
            $imageNameOne = time().'.'.$request->image->extension();
            // Move the uploaded file to a public directory
            $request->image->move(public_path('images'), $imageNameOne);
        }
    
        // Create the message
        Message::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => $imageNameOne,
        ]);
    
        return back()->with('message', 'Message added successfully');
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
        $message = Message::where('id', $id)->first();
        return view('admin.message.edit', compact('message'));
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
        $message = Message::findOrFail($id);
        // $jobcircular = JobCircular::findOrFail($id);

        // Update image if a new one is provided
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete the old image
            if ($message->image) {
                unlink('image/' . $message->image);
            }
            // Upload new image
            $imageNameOne = time().'.'.$request->image->extension();
            $request->image->move(public_path('image'), $imageNameOne);
            $message->image = $imageNameOne;
        }

        $message->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
        ]);

        return back()->with('message', 'Message Updated successfully');
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
}
