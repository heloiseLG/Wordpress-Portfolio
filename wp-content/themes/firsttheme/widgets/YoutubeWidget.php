<?php
class YoutubeWidget extends WP_Widget{
    public function __construct()
    {
        parent::__construct('youtube_widget' , 'Youtube widget');
    }
    public function widget($args , $instance){
        echo 'Bonjour' ;
    }
    public function form($instance){

    }
    public function update ($newInstance , $oldInstance){
        return[];
    }
}