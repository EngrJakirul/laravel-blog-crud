<?php

namespace App\Models;

use App\Http\Controllers\BlogController;
use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $image, $imageName, $imageExtension, $imageDirectory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension  = self::$image->getClientOriginalExtension();
        self::$imageName = 'crud_'.time().'.'.self::$imageExtension;
        self::$imageDirectory = 'blog-images/';
        self::$image->move(self::$imageDirectory, self::$imageName);
        return self::$imageDirectory.self::$imageName;
    }
    public static function newBlog($request)
    {
        self::$blog  = new Blog();
        self::$blog->title = $request->title;
        self::$blog->author = $request->author;
        self::$blog->description = $request->description;
        self::$blog->image = self::getImageUrl($request);
        self::$blog->save();
    }
    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }
        self::$blog->title = $request->title;
        self::$blog->author = $request->author;
        self::$blog->description = $request->description;
        self::$blog->image = self::$imageUrl;
        self::$blog->save();
    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if(file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
}


// query bilder diye ayvabe code likte hoi.........
//        DB::table('blogs')->insert([
//
//            'title'        => $request->title,
//            'author'       => $request->author,
//            'description'  => $request->description,
//            'image'        => $request->image,
//        ]);
//
//        return  redirect('/add-blog')->with('message', 'blog create successfully');
