// Optional JS for synchronized scrolling
const tableWrapper = document.querySelector('.table-wrapper');
const tableScrollable = document.querySelector('.table-scrollable');

tableScrollable.addEventListener('scroll', () => {
    tableWrapper.scrollTop = tableScrollable.scrollTop;
});
