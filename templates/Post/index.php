
<div class="row">
<?= $this->Flash->render('message'); ?>
    <h2 class="my-3">View All Posts</h2>
    <div class="col-md-3">
    <?php echo $this->Html->link('ADD POST', ['action' => 'add'], ['class' => 'btn btn-danger' ]); ?>
    </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if(!empty($posts)): ?>
        <?php foreach($posts as $post): ?>
            <tr>
                <th scope="row"><?= $post->id ?></th>
                <td><?= $post->title ?></td>
                <td><?= $post->description ?></td>
                <td>Column content</td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <td>No Record Found!</td>
    <?php endif; ?>
  </tbody>
</table>
</div>
<?php echo $this->Form->end();  ?>