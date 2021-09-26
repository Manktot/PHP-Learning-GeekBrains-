<div class="container">
    <div class="row">
        <div class="col-6 offset-3 img-thumbnail mt-5" >
            <form method="post" enctype="multipart/form-data" action="#">
                <label class="form-label"><?= $message ?></label>
                <input class="form-control form-control-lg mb-1" name="userfile" type="file">
                <button type="submit" class="btn btn-primary col-3 offset-9">Загрузить</button>
            </form>
        </div>
    </div>
</div>