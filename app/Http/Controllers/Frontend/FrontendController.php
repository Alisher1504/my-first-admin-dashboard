<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index() {
        $all_categories = Category::where('status', '0')->get();
        $latest_posts = Post::where('status', '0')->orderBy('created_at', 'DESC')->get()->take(15);
        return view('frontend.index', compact('all_categories', 'latest_posts'));
    }

    public function viewCategory(string $category_slug) {
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();
        if($category) {
            if(Auth::user()->role_as == '2' && Auth::user()->fani == '0') {
                $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(2);
                return view('frontend.post.index', compact('post', 'category'));
            }
            if(Auth::user()->role_as == '2' && Auth::user()->fani == '1') {
                $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(2);
                return view('frontend.post.front', compact('post', 'category'));
            }
            if(Auth::user()->role_as == '2' && Auth::user()->fani == '2') {
                $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(2);
                return view('frontend.post.bac', compact('post', 'category'));
            }
            if(Auth::user()->role_as == '2' && Auth::user()->fani == '3') {
                $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(2);
                return view('frontend.post.blemdr', compact('post', 'category'));
            }
            if(Auth::user()->role_as == '2' && Auth::user()->fani == '4') {
                $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(2);
                return view('frontend.post.komp', compact('post', 'category'));
            }
            // if(Auth::user()->role_as == '2' && Auth::user()->fani == '5') {
            //     $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(2);
            //     return view('frontend.post.blemdr', compact('post', 'category'));
            // }
            else {
                return redirect('/home');
            }
        }
        else {
            return redirect('/');
        }
    }


    public function viewPost(string $category_slug, string $post_slug) {

        $category = Category::where('slug', $category_slug)->where('status', '0')->first();
        if($category) {
            $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status', '0')->first();
            $latest_posts = Post::where('category_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->get()->take(10);
            return view('frontend.post.view', compact('post', 'latest_posts'));
        }
        else {
            return redirect('/');
        }

    }

}
