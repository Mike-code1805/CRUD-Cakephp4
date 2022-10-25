<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autor $autor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Autor'), ['action' => 'edit', $autor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Autor'), ['action' => 'delete', $autor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Autors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Autor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autors view content">
            <h3><?= h($autor->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($autor->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($autor->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagen') ?></th>
                    <td><?= h($autor->imagen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($autor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($autor->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($autor->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Libros') ?></h4>
                <?php if (!empty($autor->libros)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Resumen') ?></th>
                            <th><?= __('Autor Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($autor->libros as $libros) : ?>
                        <tr>
                            <td><?= h($libros->id) ?></td>
                            <td><?= h($libros->titulo) ?></td>
                            <td><?= h($libros->resumen) ?></td>
                            <td><?= h($libros->autor_id) ?></td>
                            <td><?= h($libros->created) ?></td>
                            <td><?= h($libros->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Libros', 'action' => 'view', $libros->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Libros', 'action' => 'edit', $libros->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Libros', 'action' => 'delete', $libros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $libros->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
