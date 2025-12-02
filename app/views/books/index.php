<h2>Our books</h2>
<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <a href="books/<?php echo $book->id;?>" class="text-blue-500 hover:underline">
            <?php echo $book->title; ?>
            </a>
            <?php echo \Core\Helpers::truncate($book->resume, 30); ?>
        </li>
    <?php endforeach; ?>
</ul>