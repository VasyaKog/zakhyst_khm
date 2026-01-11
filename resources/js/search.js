document.addEventListener('DOMContentLoaded', function () {
    initSearch('#desktop-search-input', '#desktop-search-results');
    initSearch('#mobile-search-input', '#mobile-search-results');
});

function initSearch(inputSelector, resultsSelector) {
    const input = document.querySelector(inputSelector);
    const resultsContainer = document.querySelector(resultsSelector);
    let debounceTimer;

    if (!input || !resultsContainer) return;

    input.addEventListener('input', function (e) {
        clearTimeout(debounceTimer);
        const query = e.target.value.trim();

        if (query.length < 2) {
            resultsContainer.innerHTML = '';
            resultsContainer.classList.add('hidden');
            return;
        }

        debounceTimer = setTimeout(() => {
            fetchResults(query, resultsContainer);
        }, 300);
    });

    // Close on click outside
    document.addEventListener('click', function (e) {
        if (!input.contains(e.target) && !resultsContainer.contains(e.target)) {
            resultsContainer.classList.add('hidden');
        }
    });

    // Re-open on focus if has content
    input.addEventListener('focus', function () {
        if (resultsContainer.innerHTML !== '') {
            resultsContainer.classList.remove('hidden');
        }
    });
}

function fetchResults(query, container) {
    fetch(`/api/search?q=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            renderDropdown(data, container);
        })
        .catch(error => console.error('Search error:', error));
}

function renderDropdown(data, container) {
    const hasNews = data.news && data.news.length > 0;
    const hasServices = data.services && data.services.length > 0;

    let html = '';

    if (!hasNews && !hasServices) {
        html = `
            <div class="px-5 py-3 text-gray-500 font-montserrat text-sm">
                Нічого не знайдено
            </div>
        `;
    } else {
        if (hasServices) {
            html += `<div class="px-5 py-2 bg-gray-100 dark:bg-zinc-800 text-xs font-bold uppercase text-gray-500 dark:text-gray-400 font-montserrat tracking-wider">Послуги</div>`;
            data.services.forEach(item => {
                html += `
                    <a href="${item.url}" class="block px-5 py-3 hover:bg-gray-50 dark:hover:bg-zinc-700 transition-colors border-b border-gray-100 dark:border-zinc-700 last:border-0">
                        <div class="text-black dark:text-gray-200 font-montserrat font-bold text-sm">${item.title}</div>
                    </a>
                `;
            });
        }

        if (hasNews) {
            html += `<div class="px-5 py-2 bg-gray-100 dark:bg-zinc-800 text-xs font-bold uppercase text-gray-500 dark:text-gray-400 font-montserrat tracking-wider">Новини</div>`;
            data.news.forEach(item => {
                html += `
                    <a href="${item.url}" class="block px-5 py-3 hover:bg-gray-50 dark:hover:bg-zinc-700 transition-colors border-b border-gray-100 dark:border-zinc-700 last:border-0">
                        <div class="text-black dark:text-gray-200 font-montserrat font-bold text-sm mb-1">${item.title}</div>
                        <div class="text-gray-500 dark:text-gray-400 font-montserrat text-xs">${item.date}</div>
                    </a>
                `;
            });
        }
    }

    container.innerHTML = html;
    container.classList.remove('hidden');
}
