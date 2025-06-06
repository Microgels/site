<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;


class ViewsController extends Controller
{
    public function blogs()
    {
        $categories = Category::all();
        $all_posts = Post::all();
        $posts = Post::with('user')
                        ->orderBy('created_at','desc')
                        ->paginate(6);
        $tags = [];
        foreach ($posts as $post) {
            $tags = array_keys(array_flip($tags) + array_flip($post->tags));
        }
        $env = new Environment([
            'html_input' => 'escape',
        ]);
        $env->addExtension(new CommonMarkCoreExtension());
        $converter = new CommonMarkConverter();
        return view("site.blogs",[
            'posts'=>$posts,
            'tags' => $tags,
            'converter' => $converter,
            'categories'=>$categories,
            'all_posts'=>$all_posts,
        ]);
    }
    public function blogsCategories(string $category)
    {
        $categories = Category::all();
        $cat = $categories->where('name',$category)->first();
        $posts = Post::where('category_id',$cat->id)
                        ->with('user','category')
                        ->orderBy('created_at','desc')
                        ->paginate(6);
        
        $all_posts = Post::all();
        $tags = [];
        foreach ($posts as $post) {
            $tags = array_keys(array_flip($tags) + array_flip($post->tags));
        }
        $env = new Environment([
            'html_input' => 'escape',
        ]);
        $env->addExtension(new CommonMarkCoreExtension());
        $converter = new CommonMarkConverter();
        return view("site.blogs",[
            'posts'=>$posts,
            'tags' => $tags,
            'converter' => $converter,
            'categories'=>$categories,
            'all_posts'=>$all_posts
        ]);
    }
    public function blogDetails(string $slug)
    {
        $categories = Category::all();
        $post = Post::where('slug',$slug)->first();
        $env = new Environment([
            'html_input' => 'escape',
        ]);
        $env->addExtension(new CommonMarkCoreExtension());
        $converter = new CommonMarkConverter();
        $related_posts = Post::where('category_id',$post->category_id)
                                ->where('id','!=',$post->id)
                                ->limit(3)
                                ->orderBy('created_at','desc')
                                ->get();

        $tags = [];
        foreach ($related_posts as $post) {
            $tags = array_keys(array_flip($tags) + array_flip($post->tags));
        }
        return view("site.blog-details",[
            'post'=>$post,
            'converter' => $converter,
            'related_posts'=>$related_posts,
            'tags'=>$tags,
            'categories'=>$categories,
        ]);
    }
}
