<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //customer create page

    public function create()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        // dd($posts);
        // dd($posts['first_page_url']);
        // $posts = Post::all()->toArray();
        //dd($posts[0]['title'])->toArray();
        return view('create', compact('posts'));
    }

    //post create
    public function postCreate(Request $request)
    {
        // Old Validation
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required',
        //     'image' => 'required',
        // ]);

        // if ($validator->false()) {
        //     return back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        //New Validation
        $this->postValidationCheck($request);
        //dd($request->all());
        $data = $this->getPostData($request);
        //dd($data);
        Post::create($data);
        //return view('create');
        // return back();
        //return redirect('testing'); //url
        return redirect()->route('post#createPage')->with(['insertSuccess' => 'Post ဖန်တီးခြင်းအောင်မြင်ပါသည်။']); //route
    }

    //post delete
    public function postDelete($id)
    {
        // dd($id);
        //first way
        Post::where('id', $id)->delete();
        return redirect()->route('post#createPage')->with(['deleteSuccess' => 'Delete လုပ်ခြင်းအောင်မြင်ပါသည်။']);
        //second way
        // $post = Post::find($id);
        // $post->delete();
        // Post::find($id)->delete();
        // return back();
    }

    //direct update page
    public function updatePage($id)
    {
        $post = Post::where('id', $id)->get()->toArray();
        // $post = Post::find($id)->get()->toArray();
        // dd($post);
        return view('update', compact('post'));
    }

    //edit page
    public function editPage($id)
    {
        // dd($id);
        $post = Post::where('id', $id)->get()->toArray();
        return view('edit', compact('post'));
    }

    //update post
    public function update(Request $request)
    {
        // dd($request->all());
        $this->postValidationCheck($request);
        $updateData = $this->getPostData($request);
        $id = $request->postId;
        Post::where('id', $id)->update($updateData);
        return redirect()->route('post#createPage')->with(['updateSuccess' => 'Update လုပ်ခြင်းအောင်မြင်ပါသည်။']);;
        // dd($updateData);
    }

    //get post data
    private function getPostData($request)
    {
        $respone = [
            'title' => $request->postTitle,
            'description' => $request->postDescription
        ];

        return $respone;
    }

    //post validation check
    private function postValidationCheck($request)
    {
        $validationRules = [
            'postTitle' => 'required|unique:posts,title|max:10|min:2',
            'postDescription' => 'required|min:5'
        ];

        $validationMessage = [
            'postTitle.required' => 'Post Title ဖြည့်ရန်လိုအပ်ပါသည်။',
            'postDescription.required' => 'Post Description ဖြည့်ရန်လိုအပ်ပါသည်။',
            'postTitle.min' => 'အနည်းဆုံး ၅ လုံးအထက်ရှိရပါမည်။',
            'postTitle.unique' => 'Post Title ခေါင်းစဉ်တူနေပါသည်။ထပ်မံရိုက်ကြည့်ပါ။'
        ];
        Validator::make($request->all(), $validationRules, $validationMessage)->validate();
    }
}
