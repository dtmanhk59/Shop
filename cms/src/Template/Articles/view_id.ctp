<!-- Article post -->
<article class="post">
    <div class="post-preview"><a href="#"><img src="#" alt=""></a></div>
    <div class="post-wrapper">
        <div class="post-header">
            <h2 class="post-title">
                <a href="blog-single.html"><?= h($data['title']) ?></a>
            </h2>
            <ul class="post-meta">
                <li>Usser id <?= h($data['id']) ?></li>
                <li>Id <?= h($data['id']) ?> </li>
            </ul>
        </div>
        <div class="post-content">
            <p><?= h($data['body']) ?></p>
        </div>
        <div class="post-more">
            <button class="btn btn-circle btn-light" type="button" 
            data-toggle="modal" data-target="#modal-2" id="bcpage">
                Read more
            </button>
        </div>
    </div>
</article>
<!-- End article post -->

<!-- Modal Large -->
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title">Content </h5>
               <button class="close" type="button" data-dismiss="modal" 
               aria-label="Close">
                   <span aria-hidden="true">×</span>
               </button>
           </div>
           <div class="modal-body" id="cpage">
              <?= h($data['body']) ?>
           </div>
           <div class="modal-footer">
               <button class="btn btn-circle btn-light" type="button" 
               data-dismiss="modal">Close</button>
           </div>
       </div>
   </div>
</div>
<!-- End Modal Large-->