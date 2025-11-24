<!-- MAIN LAYOUT -->
<main class="mx-auto max-w-6xl px-4 py-8">
    <div class="grid gap-8 md:grid-cols-[3fr_1fr]">
        <!-- COLONNE PRINCIPALE -->
        <div class="space-y-10">
            <?php echo $content; ?>
        </div>
        <?php include '../app/views/templates/partials/_aside.php'; ?>

    </div>
</main>