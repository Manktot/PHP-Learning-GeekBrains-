<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <?php foreach($basket as $position): ?>
                        <tr>
                            <th><?=$position['name']?></th>
                            <th><?=$position['price']?> золотых</th>
                            <th>
                                <form action="#" method="POST" hidden id="form<?=$position['id']?>">
                                    <input type="hidden" name="id" value="<?= $position['id']?>">
                                </form>
                                <button class="btn btn-outline-secondary" type="submit" form="form<?=$position['id']?>" name="action" value="delete">-</button>
                            </th>
                        </tr>
                    <?php endforeach;?>
                    <tr>
                        <th>Итого: </th>
                        <th><?= $sumFinal?> золотых</th>
                        <th></th>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <a href="order.php"><button type="button" class="btn btn-primary">Оформить заказ</button></a>
            </div>
        </div>
    </div>
</div>