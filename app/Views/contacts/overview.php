<h2><?= esc($title); ?></h2>


<div class="container">

<hr>
<table class="table table-striped table-dark">
   <thead>
   <tr>
      <th scope="col">Id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">objet</th>
      <th scope="col">message</th>
      

   </tr>
   </thead>
   <tbody>
<?php if (! empty($contacts) && is_array($contacts)) : ?>

    <?php foreach ($contacts as $contacts_item): ?>

       <tr>
           <td> <?= $contacts_item['id'] ?></td>
           <td><?= $contacts_item['nom'] ?></td>
           <td><?= $contacts_item['prenom'] ?></td>
           <td><?= $contacts_item['email'] ?></td>
           <td><?= $contacts_item['objet'] ?><td>
           <td><?= $contacts_item['message'] ?><td>
            
           
           
       </tr>

    <?php endforeach; ?>


<?php endif ?>
</tbody>
</table>
<hr>

</div>