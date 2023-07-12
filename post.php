<?php
include_once("templates/header.php");

if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post ){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
}

?>
<main id="post-container">
    <div class="content-comtainer">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>post.php?id=<?= $currentPost['id']?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse, eligendi alias cumque minus excepturi quasi vero obcaecati voluptatibus dolorum nostrum nisi, ratione ipsam fugiat iure, enim soluta consequuntur laborum?
        Aliquid soluta doloremque, facilis deleniti ipsam amet cumque, sapiente, officia illum ratione nulla quisquam sed blanditiis. Fuga iure soluta natus impedit dolorem, cum saepe consequuntur quis quisquam illo nobis vitae?
        Dolor eos et ad quam animi natus fugiat, officiis nam commodi sint ducimus accusantium. Praesentium adipisci architecto voluptatum, velit molestiae laudantium sed exercitationem asperiores accusamus itaque, distinctio perferendis enim voluptates?
        Aperiam sapiente praesentium voluptatum cumque error veritatis, laboriosam maxime reprehenderit amet repellendus dolores ipsum saepe atque libero harum ipsam earum. Ad fugit numquam distinctio suscipit est veniam nisi deserunt! Doloremque!
        Facilis nulla perspiciatis earum cumque reiciendis nemo officiis molestias repellendus necessitatibus et amet quas optio molestiae nobis, debitis incidunt dicta similique pariatur nisi exercitationem! Amet ut eos maiores consectetur tempora.</p>
    </div>
    </div>

    </div>
    <aside id="nav-container">
    <h3 id="tags-title">tags</h3>
    <ul id="tags-list">
            <?php foreach($currentPost['tags'] as $tag):?>
                <li><a href="#"><?= $tag ?></a></li>
             <?php endforeach;?>
            </ul>
           <h3 id="categories-title">Categorias</h3>
           <ul id="categories-list">
           <?php foreach($categorias as $category):?>
                <li><a href="#"><?= $category ?></a></li>
             <?php endforeach;?>
            </ul>
</aside>


</main>

<body>
    <h1><?= $currentPost['title']?></h1>
    </body>
</html>

<?php
include_once("templates/footer.php");
?>
