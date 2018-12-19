<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store (Request $request)
    {
      $comment = new Comment();

      $comment->project_id = $request->input("project_id");
      $comment->user_id = auth()->user()->id;
      $comment->comment_text = $request->input("comment_text");

      	$comment->save();

        $data = ['date' => $comment->created_at->format('d-m-Y'), 'user_id' =>_user($comment->user_id)->email, 'text' => $comment->comment_text];

return $data;

  //    return redirect()->back();

  //  return _project($comment->project_id)->comments;


    }

    public function destroy($id)
  	{
  		$comment = Comment::findOrFail($id);
  		$comment->delete();

  		return redirect()->back();
  	}
}
