// ETF UNSA - Calendar Widget Logic
// Extracted from CalendarWidget.astro

// Client-side logic for the widget
class CalendarWidget extends HTMLElement {
    constructor() {
        super();
        this.events = [];
        this.year = 0;
        this.month = 0;

        const widget = this.querySelector('.calendar-widget');
        this.year = parseInt(
            widget?.getAttribute('data-year') || new Date().getFullYear().toString()
        );
        this.month = parseInt(
            widget?.getAttribute('data-month') || new Date().getMonth().toString()
        );

        // Parse events from data attribute
        try {
            this.events = JSON.parse(widget?.getAttribute('data-events') || '[]');
        } catch (e) {
            console.error('Failed to parse calendar events', e);
            this.events = [];
        }
    }

    connectedCallback() {
        this.querySelector('#btn-prev-month')?.addEventListener('click', () =>
            this.changeMonth(-1)
        );
        this.querySelector('#btn-next-month')?.addEventListener('click', () => this.changeMonth(1));
    }

    changeMonth(offset) {
        this.month += offset;
        if (this.month < 0) {
            this.month = 11;
            this.year--;
        } else if (this.month > 11) {
            this.month = 0;
            this.year++;
        }
        this.render();
    }

    render() {
        const label = this.querySelector('#calendar-month-label');
        if (label) {
            const date = new Date(this.year, this.month);
            const formatter = new Intl.DateTimeFormat('bs-BA', { month: 'long', year: 'numeric' });
            const formattedLabel = formatter.format(date);
            const capitalizedLabel = formattedLabel.charAt(0).toUpperCase() + formattedLabel.slice(1);
            label.innerHTML = `<i class="bi bi-calendar3 me-2"></i> ${capitalizedLabel}`;
        }

        const tbody = this.querySelector('#calendar-body');
        if (tbody) {
            tbody.innerHTML = this.generateGridHTML();
        }
    }

    generateGridHTML() {
        const firstDay = new Date(this.year, this.month, 1);
        const lastDay = new Date(this.year, this.month + 1, 0);
        let startDay = firstDay.getDay() - 1;
        if (startDay === -1) startDay = 6;
        const daysInMonth = lastDay.getDate();
        const prevMonthLastDay = new Date(this.year, this.month, 0).getDate();

        let html = '';
        let daysBuffer = [];

        // Prev month
        for (let i = startDay - 1; i >= 0; i--) {
            daysBuffer.push({ day: prevMonthLastDay - i, type: 'prev' });
        }
        // Current month
        for (let i = 1; i <= daysInMonth; i++) {
            daysBuffer.push({ day: i, type: 'current' });
        }
        // Next month
        const remaining = 42 - daysBuffer.length;
        for (let i = 1; i <= remaining; i++) {
            daysBuffer.push({ day: i, type: 'next' });
        }

        // Generate Rows
        const today = new Date(); // Browser execution time = actual today

        for (let i = 0; i < daysBuffer.length; i += 7) {
            html += '<tr>';
            for (let j = 0; j < 7; j++) {
                const d = daysBuffer[i + j];
                let cellClass = 'py-2 ';

                const isToday =
                    d.type === 'current' &&
                    this.year === today.getFullYear() &&
                    this.month === today.getMonth() &&
                    d.day === today.getDate();

                // Client-side event checking
                // Construct precise date YYYY-MM-DD
                let checkY = this.year;
                let checkM = this.month;
                if (d.type === 'prev') {
                    checkM = this.month - 1;
                    if (checkM < 0) {
                        checkM = 11;
                        checkY--;
                    }
                } else if (d.type === 'next') {
                    checkM = this.month + 1;
                    if (checkM > 11) {
                        checkM = 0;
                        checkY++;
                    }
                }

                const dateStr = `${checkY}-${String(checkM + 1).padStart(2, '0')}-${String(d.day).padStart(2, '0')}`;
                const eventData = this.events.find((e) => e.date === dateStr);
                const hasEvent = !!eventData;

                if (d.type !== 'current') {
                    cellClass += 'text-muted opacity-50';
                } else if (isToday) {
                    cellClass +=
                        'bg-primary text-white rounded-circle shadow-sm fw-bold position-relative';
                } else if (hasEvent) {
                    cellClass += 'fw-bold text-primary position-relative';
                } else {
                    cellClass += '';
                }

                // Styles
                const style = isToday
                    ? 'width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;'
                    : '';

                const content = `
                ${d.day}
                ${hasEvent && !isToday ? '<span class="position-absolute bottom-0 start-50 translate-middle-x bg-primary rounded-circle" style="width: 4px; height: 4px; margin-bottom: 4px;"></span>' : ''}
            `;

                let cellContent = '';
                if (hasEvent) {
                    // Render as link
                    cellContent = `
                    <a href="${eventData?.url}" class="${cellClass} text-decoration-none d-flex align-items-center justify-content-center" style="${isToday ? style : 'width: 100%; height: 100%;'}" title="Vidi događaj">
                        ${content}
                    </a>
                `;
                } else {
                    cellContent = `
                    <span class="${cellClass}" style="${style}">
                         ${content}
                    </span>
                `;
                }

                html += `
              <td class="align-middle">
                <div class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  ${cellContent}
                </div>
              </td>
            `;
            }
            html += '</tr>';
        }
        return html;
    }
}

// Define the custom element
customElements.define('calendar-widget', CalendarWidget);
