<?php
require __DIR__ . "/templates/header.php";

if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
            break;

        }
    }
}
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?> </h1>
            <p id="post-description"><?= $currentPost['description'] ?> </p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
            </div>
        <p class="post-content">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem quia ut et asperiores ad ducimus quod, assumenda, hic consequuntur tenetur deserunt similique voluptatibus mollitia recusandae. Eius eos dolorum molestiae laborum!
          Est, ducimus vero. Eligendi earum, fuga, a fugit doloremque accusamus quisquam odio odit quod assumenda consequuntur ea! Fuga voluptate ipsa ipsam illo officiis consectetur itaque excepturi! Ipsa molestias mollitia assumenda?
          Voluptates, facilis, saepe consectetur quae dolore possimus corporis perspiciatis aperiam, et ipsam hic repellat. A alias saepe aliquid, unde ex, enim sunt amet eligendi maiores sed, odio placeat deleniti minima.
          Distinctio sapiente ab aperiam tempora nihil dolorem blanditiis ducimus laudantium id, magnam fuga! Quod ipsum expedita exercitationem, fugiat magni doloremque quos sed praesentium neque et nostrum iure inventore porro? Quis.
          Nemo, velit porro fugiat repellat dicta vel consequuntur, iste repudiandae dolores ab accusamus molestias corporis eius ratione ex ipsa. Aspernatur veritatis atque voluptas amet, modi ipsam culpa numquam tempora iste!  
        </p>
        <p class="post-content">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem quia ut et asperiores ad ducimus quod, assumenda, hic consequuntur tenetur deserunt similique voluptatibus mollitia recusandae. Eius eos dolorum molestiae laborum!
          Est, ducimus vero. Eligendi earum, fuga, a fugit doloremque accusamus quisquam odio odit quod assumenda consequuntur ea! Fuga voluptate ipsa ipsam illo officiis consectetur itaque excepturi! Ipsa molestias mollitia assumenda?
          Voluptates, facilis, saepe consectetur quae dolore possimus corporis perspiciatis aperiam, et ipsam hic repellat. A alias saepe aliquid, unde ex, enim sunt amet eligendi maiores sed, odio placeat deleniti minima.
          Distinctio sapiente ab aperiam tempora nihil dolorem blanditiis ducimus laudantium id, magnam fuga! Quod ipsum expedita exercitationem, fugiat magni doloremque quos sed praesentium neque et nostrum iure inventore porro? Quis.
          Nemo, velit porro fugiat repellat dicta vel consequuntur, iste repudiandae dolores ab accusamus molestias corporis eius ratione ex ipsa. Aspernatur veritatis atque voluptas amet, modi ipsam culpa numquam tempora iste!  
        </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php  foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php  endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php  foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php  endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
require __DIR__ . "/templates/footer.php";
?>