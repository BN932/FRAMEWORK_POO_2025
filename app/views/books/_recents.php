<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <?php echo $book->title; ?>
            <?php echo \Core\Helpers::truncate($book->resume, 30); ?>
        </li>
    <?php endforeach; ?>
</ul>