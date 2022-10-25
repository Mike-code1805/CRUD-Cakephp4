<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Libro $libro
 * @var \Cake\Collection\CollectionInterface|string[] $autors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Libros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="libros form content">
            <?= $this->Form->create($libro) ?>
            <fieldset>
                <legend><?= __('Add Libro') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('resumen');
                    echo $this->Form->control('autor_id', ['options' => $autors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
