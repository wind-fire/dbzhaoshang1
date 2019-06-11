<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;
class Link extends Model
{

    protected $fillable = ['link_id', 'link_url', 'link_name', 'link_image', 'link_target', 'link_description', 'link_visible','link_owner','link_rating','link_updated','link_rel','link_notes','link_rss'];

    public $timestamps = false;


}
