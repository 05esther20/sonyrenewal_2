<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<ul class=" py-4 swiper-wrapper">
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
                
                <li class="overflow-hidden  <?php echo $list[$i]['wr_content']; ?> gradient-box  swiper-slide">
                    <a href="#" class="d-block">
                        <strong class="d-block mx-4 mt-5 product_title"><?php 
                        $subtext = explode('|',$list[$i]['subject']);
                        echo $subtext[0];
                         ?></strong>
                        <span class="mx-4 product_ex d-none d-md-block">
                            <?php echo $subtext[1]; ?>
                        </span>
                        <?php echo    $img_content; ?>
                    </a>
                </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <li>게시물이 없습니다.</li>
    <?php }  ?>           
    </ul>
                      
<script>       
const mainswiper_product = new Swiper('#product.swiper', {
spaceBetween: 20,
slidesPerView: 'auto',
loop: true, 
autoplay: {
    delay: 4000,
    disableOnInteraction: false,
//   },
//   breakpoints: {
//         640: {
//           slidesPerView: 3.5,
//           spaceBetween: 20,
//         },
//         1024: {
//           slidesPerView: 4.1,
//           spaceBetween: 20,
//         },
//         1280: {
//           slidesPerView: 4.8,
//           spaceBetween: 20,
//         },
//         1440: {
//           slidesPerView: 5,
//           spaceBetween: 20,
//         },
},





});
</script>



  
 

