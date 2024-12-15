<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileControllerProfile extends Controller
{

public function createProfile(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'phone' => 'required|numeric',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'required',
    ]);

    try {
        $existing_profile = Profile::where('user_id', $id)->first();

        if ($existing_profile) {
            $existing_user = User::where('id', $id)->first();
            $existing_profile->address = $request->address;
            $existing_profile->phone = $request->phone;
            $existing_profile->bio = $request->bio;
            $existing_user->name = $request->name;
            $existing_user->email = $request->email;
            $existing_user->password = $request->password;
            $existing_user->update();
            $existing_profile->save();

            return redirect()->route('profile', ['id' => $id])->with('success', 'Profile updated successfully!');
        } else {
            $existing_user = User::where('id', $id)->first();
            $new_profile = new Profile();
            $new_profile->address = $request->address;
            $new_profile->phone = $request->phone;
            $new_profile->bio = $request->bio;
            $new_profile->user_id = $id;
            $existing_user->name = $request->name;
            $existing_user->email = $request->email;
            $existing_user->password = $request->password;
            $existing_user->update();
            $new_profile->save();

            return redirect()->route('profile', ['id' => $id])->with('success', 'Profile created successfully!');
        }
    } catch (\Exception $e) {
        Log::error('Error storing/updating profile: ' . $e->getMessage(), [
            'request' => $request->all(),
        ]);
        return redirect()->back()->withErrors(['msg' => 'Failed to create or update profile.']);
    }
}


    public function edit($id)
{
    $user = User::findOrFail($id); // Retrieve the user by ID
    return view('profileUser.editProfile', compact('user'));
}

    public function updateProfile(Request $request){
        $request->validate([
            'name' => 'required|string',
            'phone' => 'number|required',
            'email' => 'required|email:dns|unique:users,email,',
            'password' => 'required',
        ]);
        try {
            $request_ = Auth::user();
            $new_profile = new Profile();
            $new_profile->name = $request->name;
            $new_profile->phone = $request->phone;
            $new_profile->email = $request->email;
            $new_profile->bio = $request->bio;
            $new_profile->stock = $request->password;
            $new_profile->stock = $request->address;
            $new_profile->user_id = $request_->id;
            $new_profile->save();
        return redirect('/katalog');
        } catch (\Exception $e) {
            Log::error('Error storing product: ' . $e->getMessage(), [
                'request' => $request->all(),
            ]);
        }
    }

    public function deleteProfil($id){
        
        $profile = Profile::where('user_id', $id)->first();
        $user = User::find($id);
        if($profile!=null){
            $profile->delete();
        }   
        $user->delete();
        return redirect('/');
    }
    
    
}
