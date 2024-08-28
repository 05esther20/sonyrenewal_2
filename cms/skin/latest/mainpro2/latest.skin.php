<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class='ps5black py-4'>
                     <div class="container">
                        <div class="swiper mt-5">
                            <div class="swiper-wrapper">                             
                               

                            <?php
    for ($i = $list_count - 1; $i >= 0; $i--) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="d-flex">';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>  
                                <div class="swiper-slide text-center">
                                    <a href=""><?php echo    $img_content; ?> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        <?php echo $list[$i]['subject']; ?>
                                    </a>
                                </div>

                            <?php }  ?>
                            <?php if ($list_count == 0) { //게시물이 없을 때  ?>
                                <div class="swiper-slide text-center">게시물이 없습니다.</div>
                            <?php }  ?> 
                                                       
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <script>       
                            const videoswiper = new Swiper('#video .swiper', {
                            spaceBetween: 16,
                            loop: true,
                            slidesPerView: "auto",  
                            loopAdditionalSlides : 3,                         

                            autoplay: {
                                    delay: 3000,
                                    disableOnInteraction: false,
                            },

                            // Navigation arrows
                            navigation: {
                                nextEl: '#video .swiper-button-next',
                                prevEl: '#video .swiper-button-prev',
                            },

                            
                            });
                            </script>
                     </div>
            </div>

