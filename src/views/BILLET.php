
<form method="post">
    <div class="form-group input-group-sm">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" placeholder="Le titre du billet">
    </div>

    <div class="form-group input-group-lg">
        <label>Chapô</label>
        <input type="text" name="chapo" class="form-control" placeholder="Le chapô du billet">
    </div>

    <div class="form-group input-group-lg">
        <label>Text</label>
        <input type="text" name="text" class="form-control" placeholder="Le text du billet">
    </div>


    <label>l'image du billet</label>
    <div class="row">
        <div class="col-md-4">
            <input id="fileupload" type="file" name="files[]" multiple="" /></div>

    </div>



    <div class="row">
        <div class="col-xs-12 col-md-8"><h1>Les catégories </h1></div><br>
        <div class="col-xs-6 col-md-4">
            <a href="index.php?controller=billet-formulaire"
               class="btn btn-primary 	glyphicon glyphicon-folder-open"> Ajouter une catégorie</a></div>
    </div><br>


    <div class="row">
        <div><button type="button">Listes des catégories</button>
        <button type="button" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">PHP</a></li>
            <li><a href="#">Web</a></li>
            <li><a href="#">Photo</a></li>
            <li><a href="#">Chaton</a></li>
        </ul>
        <button type="submit" name="submit" class="btn btn-danger btn-xs ">Supprimer</button>
        <button type="button">Listes des catégories</button>
        <button type="button" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">PHP</a></li>
            <li><a href="#">Web</a></li>
            <li><a href="#">Photo</a></li>
            <li><a href="#">Chaton</a></li>
        </ul>
        <button type="submit" name="submit" class="btn btn-danger btn-xs ">Supprimer</button></div>
    </div><br>

    <button type="submit" name="submit"  class="pull-right">Valider</button>

</form>

