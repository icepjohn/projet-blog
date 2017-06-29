<form method="post" class="form-inline">
    <div class="form-group">
        <input type="text" name="billet" placeholder="Votre bilet"
               class="from-control"">

    </div>
    <input type="hidden" name = "id" value="<?=$id?>">
    <input type="hidden" name = "token" value="<?=$token?>">
    <div class="form-group">
        <button class="btn btn-primary" type="submit"
                name="submit">ok</button>
    </div>

</form>