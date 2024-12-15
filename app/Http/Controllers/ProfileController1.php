<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use function Pest\Laravel\getJson;

class ProfileController1 extends Controller
{
    public function index($id){
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        // dd($user,$profile);
        // Check if user data exists before passing it to the view
        if (!$user) {
            abort(403, 'Unauthorized access');
        }
        return view('profileUser.viewprofile', compact('user','profile'));
    }

    public function storeRegistrasi(Request $request){
            $request->validate([
            'email' => 'required|email:dns|unique:users,email',
            'name' => 'required',
            'password' => 'required'
            ]);
            try {
                $new_user= new User;
                $new_user->name = $request->name;
                $new_user->email = $request->email;
                $new_user->password = $request->password;
                $new_user->save();
                return redirect('/Login'); 
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error("Vehicle add error: ".$e->getMessage());
            return back()->withErrors(['error' => 'Failed to add vehicle.']);
            }
              
        
    }
    public function authenticateNew(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/home');
        }
    
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request){
        // dd('Logout reached!');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    /**
     * Display the user's profile form.
     */
    public function edit($id)
{
    $user = User::findOrFail($id); // Retrieve the user by ID
    return view('profileUser.editProfile', compact('user'));
}


    /**
     * Update the user's profile information.
     */
    public function updateUser(Request $request, $id)
{
    $request->validate([
        'email' => 'required|email:dns|unique:users,email,'.$id,
        'name' => 'required',
        'password' => 'nullable|min:6', // Optional if the user doesn't want to update the password
    ]);
    dd($request);
    try {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Encrypt password
        }

        $user->save();

        return redirect('/home')->with('success', 'User updated successfully!');
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error("User update error: " . $e->getMessage());
        return back()->withErrors(['error' => 'Failed to update user.']);
    }
}


    /**
     * Delete the user's account.
     */
    public function deleteUser(Request $request)
{
    try {
        $user = auth()->User;

        if ($user) {
            $user->delete();

            // Log the user out after deleting their account
            auth()->Auth::logout();

            return redirect('/')->with('success', 'Account deleted successfully!');
        }

        return back()->withErrors(['error' => 'No authenticated user found.']);
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error("User delete error: " . $e->getMessage());
        return back()->withErrors(['error' => 'Failed to delete user.']);
    }
}

}
