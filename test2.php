<?php
$categories = [
    ['category_id' => 1, 'category_name' => 'Category 1'],
    ['category_id' => 2, 'category_name' => 'Category 2'],
    ['category_id' => 3, 'category_name' => 'Category 3'],
    ['category_id' => 4, 'category_name' => 'Category 4'],
    ['category_id' => 5, 'category_name' => 'Category 5'],
];

$limit = 3; // Số lượng danh mục hiển thị ban đầu
$category_count = count($categories); // Tổng số lượng danh mục
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See More/See Less Example</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<!-- Hiển thị danh mục -->
<?php $index = 0; ?>
<?php foreach ($categories as $category): ?>
    <p class="category-item <?php echo $index >= $limit ? 'hidden' : ''; ?>">
        <a href="index.php?cat_id=<?php echo $category['category_id'] ?>">
            <?php echo htmlspecialchars($category['category_name']) ?>
        </a>
    </p>
    <?php $index++; ?>
<?php endforeach; ?>

<!-- Nút See More và See Less -->
<?php if ($category_count > $limit): ?>
    <button id="seeMoreBtn">See more</button>
    <button id="seeLessBtn" style="display: none;">See less</button>
<?php endif; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const seeMoreBtn = document.getElementById('seeMoreBtn');
        const seeLessBtn = document.getElementById('seeLessBtn');

        // Khi nhấn nút See More
        seeMoreBtn.addEventListener('click', function () {
            const hiddenItems = document.querySelectorAll('.category-item.hidden');
            hiddenItems.forEach(item => {
                item.classList.remove('hidden');
            });
            seeMoreBtn.style.display = 'none';
            seeLessBtn.style.display = 'inline-block';
        });

        // Khi nhấn nút See Less
        seeLessBtn.addEventListener('click', function () {
            const allItems = document.querySelectorAll('.category-item');
            allItems.forEach((item, index) => {
                if (index >= <?php echo $limit; ?>) {
                    item.classList.add('hidden');
                }
            });
            seeMoreBtn.style.display = 'inline-block';
            seeLessBtn.style.display = 'none';
        });
    });
</script>

</body>
</html>
