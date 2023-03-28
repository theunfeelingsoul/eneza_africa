<div class="sidebar">
    <!-- <div class="row"> -->
        <h2>RECENT POSTS</h2>
        <hr>
    <!-- </div> -->
    <?php foreach ($blog as $key => $value): ?>
        
        <div class="row sidebar-item">
            <div class="col-md-4 blogs-sidebar-img">
                <img src="<?='backend/web/'.$value['main_image'] ?>" alt="" />
            </div>
            <div class="col-md-8 sidebar-link-title">
                <a href="blog.php?id=<?= $value['id'] ?>" class=""><?=$value['title'] ?></a>
            </div>
        </div>
        <!-- <hr> -->   
    <?php endforeach ?>
</div>
<!-- </div> -->
