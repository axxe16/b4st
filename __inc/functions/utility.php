<?php 

//restituisce immagine da ACF Image Array
//$imgArr -> array immagine di ACF
//$classi -> stringa con una o più classi
//$miniatura -> l'etichetta della miniatura da utilizzare, se non si usa si usa URL
function addImage($imgArr, $classi = false, $miniatura = false) {
    $classi = ($classi) ? 'class="' . $classi . '"' : ''; 
    if($miniatura):
        $str = '<img ' . $classi . ' src="' . $imgArr['sizes'][$miniatura] . '" alt="'. $imgArr['alt'] .'" title="' . $imgArr['title'] . '">';
    else:
        $str = '<img ' . $classi . ' src="' . $imgArr['url'] . '" alt="'. $imgArr['alt'] .'" title="' . $imgArr['title'] . '">';
    endif;
    return $str;
}
//restituisce immagine da URL immagine
//$url -> stringa path assoluto immagine 
//$classi -> stringa con una o più classi
function addImageFromUrl($url, $classi = false) {
    $classi = ($classi) ? 'class="' . $classi . '"' : ''; 
    $str = '<img ' . $classi . ' src="' . $url . '">';
    return $str;
}

//restituisce immagine da URL immagine
//$imgName -> il path successivo a __inc 
//$classi -> stringa con una o più classi
function addImageTheme($imgName, $classi = false, $extra = false) {
  $extra = ($extra) ? $extra : '';
  $classi = ($classi) ? 'class="' . $classi . '"' : ''; 
  $str = '<img src="' . get_template_directory_uri() . '/__inc/' . $imgName . '" ' . $classi . ' ' . $extra . '>';
  return $str;
}