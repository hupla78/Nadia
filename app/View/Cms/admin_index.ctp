<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>	<li><?php echo $this->Html->link(__('export'),array('controller'=>'cms','action'=>'export'));?></li>
        <li><?php echo $this->Html->link(__('New Cm'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Categorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Values'), array('controller' => 'values', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Value'), array('controller' => 'values', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Text'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Color'), array('controller' => 'colors', 'action' => 'index')); ?> </li>


    </ul>
</div>
<div class="cms index">
    <h2><?php echo __('Cms'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>

                <th><?php echo $this->Paginator->sort('type'); ?></th>
                <th>info</th>
                <th class="actions"><?php echo __('Actions'); ?></th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($cms as $cm): ?>
            <tr>
                <td><?php echo h($cm['Cm']['id']); ?>&nbsp;</td>
                <td><?php echo h($cm['Cm']['name']); ?>&nbsp;</td>

                <td><?php echo h($cm['Cm']['type']); ?>&nbsp;</td>
                <td>
                    <?php
switch ($cm['Cm']['type']) {
    case 'img':
    echo $this->Html->link($cm['Img']['name'], array('controller' => 'imgs', 'action' => 'view', $cm['Img']['id']));
    break;
    case 'article':
    echo $this->Html->link($cm['Article']['name'], array('controller' => 'articles', 'action' => 'view', $cm['Article']['id']));
    break;
    case 'categorie':
    echo $this->Html->link($cm['Categorie']['name'], array('controller' => 'categories', 'action' => 'view', $cm['Categorie']['id']));
    break;
    case 'value':
    echo  $this->Html->link($cm['Value']['name'], array('controller' => 'values', 'action' => 'view', $cm['Value']['id']));
    break;
    case 'text':
    echo  $this->Html->link($cm['Text']['name'], array('controller' => 'texts', 'action' => 'view', $cm['Text']['id']));
    break;
    case 'color':
    echo $this->Html->link($cm['Color']['name'], array('controller' => 'color', 'action' => 'view', $cm['Color']['id']));break;
    default:
    echo "pb";
    break;
}
                    ?>




                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $cm['Cm']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cm['Cm']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cm['Cm']['id']), array(), __('Are you sure you want to delete # %s?', $cm['Cm']['id'])); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?php
echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
));
        ?>	</p>
    <div class="paging">
        <?php
echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
echo $this->Paginator->numbers(array('separator' => ''));
echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>

    </div>
</div>

