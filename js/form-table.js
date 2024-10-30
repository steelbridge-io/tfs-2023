document.addEventListener('DOMContentLoaded', (event) => {
    // Optional JS for synchronized scrolling
    const tableWrapper = document.querySelector('.table-wrapper');
    const tableScrollable = document.querySelector('.table-scrollable');

    if (tableScrollable && tableWrapper) {
        tableScrollable.addEventListener('scroll', () => {
            tableWrapper.scrollTop = tableScrollable.scrollTop;
        });
    }

    const searchInput = document.getElementById('searchInput');
    const nextBtn = document.getElementById('nextMatch');
    const prevBtn = document.getElementById('prevMatch');
    const matchInfo = document.getElementById('matchInfo');
    let matches = [];
    let currentIndex = 0;

    function highlightMatches(text) {
    const rows = document.querySelectorAll('#gda-table thead tr, #gda-table tbody tr');
    matches = [];
    rows.forEach(row => {
    const cells = row.querySelectorAll('th, td');
    cells.forEach(cell => {
    let innerHTML = cell.textContent;
    cell.innerHTML = innerHTML.replace(/<mark>/g, '').replace(/<\/mark>/g, ''); // Remove old highlights
    if (text && innerHTML.toLowerCase().includes(text.toLowerCase())) {
    const regex = new RegExp(text, 'gi');
    cell.innerHTML = innerHTML.replace(regex, (match) => {
    matches.push({
    element: cell,
    content: match
});
    return '<mark>' + match + '</mark>';
});
}
});
});
    updateMatchInfo();
    scrollToMatch(currentIndex);
}

    function updateMatchInfo() {
    if (matches.length > 0) {
    matchInfo.textContent = `Match ${currentIndex + 1} of ${matches.length}`;
} else {
    matchInfo.textContent = 'No matches found';
}
}

    function scrollToMatch(index) {
    if (matches.length > 0) {
    const match = matches[index].element;
    match.scrollIntoView({behavior: 'smooth', block: 'center', inline: 'center'});
}
}

    searchInput.addEventListener('keyup', function () {
    currentIndex = 0;
    highlightMatches(searchInput.value.toLowerCase());
});

    nextBtn.addEventListener('click', function () {
    if (matches.length > 0) {
    currentIndex = (currentIndex + 1) % matches.length;
    scrollToMatch(currentIndex);
    updateMatchInfo();
}
});

    prevBtn.addEventListener('click', function () {
    if (matches.length > 0) {
    currentIndex = (currentIndex - 1 + matches.length) % matches.length;
    scrollToMatch(currentIndex);
    updateMatchInfo();
}
});
});
