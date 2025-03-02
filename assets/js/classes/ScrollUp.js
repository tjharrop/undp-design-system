

class ScrollUp {
    constructor(container) {
        this.$window = $(window)
        this.$container = $(container)
        this.$navigation = $('[data-navigation]')
        this.$scrollBtn = this.$container.find('[data-scroll-btn]')

        this.classes = {
            visible: 'visible'
        }
        this.initialized = false
    }

    init() {
        this.bindEvents()
    }

    bindEvents() {
        this.initialized = true

        this.$scrollBtn.click(() => this.scrollTop())
        this.$window
            .resize(() => this.handleStickyToggle())
            .scroll(() => this.handleStickyToggle())
    }

    unbindEvents() {
        this.initialized = false

        this.$scrollBtn.off('click')
        this.$window.off('resize, scroll')
        this.hide()
    }

    handleStickyToggle() {
        const topThresh = this.$window.scrollTop() + this.$navigation.height()
        const shouldStick = topThresh > this.$container.offset().top

        shouldStick ? this.show() : this.hide()
    }

    show() {
        this.$scrollBtn.addClass(this.classes.visible)
    }

    hide() {
        this.$scrollBtn.removeClass(this.classes.visible)
    }

    scrollTop() {
        $("html, body").animate({
            scrollTop: this.$container.offset().top - (this.$navigation.height() * 1.5)
        }, 500)
    }
}


export default ScrollUp
