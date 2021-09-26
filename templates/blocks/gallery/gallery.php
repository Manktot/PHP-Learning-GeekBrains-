﻿<div class="gallery">
    <div class="container-sm img-thumbnail">
        <?foreach ($files as $chunks):?>
        <div class="row">
            <?foreach ($chunks as $file): ?>
            <div class="rounded col-2">
                <a rel="gallery" class="photo d-flex justify-content-center p-1"
                   href="./templates/src/images/gallery_img/big/<?= $file ?>">
                    <img class="rounded gallery-image"
                         src="./templates/src/images/gallery_img/big/<?= $file ?>"/>
                </a>
            </div>
            <?endforeach?>
        </div>
        <?endforeach?>
    </div>
</div>
<script type="text/javascript" src="./templates/blocks/gallery/scripts/jquery-1.4.3.min.js"></script>
<script type="text/javascript"
        src="./templates/blocks/gallery/scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript"
        src="./templates/blocks/gallery/scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("a.photo").fancybox({
            transitionIn: 'elastic',
            transitionOut: 'elastic',
            speedIn: 500,
            speedOut: 500,
            hideOnOverlayClick: false,
            titlePosition: 'over'
        });
    });
</script>
