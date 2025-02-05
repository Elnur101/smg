function toggleSubcategories(categoryId) {
    let subcategoryRow = document.getElementById("subcategories-" + categoryId);
    let toggleIcon = document.getElementById("toggle-icon-" + categoryId);

    if (subcategoryRow.style.display === "none") {
        subcategoryRow.style.display = "table-row";
        toggleIcon.innerHTML = "▼"; // Показать ▼, если категория раскрыта
    } else {
        subcategoryRow.style.display = "none";
        toggleIcon.innerHTML = "▶"; // Показать ▶, если категория скрыта
    }
}
