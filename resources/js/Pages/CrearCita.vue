<template>
    <app-layout>
         <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Agregar Cita</h2>
        </template>
         <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                <form @submit.prevent="submit" class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Titulo de la cita</label>
                    <input 
                    id="nombre"
                    v-model="form.title"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ingrese el titulo de la cita" 
                    />
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Descripcion</label>
                    <input         
                        id="diagnostico"
                        v-model="form.descripcion"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Escriba una descripcion" 
                    />
                </div>
                 <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha de inicio</label>
                    <input         
                        id="id_especialidad"
                        v-model="form.start"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="datetime-local" placeholder="Fecha de inicio" 
                    />
                </div>
                 <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha de fin</label>
                    <input         
                        id="id_especialidad"
                        v-model="form.end"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="datetime-local" placeholder="Fecha de Fin" 
                    />
                </div>
                 <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Paciente</label>
                    <input         
                        id="id_especialidad"
                        v-model="form.id_paciente"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Paciente" 
                    />
                </div>
            </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <Link
                    :href="route('agenda.index')"                    
                    class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">
                    Cancelar
                </Link> 
                <button 
                    type="submit"
                    class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'
                >
                    Guardar
                </button>
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
    components:{
        AppLayout,
        Link,
    },
    props:{
        errors:Object,
    },
    data() {
        return {
            form:{
                title:null,
                descripcion:null,
                start:null,
                end:null,
               id_paciente:null,
            }
        }
    },
    methods: {
        submit(){
            this.$inertia.post(route('agenda.store'), this.form)
        }
    },
}
</script>
<style lang="">
    
</style>