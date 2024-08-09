document.addEventListener('DOMContentLoaded', function () {
    // Получение элементов из DOM
    const colorImages = document.querySelectorAll('.color_image'); // Изображения цветов в фильтре
    const brandCheckboxes = document.querySelectorAll('.flex-column-brands-list input[type="checkbox"]'); // Кнопки с брендами
    const productContainer = document.querySelector('.flex-row-products-list'); // Контейнер для товаров
    const productDetailsContainer = document.getElementById('productDetailsContainer'); // Контейнер для деталей товаров
    const productCountElement = document.querySelector('.text-span-2'); // Элемент, который отображает количество товаров
    const productTextElement = document.querySelector('.text-span-3'); // Элемент, который отображает текст после числа товаров

    // Получения выбранных цветов
    function getSelectedColors() {
        return Array.from(document.querySelectorAll('.color_image.active'))
            .map(image => image.getAttribute('data-color'));
    }

    // Получения выбранных брендов
    function getSelectedBrands() {
        return Array.from(document.querySelectorAll('.flex-column-brands-list input[type="checkbox"]:checked'))
            .map(checkbox => checkbox.name);
    }

    // Обновления количества товаров
    function updateProductCount(count) {
        productCountElement.textContent = count;
        productTextElement.textContent = count === 1 ? ' товар)' : (count > 4 ? ' товаров)' : ' товара)');
    }

    // Создание карточек товаров
    function createProductCard(product) {
        let promotionActionsHTML = '';
        if (product.status || product['rendering_3d']) {
            promotionActionsHTML = `
                <div class="flex-row-status" style="display: flex; ">
                    ${product['rendering_3d'] ? `<img class="image3d" src="./assets/3D-img.png" alt="3D Rendering"/>` : ''}
                    ${product.status ? `<p class="statusTiles">${product.status}</p>` : ''}
                    <img class="favoriteImage" src="../assets/favoriteHeart.svg"/>
                </div>
            `;
        }

        return `
            <div class="product-content-box">
                <div class="flex-сolumn-information">
                    ${promotionActionsHTML}
                    <div class="flex-column-name">
                        <img class="featuredProductImage" src="${product.image}"/>
                        <p class="featuredProductBrand">${product.brand}</p>
                        <p class="featuredProductTitle">${product.name}</p>
                    </div>
                    <div class="flex-column-specs">
                        <p class="productDescription">${product.category}</p>
                        <p class="productPrice">${product.price}</p>
                        <img class="colorImage" src="${product.color_image}"/>
                    </div>
                </div>
            </div>
        `;
    }

    // Создание "плитки" с выбранным цветом, над фильтром
    function createColorTile(color) {
        return `
            <div class="color-tile-container">
                <div class="color-tile-name-container">
                    <div class="color-tile-name">
                        <p class="colorText">${color}</p>
                    </div>
                </div>
                <img class="image-close-button" data-color="${color}" src="./assets/close-icon.svg"/>
            </div>
        `;
    }

    // Создание "плитки" с выбранным брендом, над фильтром
    function createBrandTile(brand) {
        return `
            <div class="brand-tile-container">
                <div class="brand-tile-name-container">
                    <div class="brand-tile-name">
                        <p class="productBrandName">${brand}</p>
                    </div>
                </div>
                <img class="image-close-button" data-brand="${brand}" src="./assets/close-icon.svg"/>
            </div>
        `;
    }

    // Добавление обработчика на кнопку (крестик) закрытия плитки бренда и цвета
    function addCloseButtonHandlers() {
        productDetailsContainer.querySelectorAll('.image-close-button').forEach(button => {
            button.addEventListener('click', (e) => {
                const color = e.target.getAttribute('data-color');
                const brand = e.target.getAttribute('data-brand');

                if (color) {
                    document.querySelector(`.color_image[data-color="${color}"]`).classList.remove('active');
                }

                if (brand) {
                    document.querySelector(`.flex-column-brands-list input[name="${brand}"]`).checked = false;
                }

                applyFilters();
            });
        });
    }

    // Применения фильтров и обновления контента на странице
    function applyFilters() {
        const selectedColors = getSelectedColors();
        const selectedBrands = getSelectedBrands();

        $.ajax({
            type: 'GET',
            url: '/catalog',
            data: {
                colors: selectedColors,
                brands: selectedBrands
            },
            success: function (response) {
                productContainer.innerHTML = '';
                productDetailsContainer.innerHTML = '';

                updateProductCount(response.length);

                response.forEach(product => {
                    productContainer.insertAdjacentHTML('beforeend', createProductCard(product));
                });

                selectedColors.forEach(color => {
                    productDetailsContainer.insertAdjacentHTML('beforeend', createColorTile(color));
                });

                selectedBrands.forEach(brand => {
                    productDetailsContainer.insertAdjacentHTML('beforeend', createBrandTile(brand));
                });

                addCloseButtonHandlers();
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    // Добавление обработчиков на чекбокс брендов в фильтре
    brandCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', applyFilters);
    });

    // Добавление обработчиков на изображения цветов в фильтре
    colorImages.forEach(image => {
        image.addEventListener('click', () => {
            image.classList.toggle('active');
            applyFilters();
        });
    });

    // Первичное применение фильтров при загрузке страницы
    applyFilters();
});
