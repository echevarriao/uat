jQuery(document).ready(function(){
    
    jQuery('.datepicker').datepicker({ dateFormat: "yy-mm-dd" });
    
    jQuery('.timepicker').timepicker(
    {
        
        timeFormat: 'hh:mm p',
        scrollbar: true,
        minTime: '0:00', // 11:45:00 AM,
        minHour: 1,
        minMinutes: 00,
        maxHour: 24,
        maxMinutes: 00,
        startTime: new Date(0,0,0,0,0), // 3:00:00 PM - noon
        interval: 5 // 15 minutes
        
    });

});