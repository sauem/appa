<?php
function simage($url, $size = [])
{
    $media_url = str_replace(home_url('wp-content/uploads') . '/', '', $url);
    if (!isset($size[0]) || !isset($size[1])) {
        return home_url('wp-content/uploads/') . $media_url;
    }
    return home_url('wp-content/uploads/vthumb.php?src=' . $media_url . '&size=' . $size[0] . 'x' . $size[1] . '&zoom=1&q=90');
}

function printfs($data)
{
    echo "<pre>";
    var_dump($data);
    die;
}


function list1()
{

    $category = get_the_category();
    foreach ($category as $term_id) {
        $ids[] = $term_id->term_id;
    }
    return $ids;

}
//sfsdfsd
