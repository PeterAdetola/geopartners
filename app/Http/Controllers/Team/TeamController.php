<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TeamController extends Controller
{

    public function ViewMembers()
    {

        $members = TeamMember::all()->sortBy('order');

        return view('admin.team.view_members', compact('members'));

    } //End Method

    /**
     * Save Service.
     */
    public function SaveMember(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],[
            'name.required' => 'Fullname is required',
            'role.required' => 'Role/Office is required',
            'image.required' => 'Image in JPG/PNG is required',
        ]);

        $member_no = count(TeamMember::all());
        $order = $member_no + 1;
        $image = $request->file('image');

        if($image) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $sizedImg = $img->resize(600, 600);
            // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $sizedImg->save('uploads/team/'.$name_gen);
            $save_url = 'uploads/team/'.$name_gen;
        }

            TeamMember::insert([
                'order' => $order,
                'name' => $request->name,
                'role' => $request->role,
                'qualificatn' => $request->qualificatn,
                'linked_in' => $request->linked_in,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Member saved',
        );

        return redirect()->back()->with($notification);

    }  //End Method

    /**
     * Sort slide.
     */
     public function SortMember(Request $request)
    {

        $memberOrder = $request->input('order');

        foreach ($memberOrder as $index => $memberId) {
        TeamMember::where('id', $memberId)->update(['order' => $index + 1]);
        }

        $notification = array(
            'message' => 'Team members sorted',
            );

        return redirect()->back()->with($notification);

    } // End Method

    /**
     * Edit Service.
     */
    public function EditMember($id)
    {

        $member = TeamMember::findOrFail($id);

        return view('admin.team.edit_member', compact('member'));

    } // End Method

    /**
     * Update resource in storage.
     */
    public function UpdateMember(Request $request)
    {

        $id = $request->id;
        $image = $request->file('image');

        if($image){
        $service = Service::findOrFail($id);        
        $delImg = $service->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $sizedImg = $img->resize(200, 140);
            // $sizedImg->toJpeg(80)->save('upload/hero_images/'.$name_gen);
            $sizedImg->save('uploads/team/'.$name_gen);
            $save_url = 'uploads/team/'.$name_gen;


            TeamMember::findOrFail($id)->update([
                'name' => $request->name,
                'role' => $request->role,
                'qualificatn' => $request->qualificatn,
                'linked_in' => $request->linked_in,
                'image' => $save_url,
            ]);

        $notification = array(
            'message' => 'Member updated',
        );

        return redirect()->back()->with($notification);

        } else {

            TeamMember::findOrFail($id)->update([
                'name' => $request->name,
                'role' => $request->role,
                'qualificatn' => $request->qualificatn,
                'linked_in' => $request->linked_in,
                ]);

        $notification = array(
            'message' => 'Member details updated',
            );

        return redirect()->back()->with($notification);
        }
    }  //End Method

    /**
     * Delete Member.
     */
    public function DeleteMember($id)
    {
        
        $member = TeamMember::findOrFail($id);        
        $delImg = $member->image;

        try {
            if(file_exists($delImg)){
            unlink($delImg);
        }
        } catch (Exception $e) {
        Log::error("Error deleting old image: " . $e->getMessage());            
        }

        TeamMember::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Member deleted',
        );

        // return redirect()->back()->with($notification);

        return redirect()->route('view.members')->with($notification);

    } //End Method
}
