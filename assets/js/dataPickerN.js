document.addEventListener('DOMContentLoaded', function() {
    let startDateInput = document.getElementById('startDateInput');
    let endDateInput = document.getElementById('endDateInput');

    let startDatePicker = flatpickr(startDateInput, {
      maxDate: 'today',
      dateFormat: 'd/m/Y',
      locale: {
        weekdays: {
          shorthand: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
          longhand: [
            "Dimanche",
            "Lundi",
            "Mardi",
            "Mercredi",
            "Jeudi",
            "Vendredi",
            "Samedi",
          ],
        },
        months: {
          shorthand: [
            "Jan",
            "Fév",
            "Mar",
            "Avr",
            "Mai",
            "Juin",
            "Juil",
            "Août",
            "Sep",
            "Oct",
            "Nov",
            "Déc",
          ],
          longhand: [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Août",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre",
          ],
        },
      },
      onChange: function(selectedDates, dateStr) {
        if (selectedDates[0]) {
          let minEndDate = selectedDates[0];
          endDatePicker.set('minDate', minEndDate);
        }
      }
    });

    let endDatePicker = flatpickr(endDateInput, {
      maxDate: 'today',
      dateFormat: 'd/m/Y',
      locale: {
        weekdays: {
          shorthand: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
          longhand: [
            "Dimanche",
            "Lundi",
            "Mardi",
            "Mercredi",
            "Jeudi",
            "Vendredi",
            "Samedi",
          ],
        },
        months: {
          shorthand: [
            "Jan",
            "Fév",
            "Mar",
            "Avr",
            "Mai",
            "Juin",
            "Juil",
            "Août",
            "Sep",
            "Oct",
            "Nov",
            "Déc",
          ],
          longhand: [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Août",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre",
          ],
        },
      }
    });
  });