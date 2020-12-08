class MultiSelect {
    constructor() {
        this.classOpen = 'open';
        this.dataSelectControl = '[data-select-control]';

        this.$window = $(window);
        this.$currentSelect = null;
        this.$searchInput = $('[data-input-search]');
        this.$countryList = $('[data-countries]');
        this.$countryContainer = $('[data-countries]');
        this.selects = $('[data-multi-select]');
        this.$containerFilter = $('[data-container-filters]');
        this.filters = {
            region: [],
            officeType: [],
            inputSearch: '',
        };
    }

    init() {
        this.listenerSelects();
        this.listenerWindowClick();
        this.listenerInputSearch();
    }

    closeAll() {
        this.selects.removeClass(this.classOpen);
    }

    listenerSelects() {
        this.selects.each((i, select) => {
            $(select).find(this.dataSelectControl).click(() => {
                this.$currentSelect = $(select);
                if (!this.$currentSelect.hasClass(this.classOpen)) {
                    this.closeAll();
                }
                this.toogleSelect();
                this.totalOptionsSelected();
            });
        })
    }

    listenerWindowClick() {
        this.$window.click(evt => {
            if (this.$currentSelect && !this.$currentSelect.is(evt.target) &&
                this.$currentSelect.has(evt.target).length === 0 && this.$currentSelect.hasClass(this.classOpen)) {
                this.closeAll();
            }
        });
    }

    toogleSelect() {
        this.$currentSelect.toggleClass(this.classOpen);
    }

    totalOptionsSelected() {
        const inputs = this.$currentSelect.find('input[type="checkbox"]');
        inputs.change((evt) => {
            console.log('value:: ', $(evt.currentTarget).val(), $(evt.currentTarget).is(":checked"))
            const inputs = this.$currentSelect.find("input:checked");
            const total = inputs.length;
            const counter = this.$currentSelect.find(this.dataSelectControl + ' span');
            counter.text('(' + total + ')');
            if (total == 0) {
                counter.text('');
            }
            this.printContainerFilters();
        })
    }

    printContainerFilters() {
        this.$containerFilter.html('');
        this.$containerFilter.append('<p class="tag uppercase">Active filters</p>');
        this.selects.find("input:checked").each((i, input) => {
            const text = $(input).parent().text();
            const inputValue = $(input).val();
            this.$containerFilter.append('<a class="filter" href="#" data-close-filter data-input-value="' + inputValue + '">' + text + '</a>')
        });
        this.$containerFilter.append('<a class="tag filter-clear" data-close-all-select href="#" data-clear-all>Clear All</a>');
        this.listenerCloseFilter()
        this.listenerClearAllFilters();
    }

    listenerCloseFilter() {
        $('[data-close-filter]').on('click', (evt) => {
            evt.preventDefault();
            const inputValue = $(evt.currentTarget).data('input-value');
            const input = $('input[value="' + inputValue + '"]');
            input.prop('checked', false);
            const updateSelectCounter = () => {
                const counter = input.closest('[data-options]').siblings(this.dataSelectControl).find('span');
                const total = counter.text().match(/\d/g);
                counter.text(total && total > 1 ? `(${total.join("") - 1})` : '');
            };
            updateSelectCounter();
            $(evt.currentTarget).remove();
            if (!this.selects.find('input[type="checkbox"]').length) {
                this.$containerFilter.html('')
            }
        });
    }

    listenerClearAllFilters() {
        $('[data-close-all-select]').on('click', (evt) => {
            evt.preventDefault();
            this.$containerFilter.html('');
            this.selects.find("input:checked").prop('checked', false);

            this.selects.each((i, select) => {
                const counter = $(select).find(this.dataSelectControl + ' span');
                counter.text('');
            });
        });
    }

    listenerInputSearch() {
        this.$searchInput.keyup(event => {
            this.filters.inputSearch = this.$searchInput.val().toLowerCase()
            console.log(this.filters);
            // this.search();
        });
    }

    search() {
        if (searchValue.length > 1) {
            let filtered = this.$countryList.filter(function () {
                return $(this).find('.country').text().toLowerCase().includes(searchValue)
            });

            this.$countryContainer.html(filtered);
        }

    }
}

export default MultiSelect;