<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Users<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Users</h1>
    
    
    <?php if ($users): ?>
    
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                
                    <tr>
                        <td><?= esc($user->name) ?></td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->added ?></td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>

        
    <?php else: ?>
        
        <p>No users found.</p>
        
    <?php endif; ?>

<?= $this->endSection() ?>