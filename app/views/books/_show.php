<h2 class="text-3xl">
    <?php echo $book->title; ?>
</h2>
<div>
    <?php echo $book->resume; ?>
</div>


<ul class="border-y-2 border-gray-300 py-4">
    <li>
        <a class="text-blue-500 hover:underline" href="authors/<?php echo $book->author->id; ?>">
            Author: <?php echo $book->author->firstname ." ". $book->author->lastname; ?>
        </a>
    </li>
    <li>ISBN: <?php echo $book->isbn; ?></li>
</ul>
