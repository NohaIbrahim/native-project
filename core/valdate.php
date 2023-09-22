<?php
function reqinput($input){
    if(empty($input)){
        return false;

    }else return true;
};
function minreqinput($input,$length){
    if(strlen($input)<$length){
        return false;

    }else return true;
};
function maxreqinput($input,$length){
    if(strlen($input)>$length){
        return false;

    }else return true;
}