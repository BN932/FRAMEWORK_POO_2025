<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($books as $book): ?>
        <article class="flex flex-col rounded-xl border bg-white p-4 shadow-sm">
            <h3 class="text-sm font-semibold text-slate-900">
                <a href="books/<?php echo $book->id;?>" class="text-blue-500 hover:underline">
                    <?php echo $book->title; ?>
                </a>
            </h3>
            <p class="mt-1 text-xs text-slate-500">by Alice Green · 2024</p>
            <p class="mt-3 line-clamp-3 text-sm text-slate-600">
                <?php echo \Core\Helpers::truncate($book->resume, 30); ?>
            </p>
        </article>
    <?php endforeach; ?>
    </div>