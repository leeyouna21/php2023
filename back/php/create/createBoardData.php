<?php
    include "../connect/connect.php";

    for($i=1; $i<100; $i++){
        $regTime = time();

        $sql = "INSERT INTO board(memberID, boardName, boardTitle, boardIngre, boardContents1, boardContents2, boardContents3, boardAuthor, boardView, regTime) VALUES(1, '음식종류', '주제로 나타낼만한 글입니다.', '이런재료, 저런재료, 맛있는재료, 이것저것', '우선 이렇게 만들고요', '그 다음에는 이렇게 만들고요', '그 다음에는 또 이렇게 만들면 됩니다.', '작성자닉네임', '500', '1653358639')";

        $connect -> query($sql);
    }
?>