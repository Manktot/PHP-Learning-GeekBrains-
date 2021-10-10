<button type="button" class="btn btn-outline-warning m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Корзина
    <? if(isset($result) && $count > 0): ?>
        (<?=$count ?>)
    <? endif; ?>
</button>