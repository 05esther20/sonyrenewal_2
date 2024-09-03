<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<ul class="swiper-wrapper">
                
                   
                    


                            <?php
    for ($i = $list_count - 1; $i >= 0; $i--) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-fluid rounded-4 mb-2">';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>  
                              
                              
                              <li class="text-center swiper-slide">
                        <a href="#"><?php echo    $img_content; ?></a>
                        <a href="#"><strong class="d-block eventmaintxt"><?php echo $list[$i]['subject']; ?></strong></a>
                        <a href="#"><p><?php echo $list[$i]['wr_content']; ?></p></a>
                    </li>
                         

                            <?php }  ?>
                            <?php if ($list_count == 0) { //게시물이 없을 때  ?>
                                <li class="swiper-slide text-center">게시물이 없습니다.</li>
                            <?php }  ?> 
                                                       
                            </div>
                            <!-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div> -->
                        
                        <script>       
                            const <?php echo $bo_table; ?>swiper = new Swiper('.event.swiper', {
                            spaceBetween: 16,
                            loop: true,
                            loopAdditionalSlides : 3,                         

                            autoplay: {
                                    delay: 3000,
                                    disableOnInteraction: false,
                            },
                            breakpoints: {
                                // 화면 너비가 375px 이하일 때
                                375: {
                                    slidesPerView: 1.4,
                                },
                                // 화면 너비가 576px 이하일 때
                                575: {
                                    slidesPerView: 1.8,
                                },
                                // 화면 너비가 991px 이하일 때
                                991: {
                                    slidesPerView: 2.5,
                                },
                                // 화면 너비가 992px 이상일 때 (기본 설정)
                                992: {
                                    slidesPerView: 4,
                                }
                            }

                           
                            
                            });
                            </script>
                   </ul>