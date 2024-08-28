<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="video-container position-relative " onclick="playVideo()">
                                  

<?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="thumbnail">';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    $youtubeid = $list[$i]['subject'];
    ?>      
      <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                        <img src="./img/svg/playButton.svg" class="playButton"> 
                                    </div>    
                                    <?php echo  $img_content; ?>    
                                    
                                    <div class="iframe-container" id="iframeContainer">
                                    <iframe id="youtubeIframe" width="100%" height="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>     
                                    
                
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <li>게시물이 없습니다.</li>
    <?php }  ?>           
    </div>
    <script>
            // 유튜브 영상 관리 
            function playVideo() {
                var iframeContainer = document.getElementById('iframeContainer');
                var youtubeIframe = document.getElementById('youtubeIframe');
                youtubeIframe.src = '//www.youtube.com/embed/<?php echo   $youtubeid; ?>?autoplay=1&mute=1';
                iframeContainer.style.display = 'block';
            }
   </script>
                      



  
 

