<?php

namespace App;

use App\Model;

class Post extends Model
{
    //关联用户
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //评论模型
    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('created_at','desc');
    }
    //和用户进行关联
    public function zan($user_id)
    {
        return $this->hasOne(\App\Zan::class)->where('user_id',$user_id);
    }
    //文章所有赞
    public function zans()
    {
        return $this->hasMany(\App\Zan::class);
    }
}



