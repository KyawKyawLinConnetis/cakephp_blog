<form>
  <fieldset>
    <legend class="mt-3">Add New Post</legend>
    <div class="form-group row mt-3">
      <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <?= $this->Form->input('title', ['class'=>'form-control', 'Placeholder' => 'Enter Title']); ?>
      </div>
    </div>
    <div class="form-group row mt-3">
      <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
      <?= $this->Form->textarea('description', ['class'=>'form-control', 'Placeholder' => 'Enter Description']); ?>
      </div>
    </div>
    <?= $this->Form->button(__('Add Post'), ['class'=>'btn btn-primary']); ?>
    <?= $this->Html->link('Back', ['action' => 'index'], ['class'=>'btn btn-primary']); ?>
  </fieldset>
</form>