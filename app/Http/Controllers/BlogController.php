<?php
namespace App\Http\Controllers;
use Auth
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $blogs = Blog::where('user_id','!=',$userId)->get();
         return view('home', [
            'blogs'=>$blogs,
        ]);
    }

    public function store(Request $request){
         // Validate
        $request->validate([
            'description' => 'required',
        ]);   
        $userId = Auth::id();
        $task = Blog::create(['description' => $request->description,'user_id'=> $userId]);
        return redirect('home');
    }

   
    public function destroy(Request $request, Task $task)

    {
        $task->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('tasks');
    }
    
}
