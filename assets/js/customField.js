/**
 * Configures a date/time picker with custom settings.
 * 
 * @param {string} id 
 * @param {string} viewMode 
 * @param {boolean} decades 
 * @param {boolean} year 
 * @param {boolean} month 
 * @param {boolean} date 
 * @param {boolean} hours 
 * @param {boolean} minutes 
 * @param {boolean} seconds 
 */
function configureDateTimePicker(id,viewMode,decades,year,month,date,hours,minutes,seconds) {
    new tempusDominus.TempusDominus(document.getElementById(id), {
        display: {
            viewMode: viewMode,
            components: {
                decades: decades,
                year: year,
                month: month,
                date: date,
                hours: hours,
                minutes: minutes,
                seconds: seconds
            }
        }
    });
}

configureDateTimePicker("kt_td_picker_time_only","clock",false,false,false,false,true,true,false)
configureDateTimePicker("kt_td_picker_date_only","calendar",true,true,true,true,false,false,false)
