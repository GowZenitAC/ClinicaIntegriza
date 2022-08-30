<template>
    <app-layout title="Pacientes">
    <template #header>
 <h1 class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-l from-indigo-500 to-indigo-800 ">Mis Pacientes</h1>
    </template>
     
     <div class="py-12">
        <div class="max-w-71 mx-auto sm:px-6 lg:px-8">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg ">
               
                <Link
                  :href="route('pacientes.create')"
                  class="flex-shrink-1 mt-1 mx-1 bg-blue-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
</svg>
                 </Link>
                 <form method="get" class="flex" @submit.prevent="submit">
                    <input v-model="form.nombre" class="w-full rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent ml-2 px-2" placeholder="Ingresa el nombre del paciente" type="text" />
                    <button type="submit" class=" bg-blue-500 ml-1 text-white font-semibold py-1 px-4 rounded-lg">Buscar</button>
                 </form>
                 <!--TABLA PARA mostrar los pacientes-->
                    <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
                        <thead>
                            <tr class="text-left border-b border-gray-300">
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Nombre</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Diagnostico</th>
                                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Especialidad</th>
                                 <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Acciones</th>
                            </tr> 
                        </thead>
                        <tbody class="bg-gray-700 border-b border-gray-600 text-gray-200">
                                <tr v-for="paciente in pacientes.data" :key="paciente.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium">{{paciente.nombre}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm">{{paciente.diagnostico}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm">{{paciente.id_especialidad}}</div>
                                    </td>
                                    <td class="flex m-2">
                                    <Link 
                                         :href="route('pacientes.edit', paciente.id)"
                                         class="flex-shrink-0 mx-1 bg-purple-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="button">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
</svg>
                                    </Link>
                                    
                                   <!--  <Link 
                                      class="flex-shrink-0 mx-1 bg-pink-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 focus:ring-offset-pink-200" type="button"
                                            method="delete"
                                            :href="route('pacientes.destroy', paciente.id)">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
</svg>
                                        </Link>-->
                                        <button 
                                        @click="modalOpen=true;selectedUser=paciente"
                                        class="flex-shrink-0 mx-1 bg-pink-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 focus:ring-offset-pink-200" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
</svg>
                                        </button>
                                        <Link
                                        class="flex-shrink-0 mx-1 bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-pink-200" type="button" 
                                        :href="route('pacientes.show', paciente.id)">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </Link>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    <!--Paginacion-->
                    <div class="bg-gray-700  border-gray-600 text-gray-100">
                        <Link
                        class="pt-2 mx-3"
                        v-for="link in pacientes.links"
                        :href="link.url"
                       v-html="link.label"
                        />
                    </div>
            </div>
        </div>
     </div>

     <jet-dialog-modal :show="modalOpen">
        <template v-slot:title>
           <h1>Eliminar al Usuario</h1> 
        </template>
        <template v-slot:content>
            <p v-if="selectedUser">¿Seguro que quiere eliminar al usuario: {{selectedUser.nombre}}</p> 
        </template>
        <template v-slot:footer>
        
           <jet-button class="bg-red-500 mr-2 hover:bg-red-800" @click="modalOpen=false">
            Cerrar
           </jet-button> 
           <jet-button @click="deletePaciente()">
            Eliminar
           </jet-button> 
        </template>
     </jet-dialog-modal>
       
    </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout";
//import Paginator from "@/Components/Paginator"
import { Link } from "@inertiajs/inertia-vue3";
import {Inertia} from "@inertiajs/inertia";
import { BeakerIcon } from '@heroicons/vue/solid'
import JetDialogModal from "@/Jetstream/DialogModal";
import JetButton from "@/Jetstream/Button";
export default {
    props:{
        pacientes: Object, //se trae a los pacientes como un objeto 
        especialidades: Array
    },
     components:{
        AppLayout,
        Link,
        BeakerIcon, 
        JetDialogModal,
        JetButton
       // Paginator
     },
     data() {
        return {
            modal: false,
            form:{
                nombre:""
            },
            modalOpen:false,
            selectedUser:Object,
        }
     },
     methods: { 
        submit:function() {
            this.$inertia.get(route("pacientes.index", this.form))
        },
        deletePaciente:function(){
           // if (!confirm("¿Seguro que quiere eliminar este registro?")) return;

            this.$inertia.delete(route('pacientes.destroy', {paciente: this.selectedUser}));
            this.modalOpen=false
        }
     },
}
</script>