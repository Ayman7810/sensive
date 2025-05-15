<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(StoreCommentRequest $requset)
    {

        $date = $requset->validated();

        Comment::create($date);

        return back()->with('stutasComment', 'doen');
    }
}