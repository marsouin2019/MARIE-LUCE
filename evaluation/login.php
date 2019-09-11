
<div class="col-10">
                    <div class="container content">
                    <form methode="POST" action="traitement.php" id=frmregister>
  
  <div class="form-group">
    <label for="">Adresse Mail</label>
    <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Indiquer Email(*)" name="frmEmail"required>
    <small id="emailHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="">Mot de passe</label>
    <input type="password" class="form-control" id="frmPass" placeholder="Password(*)" minlength="6" name="frmPass"required>
    <small id="passwordHelp" class="form-text text-muted">Carractère de 6 à 12.Ce champs est obligatoire.</small>
  </div>
  <button type="submit" class="btn btn-primary" name="valider" value="ok">Valider</button>
 
</form>
