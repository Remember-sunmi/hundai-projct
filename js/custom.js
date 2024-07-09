$(document).ready(function () {
    // 처음에 보여지는 갯수
    $(".News .more").slice(0, 3).show();  

    // 더보기 눌렀을때
    $(".link--metis").on('click', function (event) {
        event.preventDefault();

        // 숨겨진 요소 중 1개를 더 보여줌
        $(".News .more:hidden").slice(0, 1).slideDown();

        // 모든 요소가 보이면 더보기 버튼 숨김
        if ($(".News .more:hidden").length == 0) {
            $(".link--metis").fadeOut();
        }
    });
});

