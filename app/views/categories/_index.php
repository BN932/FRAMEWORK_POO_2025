

    <h2
        class="text-sm font-semibold uppercase tracking-wide text-slate-500">
        Categories
    </h2>

    <nav class="space-y-2 rounded-xl border bg-white p-4 text-sm">
        <ul>
            <li>
                <?php foreach($categories as $category):?>
                <a
                href="#"
                class="flex items-center justify-between rounded-lg px-3 py-2 hover:bg-slate-50">
                    <span><?php echo$category->name?></span>
                    <span class="rounded-full bg-slate-100 px-2 text-xs">42</span>
                </a>
                <?php endforeach;?>
            </li>
        </ul>
    </nav>