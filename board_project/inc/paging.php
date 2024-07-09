<?php
class Paging {
    function PageList($totalcnt,$rowsPage,$curPage,$block_limit) { 
        $block_limit = $block_limit ? $block_limit : 5; // 한 화면에 보여줄 개수 기본 10으로 설정      
        $totalPage = ceil($totalcnt/$rowsPage); // 총 페이지수 구하기  
        
        if($totalPage == 0)  $totalPage=1;
        
        $total_block = ceil($totalPage / $block_limit); //전체 블록 갯수        ceil은 올림함수이다. 
        $curPage = $curPage ? $curPage : 1; // 현재 페이지    
        // 현재 블럭 : 화면에 표시될 페이지 리스트    
        $current_block=ceil($curPage/$block_limit);// 현재 블럭위치  
        $fstPage = ($current_block-1)*$block_limit+1; // 현재 블럭에서 시작 페이지    
        $endPage = $fstPage + $block_limit -1; //마지막 
        if($totalPage < $endPage) { $endPage = $totalPage;} // 시작 바로 전 페이지    
        $prev_page = $fstPage - 1; // 마지막 다음 페이지    
        $next_page = $endPage + 1; 
        
        foreach(range($fstPage, $endPage) as $val) {
            $row[] = $val; 
        }// 배열로 결과를 돌려준다.    
        return array(
            'total_block' => $total_block,
            'current_block' => $current_block, 
            'totalPage' => $totalPage,
            'fstPage' => $fstPage, 
            'endPage' => $endPage,
            'prev' => $prev_page, 
            'next' => $next_page, 
            'current' => $row );
        }

        function PageLinkView($link_url,$totalcnt,$rowsPage,$curPage)
        { 
          
            echo '<ul class="pagination  justify-content-center">';
           
            $Info = $this->PageList($totalcnt,$rowsPage,$curPage,'');
            if($Info['current_block'] > 2){
                echo $this->makeLink($link_url, 1, "first");
            }
            if($Info['current_block'] > 1){
                echo $this->makeLink($link_url, $Info['prev'], 'prev');
                //echo '<li class="page-item disabled"><a class="page-link" href="'.$link_url.'?p='.$Info['prev'].'">prev</a><li>';
            }
            foreach($Info['current'] as $w) {
                if($curPage == $w){
                    echo $this->makeLink($link_url, $w, $w, "active");
                    //echo "<a href='".$link_url."?p=".$w."'><span style='color:red;font-size:22pt'>".$w."</span></a> ";
                } 
                else 
                {
                    echo $this->makeLink($link_url, $w, $w);
                }
            }
            if($Info['current_block'] < ($Info['total_block'])){
                //echo "<a href='".$link_url."?p=".$Info['next']."'>▷</a> ";
                echo $this->makeLink($link_url, $Info['next'], 'next');
            }
            if($Info['current_block'] < ($Info['total_block']-1)){
                echo $this->makeLink($link_url, $Info['totalPage'], 'last');
            
            }
           
            echo '</ul>';
        }

        function makeLink($link_url, $page, $mark, $class="")
        {
            $s =  '<li class="page-item "><a class="page-link $class" href="';
            $s =  $s.$link_url.'?p='.$page.'">'.$mark.'</a></li>';

            return $s;
        }
}

?>


