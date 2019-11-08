@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="https://scontent-lhr3-1.cdninstagram.com/vp/f8daa557de934c0a7a3eba8779c30774/5E61C384/t51.2885-19/s320x320/61402573_2308681072677106_8323839489449394176_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com" alt="" 
                class="rounded-circle"
                height="150px">
       </div>
       <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
               <h1>{{$user->username}}</h1>
                <a href="#">Add new post</a>
            </div>
           <div class="d-flex">
               <div class="pr-4"><strong>153</strong> posts</div>
               <div class="pr-4"><strong>23k</strong> follower</div>
               <div class="pr-4"><strong>603</strong> following</div>
           </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div> 
            <div>{{$user->profile->description}}</div>
            <div class=""><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>
        </div>
   </div>
   <div class="row pt-5">
       <div class="col-4">
           <img src="/assets/posts/Portfolio.png" alt="" class="w-100">
       </div>
       <div class="col-4">
           <img src="/assets/posts/MyPuppyDen.png" alt="" class="w-100">
       </div>
       <div class="col-4">
           <img src="/assets/posts/Todo.png" alt="" class="w-100">
       </div>
   </div>
</div>
@endsection
