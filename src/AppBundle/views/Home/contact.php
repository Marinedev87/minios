<?php include __DIR__ . '/../top.php'; ?>

<form class="form-inline" action="verif.php" method="POST">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Club"><br/><br/>
    <label for="exampleInputName2">Personne à Contacter</label><br/>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Prénom">
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Nom"><br/>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Adresse mail"><br/><br/>  
    <label for="exampleInputEmail2">Equipes à s'inscrire</label><br/>
    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Equipe 1">
    <select class="form-control">
        <option>Mini</option>
        <option>Junior</option>
        <option>Senior</option>
    </select>    
    <select class="form-control">
        <option>Basic</option>
        <option>Confirmé</option>
        <option>Elite</option>
    </select><br/><br/>
    <label for="exampleInputEmail2">Laissez nous un message</label><br/>
    <input type="text" class="form-control" placeholder="Objet"><br/>
    <textarea class="form-control" rows="3" placeholder="Message"></textarea><br/>
  </div>
</form>

<?php include __DIR__ . '/../bottom.php'; ?>