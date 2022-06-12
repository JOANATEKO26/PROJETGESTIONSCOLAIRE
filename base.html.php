<?php if(!$Role::isConnect()) redirectToRoute("");  ?>
<?php require_once(ROOT."views/partials/header.html.php");?>

    <div class="wrapper  ">
        <div class="slidebar_left  bg-secondary ">
            <div class="top">
                <img src="<?=WEB_URL?>/img/image.jpg"alt=""srcset="">
                <p>
                    <small class="fs-italic text-white fs-6">Nom et Prenom</small><br>
                    <small class="fs-italic text-white fs-6">Profil</small>
                </p>
            </div>

        <div class="bottom">
            <div class="list-group">
  
                <a href="<?=WEB_URL?>/classe" class="list-group-item list-group-item-action position">Classes</a>
                <a href="<?=WEB_URL?>/cours" class="list-group-item list-group-item-action position">Cours</a>
                <a href="<?=WEB_URL?>/module" class="list-group-item list-group-item-action position">Modules</a>
                <a href="<?=WEB_URL?>/professeurs" class="list-group-item list-group-item-action position">Professeurs</a>
                <a href="<?=WEB_URL?>/etudiants" class="list-group-item list-group-item-action position">Inscriptions</a>
                <a href="<?=WEB_URL?>/utilisateurs" class="list-group-item list-group-item-action position">Utilisateurs</a>
            </div>
        </div>

        </div>
        <div class="content  ">
            <div class=" header shadow  ">
                <ul class="nav justify-content-end bg-white">
                    <li class="nav-item">
                        <a class="nav-link active text-dark fs-5" href="#">Active link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark fs-5" href="<?=WEB_URL?>/logout">Deconnexion</a>
                        
                    </li>
                </ul>


            </div>
            <div class="middle d-flex justify-content-center ">
                
                <?=$content_for_views?>
                        
                    
               
            </div>

        </div>
    </div>
    
<?php require_once(ROOT."views/partials/footer.html.php");?>