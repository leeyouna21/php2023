<div class="cate list2">
    <h4>최신글</h4>
    <ul>
        <?php 
            $blogNew = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC LIMIT 4";
            $blogNewResult = $connect -> query($blogNew);

            // echo "<prew>";
            // var_dump($blogNewResult);
            // echo "</prew>";

            foreach($blogNewResult as $blog){ ?>
                <li>
                    <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                        <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                        <span><?=$blog['blogTitle']?></span>
                    </a>
                </li>
            <?php }
        ?>
    </ul>
</div>