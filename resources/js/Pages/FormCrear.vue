<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Agregar Paciente</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                <form @submit.prevent="submit" class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre</label>
                    <input 
                    id="nombre"
                    v-model="form.nombre"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ingrese el nombre del paciente" 
                    />
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Diagnostico</label>
                    <input         
                        id="diagnostico"
                        v-model="form.diagnostico"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Diagnostico" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Edad</label>
                    <input         
                        id="diagnostico"
                        v-model="form.edad"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Edad" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha de Valoracion</label>
                    <input         
                        id="diagnostico"
                        v-model="form.fecha_valoracion"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" placeholder="Fecha de Valoracion" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Telefono</label>
                    <input         
                        id="diagnostico"
                        v-model="form.telefono"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Telefono" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Direccion</label>
                    <input         
                        id="diagnostico"
                        v-model="form.direccion"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Direccion" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Historial</label>
                    <input         
                        id="diagnostico"
                        v-model="form.historial"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Historial" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Observaciones</label>
                    <input         
                        id="diagnostico"
                        v-model="form.observaciones"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Observaciones" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Seguimiento</label>
                    <input         
                        id="diagnostico"
                        v-model="form.seguimiento"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Seguimiento" 
                    />
                </div>
                 <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Especialidad</label>
                    <input         
                        id="id_especialidad"
                        v-model="form.id_especialidad"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Especialidad" 
                    />
                </div>
            </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <Link
                    :href="route('pacientes.index')"                    
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
        Link
    },
    props:{
        errors: Object
    },
    data() {
        return {
              form:{
                nombre:null,
                diagnostico:null,
                edad:null,
                fecha_valoracion:null,
                telefono:null,
                direccion:null,
                historial:null,
                observaciones:null,
                seguimiento:null,
               id_especialidad:null,
            }
        }
    },
    methods: {
        submit(){
            this.$inertia.post(route('pacientes.store'), this.form)
        }
    },
}
</script>
