<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Detalles de la Cita</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <form @submit.prevent="submit" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                         <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Titulo</label>
                          <input 
                            id="nombre"
                            v-model="form.title"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" disabled type="text" placeholder="Titulo" 
                          />
                        </div>
                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Descripcion</label>
                        <input         
                            id="diagnostico"
                            v-model="form.descripcion"                
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" disabled type="text" placeholder="Descripcion" 
                        />
                        </div>
                        <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Inicio</label>
                    <input         
                        id="diagnostico"
                        v-model="form.start"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" disabled type="datetime-local" placeholder="Inicio" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fin</label>
                    <input         
                        id="diagnostico"
                        v-model="form.end"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" disabled type="datetime-local" placeholder="Fin" 
                    />
                </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Especialidad</label>
                        <input         
                            id="diagnostico"
                            v-model="form.id_paciente"                
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" disabled type="text" placeholder="Especialidad" 
                        />
                    </div>
                        </div>

                        <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>
                           <Link
                            :href="route('agenda.index')"                    
                            class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">
                            Volver
                            </Link>
                        </div>
                    </form>
                                    
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    AppLayout,
    Link
  },
  props: ["agenda"],
  data() {
    return {
      form: {
        title: this.$props.agenda.title,
        descripcion: this.$props.agenda.descripcion,
        start: this.$props.agenda.start,
        end: this.$props.agenda.end,
        id_paciente: this.$props.agenda.id_paciente,
      },
    };
  },
};
</script>