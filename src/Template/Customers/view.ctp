<h1><?= h($customer->id) ?></h1>
<p><?= h($customer->first_name) ?></p>
<p><?= h($customer->last_name) ?></p>
<p><?= h($customer->telephone_number) ?></p>
<p><?= h($customer->mailaddress) ?></p>
<h1><?= h($customer->title) ?></h1>
<p>FirstName: <?= h($customer->first_name) ?></p>
<p>LastName: <?= h($customer->last_name) ?></p>
<p>TelephoneNumber: <?= h($customer->telephone_number) ?></p>
<p>Mailaddress: <?= h($customer->mailaddress) ?></p>

<p><?= $this->Html->link('Add Request', ['controller' => 'requests', 'action' => 'add', '?' => ['customer_id' => $customer->id]]) ?></p>

<p>requests</p>
<table>
    <tr>
        <th>Id</th>
    </tr>

    <?php foreach ($requests as $request): ?>
    <tr>
        <td> <?= $this->Html->link($request->id, ['action' => 'view', $request->id]) ?> </td>
    </tr>
    <?php endforeach; ?>
</table>