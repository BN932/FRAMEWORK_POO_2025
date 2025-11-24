<h2>Recent books</h2>
<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <?php echo $book->title; ?>
            <?php echo \Core\Helpers::truncate($book->resume, 30); ?>
        </li>
    <?php endforeach; ?>
</ul>

<h2>Recent authors</h2>
<ul>
    <?php foreach ($authors as $author): ?>
        <li>
            <?php echo $author->firstname; ?>
            <?php echo $author->lastname; ?>
        </li>
    <?php endforeach; ?>
</ul>