<template lang="">
     
     <FullCalendar :options="calendarOptions" />
</template>
<script>
import FullCalendar from "@fullcalendar/vue3"
import dayGridPlugin from "@fullcalendar/daygrid"
import timeGridPlugin from "@fullcalendar/timegrid"
import esLocale from '@fullcalendar/core/locales/es';
import interactionPlugin from '@fullcalendar/interaction'
import { Link } from "@inertiajs/inertia-vue3";
import { BeakerIcon } from '@heroicons/vue/solid'
export default {
    props:{

    },
    components:{
        FullCalendar //componente que se va a exportar a agenda 
    },
    data() {
        return {
            calendarOptions: {
        plugins: [ dayGridPlugin, interactionPlugin, timeGridPlugin, ],
        initialView:  'dayGridMonth',
        height:'650px',
        locale:'es',
        headerToolbar:{
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay',
            events:''
        }
        
      }
        }
    },
}
</script>
