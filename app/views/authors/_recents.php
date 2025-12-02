<ul class="divide-y divide-slate-200 rounded-xl border bg-white">
    <?php foreach ($authors as $author): ?>
        <li class="flex items-center justify-between px-4 py-3">
            <a href="authors/<?php echo $author->id;?>" class="text-blue-500 hover:underline">
            <?php echo $author->firstname; ?>
            <?php echo $author->lastname; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>