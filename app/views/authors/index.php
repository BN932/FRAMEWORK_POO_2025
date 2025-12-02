<h2>The authors</h2>
<ul>
    <?php foreach ($authors as $author): ?>
        <li>
            <a href="authors/<?php echo $author->id;?>" class="text-blue-500 hover:underline">
            <?php echo $author->firstname; ?>
            <?php echo $author->lastname; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>