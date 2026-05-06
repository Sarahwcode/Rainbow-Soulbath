/*document.addEventListener('DOMContentLoaded', () => {
    const dateInput = document.getElementById('bookingDate');

    // 1. Set the minimum date to today (prevents picking the past)
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);

    // 2. Prevent picking Monday (1) and Tuesday (2)
    dateInput.addEventListener('input', function(e) {
        const day = new Date(this.value).getUTCDay();
        
        // 0 = Sunday, 1 = Monday, 2 = Tuesday, 3 = Wednesday, 4 = Thursday, 5 = Friday, 6 = Saturday
        if ([1, 2].includes(day)) {
            e.preventDefault();
            this.value = '';
            alert('Please select a date between Wednesday and Sunday. We are closed on Mondays and Tuesdays.');
        }
    });
});*/
document.addEventListener('DOMContentLoaded', () => {
    const dateInput = document.getElementById('bookingDate');

    // 1. Set the minimum date to today (prevents picking the past)
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);

    // 2. Handle the date selection
    dateInput.addEventListener('input', function(e) {
        if (!this.value) return;

        const selectedDate = new Date(this.value);
        const dayOfWeek = selectedDate.getUTCDay();
        
        // 0 = Sunday, 1 = Monday, 2 = Tuesday, 3 = Wednesday...
        if ([1, 2].includes(dayOfWeek)) {
            this.value = '';
            alert('Please select a date between Wednesday and Sunday. We are closed on Mondays and Tuesdays.');
        } else {
            // 3. This is how you format the date to British (en-GB)
            const britishDate = selectedDate.toLocaleDateString('en-GB');
            
            // Just for your testing: this will log "12/05/2026" to the console
            console.log("Selected British Date: " + britishDate);
        }
    });
});