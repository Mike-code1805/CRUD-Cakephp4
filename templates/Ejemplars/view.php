<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ejemplar $ejemplar
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ejemplar'), ['action' => 'edit', $ejemplar->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ejemplar'), ['action' => 'delete', $ejemplar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ejemplar->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ejemplars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ejemplar'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ejemplars view content">
            <h3><?= h($ejemplar->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('ISBN') ?></th>
                    <td><?= h($ejemplar->ISBN) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editorial') ?></th>
                    <td><?= h($ejemplar->editorial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ejemplar->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $ejemplar->cantidad === null ? '' : $this->Number->format($ejemplar->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Libros Id') ?></th>
                    <td><?= $this->Number->format($ejemplar->libros_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ejemplar->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ejemplar->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
