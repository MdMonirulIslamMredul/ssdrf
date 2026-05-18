<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use Carbon\Carbon;

class CounterController extends Controller
{
    /**
     * Display the counter edit page (only update, no add/delete).
     */
    public function tech_web_edit_counter()
    {
        $counter = Counter::find(1);
        return view('admin.counter.edit_counter', compact('counter'));
    }

    /**
     * Update the counter data (id=1 only).
     */
    public function tech_web_update_counter(Request $request)
    {
        $request->validate([
            'incon_1'  => 'nullable|string|max:255',
            'title_1'  => 'nullable|string|max:255',
            'value_1'  => 'nullable|string|max:255',
            'incon_2'  => 'nullable|string|max:255',
            'title_2'  => 'nullable|string|max:255',
            'value_2'  => 'nullable|string|max:255',
            'incon_3'  => 'nullable|string|max:255',
            'title_3'  => 'nullable|string|max:255',
            'value_3'  => 'nullable|string|max:255',
            'incon_4'  => 'nullable|string|max:255',
            'title_4'  => 'nullable|string|max:255',
            'value_4'  => 'nullable|string|max:255',
            'status'   => 'nullable|integer',
        ]);

        Counter::findOrFail(1)->update([
            'incon_1'    => $request->incon_1,
            'title_1'    => $request->title_1,
            'value_1'    => $request->value_1,
            'incon_2'    => $request->incon_2,
            'title_2'    => $request->title_2,
            'value_2'    => $request->value_2,
            'incon_3'    => $request->incon_3,
            'title_3'    => $request->title_3,
            'value_3'    => $request->value_3,
            'incon_4'    => $request->incon_4,
            'title_4'    => $request->title_4,
            'value_4'    => $request->value_4,
            'status'     => $request->status ?? 1,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('message', 'Counter Updated Successfully!');
    }
}
