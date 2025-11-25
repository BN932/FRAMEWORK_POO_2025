<ul>
    <?php foreach ($authors as $author): ?>
        <li>
            <?php echo $author->firstname; ?>
            <?php echo $author->lastname; ?>
        </li>
    <?php endforeach; ?>
</ul>